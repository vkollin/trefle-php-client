<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Enumeration\Duration;
use Trefle\Enumeration\EdiblePart;
use Trefle\Enumeration\Rank;
use Trefle\Enumeration\Status;
use Trefle\Model\Species\Distributions;
use Trefle\Model\Species\Flower;
use Trefle\Model\Species\Foliage;
use Trefle\Model\Species\FruitOrSeed;
use Trefle\Model\Species\Growth;
use Trefle\Model\Species\Images;
use Trefle\Model\Species\Source;
use Trefle\Model\Species\Specifications;
use Trefle\Model\Species\Synonym;

class Species
{
    private int $id;
    private ?string $commonName;
    private string $slug;
    private string $scientificName;
    private ?int $year;
    private ?string $bibliography;
    private ?string $author;
    private Status $status;
    private Rank $rank;
    private ?string $familyCommonName;
    private string $family;
    private int $genusId;
    private string $genus;
    private ?string $imageUrl;
    /** @var Duration[]|null */
    private ?array $duration;
    /** @var EdiblePart[]|null */
    private ?array $ediblePart;
    private ?bool $edible;
    private ?bool $vegetable;
    private ?string $observations;
    private ?Images $images;
    private ?array $commonNames;
    private ?Distributions $distributions;
    private ?Flower $flower;
    private ?Foliage $foliage;
    private ?FruitOrSeed $fruitOrSeed;
    private ?Specifications $specifications;
    private ?Growth $growth;
    /** @var Synonym[]|string[]|null */
    private ?array $synonyms;
    /** @var Source[]|null */
    private ?array $sources;

    public function __construct(
        int $id,
        ?string $commonName,
        string $slug,
        string $scientificName,
        ?int $year,
        ?string $bibliography,
        ?string $author,
        Status $status,
        Rank $rank,
        ?string $familyCommonName,
        string $family,
        int $genusId,
        string $genus,
        ?string $imageUrl,
        ?array $duration,
        ?array $ediblePart,
        ?bool $edible,
        ?bool $vegetable,
        ?string $observations,
        ?Images $images,
        ?array $commonNames,
        ?Distributions $distributions,
        ?Flower $flower,
        ?Foliage $foliage,
        ?FruitOrSeed $fruitOrSeed,
        ?Specifications $specifications,
        ?Growth $growth,
        ?array $synonyms,
        ?array $sources
    ) {
        $this->id               = $id;
        $this->commonName       = $commonName;
        $this->slug             = $slug;
        $this->scientificName   = $scientificName;
        $this->year             = $year;
        $this->bibliography     = $bibliography;
        $this->author           = $author;
        $this->status           = $status;
        $this->rank             = $rank;
        $this->familyCommonName = $familyCommonName;
        $this->family           = $family;
        $this->genusId          = $genusId;
        $this->genus            = $genus;
        $this->imageUrl         = $imageUrl;
        $this->duration         = $duration;
        $this->ediblePart       = $ediblePart;
        $this->edible           = $edible;
        $this->vegetable        = $vegetable;
        $this->observations     = $observations;
        $this->images           = $images;
        $this->commonNames      = $commonNames;
        $this->distributions    = $distributions;
        $this->flower           = $flower;
        $this->foliage          = $foliage;
        $this->fruitOrSeed      = $fruitOrSeed;
        $this->specifications   = $specifications;
        $this->growth           = $growth;
        $this->synonyms         = $synonyms;
        $this->sources          = $sources;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientificName;
    }

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @return string|null
     */
    public function getBibliography(): ?string
    {
        return $this->bibliography;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @return Rank
     */
    public function getRank(): Rank
    {
        return $this->rank;
    }

    /**
     * @return string|null
     */
    public function getFamilyCommonName(): ?string
    {
        return $this->familyCommonName;
    }

    /**
     * @return string
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @return int
     */
    public function getGenusId(): int
    {
        return $this->genusId;
    }

    /**
     * @return string
     */
    public function getGenus(): string
    {
        return $this->genus;
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @return Duration[]|null
     */
    public function getDuration(): ?array
    {
        return $this->duration;
    }

    /**
     * @return EdiblePart[]|null
     */
    public function getEdiblePart(): ?array
    {
        return $this->ediblePart;
    }

    /**
     * @return bool|null
     */
    public function getEdible(): ?bool
    {
        return $this->edible;
    }

    /**
     * @return bool|null
     */
    public function getVegetable(): ?bool
    {
        return $this->vegetable;
    }

    /**
     * @return string|null
     */
    public function getObservations(): ?string
    {
        return $this->observations;
    }

    /**
     * @return Images|null
     */
    public function getImages(): ?Images
    {
        return $this->images;
    }

    /**
     * @return array|null
     */
    public function getCommonNames(): ?array
    {
        return $this->commonNames;
    }

    /**
     * @return Distributions|null
     */
    public function getDistributions(): ?Distributions
    {
        return $this->distributions;
    }

    /**
     * @return Flower|null
     */
    public function getFlower(): ?Flower
    {
        return $this->flower;
    }

    /**
     * @return Foliage|null
     */
    public function getFoliage(): ?Foliage
    {
        return $this->foliage;
    }

    /**
     * @return FruitOrSeed|null
     */
    public function getFruitOrSeed(): ?FruitOrSeed
    {
        return $this->fruitOrSeed;
    }

    /**
     * @return Specifications|null
     */
    public function getSpecifications(): ?Specifications
    {
        return $this->specifications;
    }

    /**
     * @return Growth|null
     */
    public function getGrowth(): ?Growth
    {
        return $this->growth;
    }

    /**
     * @return Synonym[]|string[]|null
     */
    public function getSynonyms(): ?array
    {
        return $this->synonyms;
    }

    /**
     * @return Source[]|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }
}
