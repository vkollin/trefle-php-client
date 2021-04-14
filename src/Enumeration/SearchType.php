<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static SearchType PLANTS()
 * @method static SearchType SPECIES()
 */
final class SearchType extends Enum
{
    public const PLANTS = 'plants';
    public const SPECIES = 'species';
}
