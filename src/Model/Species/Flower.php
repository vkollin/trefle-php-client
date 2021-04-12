<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use Trefle\Enumeration\Color;

class Flower
{
    /** @var Color[]|null */
    private ?array $color;
    private ?bool $conspicuous;

    public function __construct(?array $color, ?bool $conspicuous)
    {
        $this->color       = $color;
        $this->conspicuous = $conspicuous;
    }

    /**
     * @return Color[]|null
     */
    public function getColor(): ?array
    {
        return $this->color;
    }

    public function getConspicuous(): ?bool
    {
        return $this->conspicuous;
    }
}
