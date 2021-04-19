<?php declare(strict_types=1);

namespace Trefle\Model\Links;

class Links
{
    protected ?string $self = null;
    protected ?string $parent = null;
    protected ?string $childs = null;
    protected ?string $grandChilds = null;

    public function getSelf(): ?string
    {
        return $this->self;
    }

    public function setSelf(?string $self): void
    {
        $this->self = $self;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
    }

    public function getChilds(): ?string
    {
        return $this->childs;
    }

    public function setChilds(?string $childs): void
    {
        $this->childs = $childs;
    }

    public function getGrandChilds(): ?string
    {
        return $this->grandChilds;
    }

    public function setGrandChilds(?string $grandChilds): void
    {
        $this->grandChilds = $grandChilds;
    }
}
