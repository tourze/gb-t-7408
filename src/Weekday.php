<?php

declare(strict_types=1);

namespace Tourze\GBT7408;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

enum Weekday: string implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case Monday = '01';
    case Tuesday = '02';
    case Wednesday = '03';
    case Thursday = '04';
    case Friday = '05';
    case Saturday = '06';
    case Sunday = '07';

    public function getLabel(): string
    {
        return match ($this) {
            self::Monday => '星期一',
            self::Tuesday => '星期二',
            self::Wednesday => '星期三',
            self::Thursday => '星期四',
            self::Friday => '星期五',
            self::Saturday => '星期六',
            self::Sunday => '星期日',
        };
    }
}
