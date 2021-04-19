<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class Plant
{
    private int $id;
    private ?string $commonName;
    private string $slug;
    private string $scientificName;
    private ?int $year;
    private ?string $bibliography;
    private ?string $author;
    private ?string $familyCommonName;
    private int $genusId;
    private ?int $mainSpeciesId;
    private ?bool $vegetable;
    private ?string $observations;
    private ?Species $mainSpecies;
    private ?array $sources;
    private ?Links $links;

    public function __construct(
        int $id,
        ?string $commonName,
        string $slug,
        string $scientificName,
        ?int $year,
        ?string $bibliography,
        ?string $author,
        ?string $familyCommonName,
        int $genusId,
        ?int $mainSpeciesId,
        ?bool $vegetable,
        ?string $observations,
        ?Species $mainSpecies,
        ?array $sources,
        ?Links $links
    ) {
        $this->id               = $id;
        $this->commonName       = $commonName;
        $this->slug             = $slug;
        $this->scientificName   = $scientificName;
        $this->year             = $year;
        $this->bibliography     = $bibliography;
        $this->author           = $author;
        $this->familyCommonName = $familyCommonName;
        $this->genusId          = $genusId;
        $this->mainSpeciesId    = $mainSpeciesId;
        $this->vegetable        = $vegetable;
        $this->observations     = $observations;
        $this->mainSpecies      = $mainSpecies;
        $this->sources          = $sources;
        $this->links            = $links;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getScientificName(): string
    {
        return $this->scientificName;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function getBibliography(): ?string
    {
        return $this->bibliography;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getFamilyCommonName(): ?string
    {
        return $this->familyCommonName;
    }

    public function getGenusId(): int
    {
        return $this->genusId;
    }

    public function getMainSpeciesId(): ?int
    {
        return $this->mainSpeciesId;
    }

    public function getVegetable(): ?bool
    {
        return $this->vegetable;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function getMainSpecies(): ?Species
    {
        return $this->mainSpecies;
    }

    public function getSources(): ?array
    {
        return $this->sources;
    }

    public function getLinks(): ?Links
    {
        return $this->links;
    }
}
