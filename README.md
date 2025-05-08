# GB/T 7408

[English](README.md) | [中文](README.zh-CN.md)

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

GB/T 7408 Data elements and interchange formats - Information interchange - Representation of dates and times

## Features

- Provides an Enum `Weekday` that follows the GB/T 7408 standard
- Supports retrieving all weekday options, labels, and values
- Easy integration with date and time related systems

## Installation

- Requires PHP 8.1 or above
- Depends on `tourze/enum-extra` package

```bash
composer require tourze/gb-t-7408
```

## Quick Start

```php
use Tourze\GBT7408\Weekday;

// Get all weekday options
$weekdays = Weekday::items();

// Get the label of a weekday
echo Weekday::Monday->getLabel(); // Output: "星期一"

// Get the value of a weekday
echo Weekday::Monday->value; // Output: "01"
```

## Documentation

- [GB/T 7408 Standard Document](https://std.samr.gov.cn/gb/search/gbDetailed?id=0DF2F72AE375403DE06397BE0A0A87C4)

## Contributing

- Issues and PRs are welcome
- Please follow PSR standards and existing code style

## License

- MIT License
- Author: tourze

## Changelog

- See [CHANGELOG.md] if available
