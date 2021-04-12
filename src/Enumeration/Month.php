<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Month JAN()
 * @method static Month FEB()
 * @method static Month MAR()
 * @method static Month APR()
 * @method static Month MAY()
 * @method static Month JUN()
 * @method static Month JUL()
 * @method static Month AUG()
 * @method static Month SEP()
 * @method static Month OCT()
 * @method static Month NOV()
 * @method static Month DEC()
 */
final class Month extends Enum
{
    public const JAN = 'jan';
    public const FEB = 'feb';
    public const MAR = 'mar';
    public const APR = 'apr';
    public const MAY = 'may';
    public const JUN = 'jun';
    public const JUL = 'jul';
    public const AUG = 'aug';
    public const SEP = 'sep';
    public const OCT = 'oct';
    public const NOV = 'nov';
    public const DEC = 'dec';
}
