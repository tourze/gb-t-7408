<?php

declare(strict_types=1);

namespace Tourze\GBT7408\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT7408\Weekday;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * @internal
 */
#[CoversClass(Weekday::class)]
final class WeekdayTest extends AbstractEnumTestCase
{
    /**
     * 测试枚举的 cases() 方法是否返回所有 7 个星期值
     */
    public function testEnumCasesReturnAllSevenDays(): void
    {
        $cases = Weekday::cases();
        $this->assertCount(7, $cases);
        $this->assertContainsOnlyInstancesOf(Weekday::class, $cases);
    }

    /**
     * 测试 toSelectItem() 方法是否返回包含正确键的数组
     */
    public function testToSelectItemReturnsCorrectStructure(): void
    {
        $item = Weekday::Monday->toSelectItem();

        $this->assertArrayHasKey('label', $item);
        $this->assertArrayHasKey('text', $item);
        $this->assertArrayHasKey('value', $item);
        $this->assertArrayHasKey('name', $item);
    }

    /**
     * 测试 toSelectItem() 方法返回的数组是否包含正确的值
     */
    public function testToSelectItemContainsCorrectValues(): void
    {
        $item = Weekday::Monday->toSelectItem();

        $this->assertSame('星期一', $item['label']);
        $this->assertSame('星期一', $item['text']);
        $this->assertSame('01', $item['value']);
        $this->assertSame('星期一', $item['name']);
    }

    /**
     * 测试 toArray() 方法是否返回包含正确键的数组
     */
    public function testToArrayReturnsCorrectStructure(): void
    {
        $array = Weekday::Monday->toArray();

        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);
    }

    /**
     * 测试 toArray() 方法返回的数组是否包含正确的值
     */
    public function testToArrayContainsCorrectValues(): void
    {
        $array = Weekday::Monday->toArray();

        $this->assertSame('01', $array['value']);
        $this->assertSame('星期一', $array['label']);
    }

    /**
     * 测试 genOptions() 方法是否返回包含所有 7 个星期的数组
     */
    public function testGenOptionsReturnsAllSevenDays(): void
    {
        $options = Weekday::genOptions();

        $this->assertCount(7, $options);

        // 验证第一个选项的结构和值
        $firstOption = $options[0];
        $this->assertArrayHasKey('label', $firstOption);
        $this->assertArrayHasKey('text', $firstOption);
        $this->assertArrayHasKey('value', $firstOption);
        $this->assertArrayHasKey('name', $firstOption);

        // 验证所有选项的值
        $values = array_column($options, 'value');
        $this->assertContains('01', $values);
        $this->assertContains('02', $values);
        $this->assertContains('03', $values);
        $this->assertContains('04', $values);
        $this->assertContains('05', $values);
        $this->assertContains('06', $values);
        $this->assertContains('07', $values);
    }

    /**
     * 测试设置环境变量后 genOptions() 方法是否正确过滤选项
     */
    public function testGenOptionsWithEnvironmentVariable(): void
    {
        // 保存原始环境变量
        $originalEnv = $_ENV;

        try {
            // 设置环境变量以禁用星期一
            $_ENV['enum-display:' . Weekday::class . '-01'] = false;

            $options = Weekday::genOptions();

            // 应该只有 6 个选项，没有星期一
            $this->assertCount(6, $options);

            // 验证星期一不在选项中
            $values = array_column($options, 'value');
            $this->assertNotContains('01', $values);

            // 但其他星期都在
            $this->assertContains('02', $values);
            $this->assertContains('03', $values);
            $this->assertContains('04', $values);
            $this->assertContains('05', $values);
            $this->assertContains('06', $values);
            $this->assertContains('07', $values);
        } finally {
            // 恢复原始环境变量
            $_ENV = $originalEnv;
        }
    }
}
