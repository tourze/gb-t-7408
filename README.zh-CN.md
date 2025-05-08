# GB/T 7408

[English](README.md) | [中文](README.zh-CN.md)

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

GB/T 7408 数据元和交换格式 信息交换 日期和时间表示法

## 功能特性

- 提供符合 GB/T 7408 标准的星期枚举类型 `Weekday`
- 支持获取所有星期选项、星期标签和值
- 便于与日期时间相关的系统集成

## 安装说明

- 需要 PHP 8.1 及以上版本
- 依赖 `tourze/enum-extra` 包

```bash
composer require tourze/gb-t-7408
```

## 快速开始

```php
use Tourze\GBT7408\Weekday;

// 获取所有星期选项
$weekdays = Weekday::items();

// 获取星期标签
$label = Weekday::Monday->getLabel(); // 返回 "星期一"

// 获取星期值
$value = Weekday::Monday->value; // 返回 "01"
```

## 详细文档

- [GB/T 7408 标准文档](https://std.samr.gov.cn/gb/search/gbDetailed?id=0DF2F72AE375403DE06397BE0A0A87C4)

## 贡献指南

- 欢迎提交 Issue 和 PR
- 请遵循 PSR 标准和项目现有代码风格

## 版权和许可

- 开源协议：MIT
- 作者：tourze

## 更新日志

- 详见 [CHANGELOG.md]（如存在）
