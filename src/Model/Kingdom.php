<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class Kingdom
{
    private int $id;
    private string $name;
    private Links $links;

    public function __construct(int $id, string $name, Links $links)
    {
        $this->id    = $id;
        $this->name  = $name;
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

    public function getLinks(): Links
    {
        return $this->links;
    }
}
