<?php

declare(strict_types = 1);

namespace Bonu\PhpSerializer\Tests\Serializers;

use Bonu\PhpSerializer\Tests\TestCase;
use Bonu\PhpSerializer\Serializers\NativeSerializer;

class NativeSerializerTest extends TestCase
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
            \serialize($data),
            (new NativeSerializer())->serialize($data)
        );
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itUnserializesArray(): void
    {
        $serializedData = \serialize([
            'foo' => 'bar',
            'baz' => 123,
        ]);

        $this->assertSame(
            \unserialize($serializedData),
            (new NativeSerializer())->unserialize($serializedData)
        );
    }
}