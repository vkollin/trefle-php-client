<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static LigneousType LIANA ()
 * @method static LigneousType SUBSHRUB ()
 * @method static LigneousType SHRUB ()
 * @method static LigneousType TREE ()
 * @method static LigneousType PARASITE ()
 */
final class LigneousType extends Enum
{
    public const LIANA = 'liana';
    public const SUBSHRUB = 'subshrub';
    public const SHRUB = 'shrub';
    public const TREE = 'tree';
    public const PARASITE = 'parasite';
}
