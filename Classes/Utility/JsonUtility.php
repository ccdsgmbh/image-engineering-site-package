<?php
declare(strict_types=1);

namespace ImageEngineering\SiteTemplate\Utility;

use JsonException;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class JsonUtility implements DataProcessorInterface
{
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        $fields = GeneralUtility::trimExplode(',', (string)($processorConfiguration['fields'] ?? ''), true);

        foreach ($fields as $field) {
            $value = (string)($processedData['data'][$field] ?? '');
            $processedData[$field . 'Array'] = $value === '' ? [] : $this->decode($value);
        }

        return $processedData;
    }

    /**
     * Decode JSON payloads for content elements and gracefully fall back to
     * pipe-separated line definitions ("value|label").
     */
    public function decode(string $value): array
    {
        try {
            $decoded = json_decode($value, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($decoded)) {
                return $this->normalizeArray($decoded);
            }
        } catch (JsonException $exception) {
            // Ignore and fall back to manual parsing below.
        }

        $items = [];
        foreach (GeneralUtility::trimExplode(PHP_EOL, $value, true) as $line) {
            [$statValue, $label] = array_map('trim', explode('|', $line) + [1 => '']);
            if ($statValue === '' && $label === '') {
                continue;
            }
            $items[] = [
                'value' => $statValue,
                'label' => $label,
            ];
        }

        return $items;
    }

    private function normalizeArray(array $decoded): array
    {
        $items = [];

        foreach ($decoded as $entry) {
            if (!is_array($entry)) {
                continue;
            }

            $items[] = [
                'value' => (string)($entry['value'] ?? ($entry['stat'] ?? '')),
                'label' => (string)($entry['label'] ?? ($entry['title'] ?? '')),
            ];
        }

        return $items;
    }
}
