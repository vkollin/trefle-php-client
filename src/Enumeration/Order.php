<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Order ASC()
 * @method static Order DESC()
 */
final class Order extends Enum
{
    public const ASC = 'asc';
    public const DESC = 'desc';
}
