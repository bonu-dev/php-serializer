<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer\Serializers;

use Bonu\PhpSerializer\SerializerInterface;
use Bonu\PhpSerializer\Exceptions\SerializationException;

class NativeSerializer implements SerializerInterface
{
    /**
     * @inheritDoc
     */
    public function serialize(mixed $value): string
    {
        try {
            return \serialize($value);
        } catch (\Throwable $e) {
            throw new SerializationException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * @inheritDoc
     *
     * @param array{allowed_classes?: array<string>|bool} $options
     */
    public function unserialize(string $value, array $options = []): mixed
    {
        return \unserialize($value, $options);
    }
}