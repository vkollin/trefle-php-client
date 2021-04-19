<?php declare(strict_types=1);

namespace Trefle\Model\Links;

class PlantLinks extends Links
{
    protected string $mainSpecies;

    public function __construct(string $mainSpecies, string $self, string $parent)
    {
        $this->mainSpecies = $mainSpecies;
        $this->self        = $self;
        $this->parent      = $parent;
    }

    public function getMainSpecies(): string
    {
        return $this->mainSpecies;
    }
}
