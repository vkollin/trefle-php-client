<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use Trefle\Enumeration\Month;

class Growth
{
    private ?float $daysToHarvest;
    private ?string $description;
    private ?string $sowing;
    private ?float $phMaximum;
    private ?float $phMinimum;
    private ?int $light;
    private ?int $atmosphericHumidity;
    /** @var Month[]|null */
    private ?array $growthMonths;
    /** @var Month[]|null */
    private ?array $bloomMonths;
    /** @var Month[]|null */
    private ?array $fruitMonths;
    private ?float $rowSpacing;
    private ?float $spread;
    private ?float $minimumPrecipitation;
    private ?float $maximumPrecipitation;
    private ?float $minimumRootDepth;
    private ?float $minimumTemperature;
    private ?float $maximumTemperature;
    private ?int $soilNutriments;
    private ?int $soilSalinity;
    private ?int $soilTexture;
    private ?int $soilHumidity;

    public function __construct(
        ?float $daysToHarvest,
        ?string $description,
        ?string $sowing,
        ?float $phMaximum,
        ?float $phMinimum,
        ?int $light,
        ?int $atmosphericHumidity,
        ?array $growthMonths,
        ?array $bloomMonths,
        ?array $fruitMonths,
        ?float $rowSpacing, // in cm
        ?float $spread, // in cm
        ?float $minimumPrecipitation, // in mm
        ?float $maximumPrecipitation, // in mm
        ?float $minimumRootDepth, // in cm
        ?float $minimumTemperature, // in °C
        ?float $maximumTemperature, // in °C
        ?int $soilNutriments,
        ?int $soilSalinity,
        ?int $soilTexture,
        ?int $soilHumidity
    ) {
        $this->daysToHarvest        = $daysToHarvest;
        $this->description          = $description;
        $this->sowing               = $sowing;
        $this->phMaximum            = $phMaximum;
        $this->phMinimum            = $phMinimum;
        $this->light                = $light;
        $this->atmosphericHumidity  = $atmosphericHumidity;
        $this->growthMonths         = $growthMonths;
        $this->bloomMonths          = $bloomMonths;
        $this->fruitMonths          = $fruitMonths;
        $this->rowSpacing           = $rowSpacing;
        $this->spread               = $spread;
        $this->minimumPrecipitation = $minimumPrecipitation;
        $this->maximumPrecipitation = $maximumPrecipitation;
        $this->minimumRootDepth     = $minimumRootDepth;
        $this->minimumTemperature   = $minimumTemperature;
        $this->maximumTemperature   = $maximumTemperature;
        $this->soilNutriments       = $soilNutriments;
        $this->soilSalinity         = $soilSalinity;
        $this->soilTexture          = $soilTexture;
        $this->soilHumidity         = $soilHumidity;
    }

    public function getDaysToHarvest(): ?float
    {
        return $this->daysToHarvest;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getSowing(): ?string
    {
        return $this->sowing;
    }

    public function getPhMaximum(): ?float
    {
        return $this->phMaximum;
    }

    public function getPhMinimum(): ?float
    {
        return $this->phMinimum;
    }

    public function getLight(): ?int
    {
        return $this->light;
    }

    public function getAtmosphericHumidity(): ?int
    {
        return $this->atmosphericHumidity;
    }

    /**
     * @return Month[]|null
     */
    public function getGrowthMonths(): ?array
    {
        return $this->growthMonths;
    }

    /**
     * @return Month[]|null
     */
    public function getBloomMonths(): ?array
    {
        return $this->bloomMonths;
    }

    /**
     * @return Month[]|null
     */
    public function getFruitMonths(): ?array
    {
        return $this->fruitMonths;
    }

    public function getRowSpacing(): ?float
    {
        return $this->rowSpacing;
    }

    public function getSpread(): ?float
    {
        return $this->spread;
    }

    public function getMinimumPrecipitation(): ?float
    {
        return $this->minimumPrecipitation;
    }

    public function getMaximumPrecipitation(): ?float
    {
        return $this->maximumPrecipitation;
    }

    public function getMinimumRootDepth(): ?float
    {
        return $this->minimumRootDepth;
    }

    public function getMinimumTemperature(): ?float
    {
        return $this->minimumTemperature;
    }

    public function getMaximumTemperature(): ?float
    {
        return $this->maximumTemperature;
    }

    public function getSoilNutriments(): ?int
    {
        return $this->soilNutriments;
    }

    public function getSoilSalinity(): ?int
    {
        return $this->soilSalinity;
    }

    public function getSoilTexture(): ?int
    {
        return $this->soilTexture;
    }

    public function getSoilHumidity(): ?int
    {
        return $this->soilHumidity;
    }
}
