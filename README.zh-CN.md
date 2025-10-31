# GB/T 7408

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-7408.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-7408)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-7408.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-7408)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-7408.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-7408)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

一个实现 GB/T 7408 国家标准的 PHP 包，用于数据元和交换格式 - 信息交换 - 日期和时间表示法。该包按照中国国家标准提供了处理星期表示的标准化方法。

## 功能特性

- ✅ **标准兼容**：实现 GB/T 7408 国家标准的日期时间表示法
- 🔢 **数字值**：使用标准化的数字值（01-07）表示星期
- 🌐 **本地化标签**：为所有星期提供中文标签
- 🚀 **现代 PHP**：使用 PHP 8.1+ 枚举构建，保证类型安全
- 🔧 **易于集成**：为日期时间相关系统提供简单的 API
- 📦 **轻量级**：最少依赖，仅需要 `tourze/enum-extra`

## 系统要求

- PHP 8.1 或更高版本
- `tourze/enum-extra` 包

## 安装说明

您可以通过 Composer 安装该包：

```bash
composer require tourze/gb-t-7408
```

## 快速开始

```php
<?php

use Tourze\GBT7408\Weekday;

// 获取所有星期选项为数组
$weekdays = Weekday::items();
// 返回：['01' => '星期一', '02' => '星期二', ...]

// 获取星期的中文标签
$label = Weekday::Monday->getLabel(); // 返回 "星期一"
$label = Weekday::Sunday->getLabel(); // 返回 "星期日"

// 获取数字值（GB/T 7408 标准）
$value = Weekday::Monday->value; // 返回 "01"
$value = Weekday::Sunday->value; // 返回 "07"

// 用于下拉选项
$selectOptions = Weekday::select();
foreach ($selectOptions as $value => $label) {
    echo "<option value=\"$value\">$label</option>\n";
}

// 从标准值转换
$monday = Weekday::from('01');
echo $monday->getLabel(); // 输出："星期一"
```

## 标准参考

该包实现了中国国家标准 GB/T 7408 的日期时间表示法。根据该标准，星期使用从 01 到 07 的数字值表示，其中：

- `01` = 星期一
- `02` = 星期二
- `03` = 星期三
- `04` = 星期四
- `05` = 星期五
- `06` = 星期六
- `07` = 星期日

### 参考文档

- [GB/T 7408 标准文档](https://std.samr.gov.cn/gb/search/gbDetailed?id=0DF2F72AE375403DE06397BE0A0A87C4)
- [ISO 8601 日期时间格式](https://www.iso.org/iso-8601-date-and-time-format.html)

## 贡献指南

欢迎贡献！请随时提交 Pull Request。对于重大更改，请先开启 issue 来讨论您希望更改的内容。

### 指导原则

- 遵循 PSR-12 编码标准
- 为任何新功能添加测试
- 根据需要更新文档
- 在提交 PR 之前确保所有测试都通过

## 测试

```bash
# 运行测试
composer test

# 运行静态分析
composer analyse
```

## 版权和许可

MIT 许可协议。请查看 [License 文件](LICENSE) 获取更多信息。

## 贡献者

- **作者**: [tourze](https://github.com/tourze)
- **贡献者**: [所有贡献者](../../contributors)

## 更新日志

请查看 [CHANGELOG.md](CHANGELOG.md) 以了解最近的更改内容。
