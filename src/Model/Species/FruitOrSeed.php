<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use Trefle\Enumeration\Color;

class FruitOrSeed
{
    private ?bool $conspicuous;
    /** @var Color[]|null */
    private ?array $color;
    private ?string $shape;
    private ?bool $seedPersistence;

    public function __construct(?bool $conspicuous, ?array $color, ?string $shape, ?bool $seedPersistence)
    {
        $this->conspicuous     = $conspicuous;
        $this->color           = $color;
        $this->shape           = $shape;
        $this->seedPersistence = $seedPersistence;
    }

    public function getConspicuous(): ?bool
    {
        return $this->conspicuous;
    }

    /**
     * @return Color[]|null
     */
    public function getColor(): ?array
    {
        return $this->color;
    }

    public function getShape(): ?string
    {
        return $this->shape;
    }

    public function getSeedPersistence(): ?bool
    {
        return $this->seedPersistence;
    }
}
