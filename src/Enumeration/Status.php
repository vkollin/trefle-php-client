<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Status ACCEPTED()
 * @method static Status UNKNOWN()
 */
final class Status extends Enum
{
    public const ACCEPTED = 'accepted';
    public const UNKNOWN = 'unknown';
}
