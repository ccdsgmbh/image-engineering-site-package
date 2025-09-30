<?php

declare(strict_types=1);

namespace ImageEngineering\SiteTemplate\Utility;

final class JsonUtility
{
    /**
     * Encode data to JSON with sane defaults.
     */
    public static function encode(array $data, int $options = 0): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR | $options);
    }

    /**
     * Decode a JSON string into an associative array.
     */
    public static function decode(string $json, bool $allowEmpty = false): array
    {
        if ($json === '' && $allowEmpty) {
            return [];
        }

        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        return is_array($decoded) ? $decoded : [];
    }
}
