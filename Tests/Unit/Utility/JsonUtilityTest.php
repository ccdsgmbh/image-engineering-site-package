<?php

declare(strict_types=1);

namespace ImageEngineering\SiteTemplate\Tests\Unit\Utility;

use ImageEngineering\SiteTemplate\Utility\JsonUtility;
use PHPUnit\Framework\TestCase;

final class JsonUtilityTest extends TestCase
{
    public function testEncodeProducesJsonString(): void
    {
        $data = ['foo' => 'bar'];
        $json = JsonUtility::encode($data);

        self::assertJson($json);
        self::assertSame('{"foo":"bar"}', $json);
    }

    public function testDecodeReturnsArray(): void
    {
        $json = '{"alpha":1,"beta":true}';
        $decoded = JsonUtility::decode($json);

        self::assertSame(['alpha' => 1, 'beta' => true], $decoded);
    }

    public function testDecodeReturnsEmptyArrayForEmptyStringWhenAllowed(): void
    {
        $decoded = JsonUtility::decode('', true);
        self::assertSame([], $decoded);
    }
}
