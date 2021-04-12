<?php declare(strict_types=1);

namespace Trefle\Model\Species;

class Images
{
    /** @var Image[] */
    private array $flower;

    /** @var Image[] */
    private array $leaf;

    /** @var Image[] */
    private array $habit;

    /** @var Image[] */
    private array $fruit;

    /** @var Image[] */
    private array $bark;

    /** @var Image[] */
    private array $other;

    public function __construct(array $flower, array $leaf, array $habit, array $fruit, array $bark, array $other)
    {
        $this->flower = $flower;
        $this->leaf   = $leaf;
        $this->habit  = $habit;
        $this->fruit  = $fruit;
        $this->bark   = $bark;
        $this->other  = $other;
    }

    /** @return Image[] */
    public function all(): array
    {
        return [
            ...$this->getFlower(),
            ...$this->getLeaf(),
            ...$this->getHabit(),
            ...$this->getFruit(),
            ...$this->getBark(),
            ...$this->getOther(),
        ];
    }

    /** @return Image[] */
    public function getFlower(): array
    {
        return $this->flower;
    }

    /** @return Image[] */
    public function getLeaf(): array
    {
        return $this->leaf;
    }

    /** @return Image[] */
    public function getHabit(): array
    {
        return $this->habit;
    }

    /** @return Image[] */
    public function getFruit(): array
    {
        return $this->fruit;
    }

    /** @return Image[] */
    public function getBark(): array
    {
        return $this->bark;
    }

    /** @return Image[] */
    public function getOther(): array
    {
        return $this->other;
    }
}
