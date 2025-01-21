<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer\Tests\Serializers;

use Bonu\PhpSerializer\Tests\TestCase;
use Bonu\PhpSerializer\Serializers\NativeSerializer;
use Bonu\PhpSerializer\Serializers\IgBinarySerializer;

class IgBinarySerializerTest extends TestCase
{
    /**
     * @covers \Bonu\PhpSerializer\Serializers\NativeSerializer::serialize()
     */
    #[\PHPUnit\Framework\Attributes\Test]
    public function itSerializesArray(): void
    {
        $data = [
            'foo' => 'bar',
            'baz' => 123,
        ];

        $this->assertSame(
            \igbinary_serialize($data),
            (new IgBinarySerializer())->serialize($data)
        );
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itUnserializesArray(): void
    {
        $serializedData = \igbinary_serialize([
            'foo' => 'bar',
            'baz' => 123,
        ]);

        $this->assertSame(
            \igbinary_unserialize($serializedData),
            (new IgBinarySerializer())->unserialize($serializedData)
        );
    }
}