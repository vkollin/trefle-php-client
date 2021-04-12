<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static EdiblePart ROOTS()
 * @method static EdiblePart STEM()
 * @method static EdiblePart LEAVES()
 * @method static EdiblePart FLOWERS()
 * @method static EdiblePart FRUITS()
 * @method static EdiblePart SEEDS()
 * @method static EdiblePart TUBERS()
 */
final class EdiblePart extends Enum
{
    public const ROOTS = 'roots';
    public const STEM = 'stem';
    public const LEAVES = 'leaves';
    public const FLOWERS = 'flowers';
    public const FRUITS = 'fruits';
    public const SEEDS = 'seeds';
    public const TUBERS = 'tubers';
}
