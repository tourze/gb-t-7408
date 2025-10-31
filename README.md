# GB/T 7408

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-7408.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-7408)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-7408.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-7408)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-7408.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-7408)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

A PHP package implementing GB/T 7408 standard for data elements and interchange formats - Information interchange - Representation of dates and times. This package provides a standardized way to handle weekday representations according to Chinese national standards.

## Features

- ✅ **Standards Compliant**: Implements GB/T 7408 national standard for date and time representation
- 🔢 **Numeric Values**: Uses standardized numeric values (01-07) for weekdays
- 🌐 **Localized Labels**: Provides Chinese labels for all weekdays
- 🚀 **Modern PHP**: Built with PHP 8.1+ enums for type safety
- 🔧 **Easy Integration**: Simple API for date and time related systems
- 📦 **Lightweight**: Minimal dependencies, only requires `tourze/enum-extra`

## Requirements

- PHP 8.1 or higher
- `tourze/enum-extra` package

## Installation

You can install the package via Composer:

```bash
composer require tourze/gb-t-7408
```

## Quick Start

```php
<?php

use Tourze\GBT7408\Weekday;

// Get all weekday options as array
$weekdays = Weekday::items();
// Returns: ['01' => '星期一', '02' => '星期二', ...]

// Get the Chinese label of a weekday
echo Weekday::Monday->getLabel(); // Output: "星期一"
echo Weekday::Sunday->getLabel(); // Output: "星期日"

// Get the numeric value (GB/T 7408 standard)
echo Weekday::Monday->value; // Output: "01"
echo Weekday::Sunday->value; // Output: "07"

// Use in select options
$selectOptions = Weekday::select();
foreach ($selectOptions as $value => $label) {
    echo "<option value=\"$value\">$label</option>\n";
}

// Convert from standard values
$monday = Weekday::from('01');
echo $monday->getLabel(); // Output: "星期一"
```

## Standard Reference

This package implements the Chinese national standard GB/T 7408 for date and time representation. According to this standard, weekdays are represented using numeric values from 01 to 07, where:

- `01` = Monday (星期一)
- `02` = Tuesday (星期二) 
- `03` = Wednesday (星期三)
- `04` = Thursday (星期四)
- `05` = Friday (星期五)
- `06` = Saturday (星期六)
- `07` = Sunday (星期日)

### References

- [GB/T 7408 Standard Document](https://std.samr.gov.cn/gb/search/gbDetailed?id=0DF2F72AE375403DE06397BE0A0A87C4)
- [ISO 8601 Date and Time Format](https://www.iso.org/iso-8601-date-and-time-format.html)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

### Guidelines

- Follow PSR-12 coding standards
- Add tests for any new features
- Update documentation as needed
- Ensure all tests pass before submitting PR

## Testing

```bash
# Run tests
composer test

# Run static analysis
composer analyse
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Credits

- **Author**: [tourze](https://github.com/tourze)
- **Contributors**: [All Contributors](../../contributors)

## Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for more information on what has changed recently.
