<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use Trefle\Enumeration\Color;
use Trefle\Enumeration\Texture;

class Foliage
{
    private ?Texture $texture;
    /** @var Color[]|null */
    private ?array $color;
    private ?bool $leafRetention;

    public function __construct(?Texture $texture, ?array $color, ?bool $leafRetention)
    {
        $this->texture       = $texture;
        $this->color         = $color;
        $this->leafRetention = $leafRetention;
    }

    public function getTexture(): ?Texture
    {
        return $this->texture;
    }

    /**
     * @return Color[]|null
     */
    public function getColor(): ?array
    {
        return $this->color;
    }

    public function getLeafRetention(): ?bool
    {
        return $this->leafRetention;
    }
}
