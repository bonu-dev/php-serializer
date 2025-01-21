<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer\Serializers;

use Bonu\PhpSerializer\SerializerInterface;
use Bonu\PhpSerializer\Exceptions\SerializationException;

class IgBinarySerializer implements SerializerInterface
{
    /**
     * @inheritDoc
     */
    public function serialize(mixed $value): string
    {
        return \igbinary_serialize($value)
            ?? throw new SerializationException('Unable to serialize value');
    }

    /**
     * @inheritDoc
     */
    public function unserialize(string $value, array $options = []): mixed
    {
        $result = \igbinary_unserialize($value);

        if (! $result) {
            throw new SerializationException('Unable to unserialize value');
        }

        return $result;
    }
}