<?php declare(strict_types=1);

namespace Trefle\Model;

class Kingdom
{
    private int $id;
    private string $name;
    private array $links;

    public function __construct(int $id, string $name, array $links)
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

    public function getLinks(): array
    {
        return $this->links;
    }
}
