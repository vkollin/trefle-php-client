<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Rank SPECIES()
 * @method static Rank SSP()
 * @method static Rank VAR()
 * @method static Rank FORM()
 * @method static Rank HYBRID()
 * @method static Rank SUBVAR()
 */
final class Rank extends Enum
{
    public const SPECIES = 'species';
    public const SSP = 'ssp';
    public const VAR = 'var';
    public const FORM = 'form';
    public const HYBRID = 'hybrid';
    public const SUBVAR = 'subvar';
}
