<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Texture FINE()
 * @method static Texture MEDIUM()
 * @method static Texture COARSE()
 */
final class Texture extends Enum
{
    public const FINE = 'fine';
    public const MEDIUM = 'medium';
    public const COARSE = 'coarse';
}
