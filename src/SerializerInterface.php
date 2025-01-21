<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer;

interface SerializerInterface
{
    /**
     * @param mixed $value
     *
     * @return string
     *
     * @throws \Bonu\PhpSerializer\Exceptions\SerializationException
     */
    public function serialize(mixed $value): string;

    /**
     * @param string $value
     * @param array<string, mixed> $options
     *
     * @return mixed
     *
     * @throws \Bonu\PhpSerializer\Exceptions\SerializationException
     */
    public function unserialize(string $value, array $options = []): mixed;
}