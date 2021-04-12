<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use Trefle\Enumeration\LigneousType;
use Trefle\Enumeration\Toxicity;

class Specifications
{
    private ?LigneousType $ligneousType;
    private ?string $growthForm;
    private ?string $growthHabit;
    private ?string $growthRate;
    private ?float $averageHeight;
    private ?float $maximumHeight;
    private ?string $nitrogenFixation;
    private ?string $shapeAndOrientation;
    private ?Toxicity $toxicity;

    public function __construct(
        ?LigneousType $ligneousType,
        ?string $growthForm,
        ?string $growthHabit,
        ?string $growthRate,
        ?float $averageHeight, // in cm
        ?float $maximumHeight, // in cm
        ?string $nitrogenFixation,
        ?string $shapeAndOrientation,
        ?Toxicity $toxicity
    ) {
        $this->ligneousType        = $ligneousType;
        $this->growthForm          = $growthForm;
        $this->growthHabit         = $growthHabit;
        $this->growthRate          = $growthRate;
        $this->averageHeight       = $averageHeight;
        $this->maximumHeight       = $maximumHeight;
        $this->nitrogenFixation    = $nitrogenFixation;
        $this->shapeAndOrientation = $shapeAndOrientation;
        $this->toxicity            = $toxicity;
    }

    public function getLigneousType(): ?LigneousType
    {
        return $this->ligneousType;
    }

    public function getGrowthForm(): ?string
    {
        return $this->growthForm;
    }

    public function getGrowthHabit(): ?string
    {
        return $this->growthHabit;
    }

    public function getGrowthRate(): ?string
    {
        return $this->growthRate;
    }

    public function getAverageHeight(): ?float
    {
        return $this->averageHeight;
    }

    public function getMaximumHeight(): ?float
    {
        return $this->maximumHeight;
    }

    public function getNitrogenFixation(): ?string
    {
        return $this->nitrogenFixation;
    }

    public function getShapeAndOrientation(): ?string
    {
        return $this->shapeAndOrientation;
    }

    public function getToxicity(): ?Toxicity
    {
        return $this->toxicity;
    }
}
