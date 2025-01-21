<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer;

class Serializer
{
    /**
     * @param mixed $value
     *
     * @return string
     */
    public static function serialize(mixed $value): string
    {
        return (new SerializerFactory())->create()
            ->serialize($value);
    }

    /**
     * @param string $value
     * @param array<string, mixed> $options
     *
     * @return mixed
     */
    public static function unserialize(string $value, array $options = []): mixed
    {
        return (new SerializerFactory())->create()
            ->unserialize($value, $options);
    }
}