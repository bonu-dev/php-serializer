<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer;

use Bonu\PhpSerializer\Serializers\NativeSerializer;
use Bonu\PhpSerializer\Serializers\IgBinarySerializer;

class SerializerFactory
{
    /**
     * @return \Bonu\PhpSerializer\SerializerInterface
     */
    public function create(): SerializerInterface
    {
        if (\extension_loaded('igbinary')) {
            return new IgBinarySerializer();
        }

        return new NativeSerializer();
    }
}