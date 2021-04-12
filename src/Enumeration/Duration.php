<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Duration ANNUAL()
 * @method static Duration BIENNIAL()
 * @method static Duration PERENNIAL()
 */
final class Duration extends Enum
{
    public const ANNUAL = 'annual';
    public const BIENNIAL = 'biennial';
    public const PERENNIAL = 'perennial';
}
