<?php declare(strict_types=1);

namespace Trefle\Model\Species;

class Distribution
{
    private int $id;
    private string $name;
    private string $slug;
    private string $tdwgCode;
    private int $tdwgLevel;
    private int $speciesCount;
    private array $links;

    public function __construct(
        int $id,
        string $name,
        string $slug,
        string $tdwgCode,
        int $tdwgLevel,
        int $speciesCount,
        array $links
    ) {
        $this->id           = $id;
        $this->name         = $name;
        $this->slug         = $slug;
        $this->tdwgCode     = $tdwgCode;
        $this->tdwgLevel    = $tdwgLevel;
        $this->speciesCount = $speciesCount;
        $this->links        = $links;
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

    public function getTdwgCode(): string
    {
        return $this->tdwgCode;
    }

    public function getTdwgLevel(): int
    {
        return $this->tdwgLevel;
    }

    public function getSpeciesCount(): int
    {
        return $this->speciesCount;
    }

    public function getLinks(): array
    {
        return $this->links;
    }
}
