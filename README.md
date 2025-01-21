# PHP Serializer

[![PHPUnit](https://github.com/bonu-dev/php-serializer/actions/workflows/phpunit.yaml/badge.svg)](https://github.com/bonu-dev/php-serializer/actions/workflows/phpunit.yaml)

Simple PHP wrapper for serialization, that supports serialization extensions.

## Installation

```bash
composer require bonu/php-serializer
```

## Usage

```php
use Bonu\PhpSerializer\Serializer;

$data = [
    'foo' => 'bar',
    'baz' => 123,
];

$serializedData = Serializer::serialize($data);
$unserializedData = Serializer::unserialize($serializedData);
```

## License

This package is licensed under the MIT License.