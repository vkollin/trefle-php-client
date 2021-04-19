<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

abstract class Base
{
    private int $id;
    private string $name;
    private string $slug;
    private Links $links;

    public function __construct(int $id, string $name, string $slug, Links $links)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->slug  = $slug;
        $this->links = $links;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getLinks(): Links
    {
        return $this->links;
    }
}
