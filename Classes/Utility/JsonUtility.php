<?php

declare(strict_types=1);

namespace ImageEngineering\IeSiteTemplate\Utility;

use InvalidArgumentException;

final class JsonUtility
{
    /**
     * Encode data to JSON with sane defaults.
     */
    public static function encode(mixed $value): string
    {
        $json = json_encode($value, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return (string)$json;
    }

    /**
     * Decode a JSON string to the requested type.
     *
     * @template TReturn
     * @param class-string<TReturn>|null $className
     * @return mixed|TReturn
     */
    public static function decode(string $json, ?string $className = null): mixed
    {
        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        if ($className === null) {
            return $decoded;
        }

        if (!class_exists($className)) {
            throw new InvalidArgumentException(sprintf('Class %s does not exist.', $className));
        }

        if (!is_array($decoded)) {
            throw new InvalidArgumentException('JSON payload must decode to an array when mapping to a class.');
        }

        return self::mapToClass($decoded, $className);
    }

    private static function mapToClass(array $data, string $className): object
    {
        $object = new $className();
        foreach ($data as $property => $value) {
            if (!property_exists($object, (string)$property)) {
                continue;
            }
            $object->{$property} = $value;
        }
        return $object;
    }
}
