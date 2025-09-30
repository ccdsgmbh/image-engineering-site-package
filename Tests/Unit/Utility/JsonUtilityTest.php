<?php

declare(strict_types=1);

namespace ImageEngineering\IeSiteTemplate\Tests\Unit\Utility;

use ImageEngineering\IeSiteTemplate\Utility\JsonUtility;
use PHPUnit\Framework\TestCase;

final class JsonUtilityTest extends TestCase
{
    public function testEncodeReturnsJsonString(): void
    {
        $data = ['foo' => 'bar'];
        $json = JsonUtility::encode($data);

        $this->assertSame('{"foo":"bar"}', $json);
    }

    public function testDecodeReturnsArray(): void
    {
        $json = '{"foo":"bar"}';
        $data = JsonUtility::decode($json);

        $this->assertIsArray($data);
        $this->assertSame('bar', $data['foo'] ?? null);
    }

    public function testDecodeMapsToClass(): void
    {
        $json = '{"title":"Test"}';
        $object = JsonUtility::decode($json, DummyDto::class);

        $this->assertInstanceOf(DummyDto::class, $object);
        $this->assertSame('Test', $object->title);
    }
}

final class DummyDto
{
    public string $title = '';
}
