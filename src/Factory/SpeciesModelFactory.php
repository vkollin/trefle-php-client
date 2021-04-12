<?php declare(strict_types=1);

namespace Trefle\Factory;

use Trefle\Enumeration\Color;
use Trefle\Enumeration\Duration;
use Trefle\Enumeration\EdiblePart;
use Trefle\Enumeration\LigneousType;
use Trefle\Enumeration\Month;
use Trefle\Enumeration\Rank;
use Trefle\Enumeration\Status;
use Trefle\Enumeration\Texture;
use Trefle\Enumeration\Toxicity;
use Trefle\Model\Species;
use Trefle\Model\Species\Distribution;
use Trefle\Model\Species\Distributions;
use Trefle\Model\Species\Flower;
use Trefle\Model\Species\Foliage;
use Trefle\Model\Species\FruitOrSeed;
use Trefle\Model\Species\Growth;
use Trefle\Model\Species\Image;
use Trefle\Model\Species\Images;
use Trefle\Model\Species\Source;
use Trefle\Model\Species\Specifications;
use Trefle\Model\Species\Synonym;
use Trefle\Service\NullableDateTimeService;

class SpeciesModelFactory
{
    public static function createSpecies(array $raw): Species
    {
        return new Species(
            $raw['id'],
            $raw['common_name'] ?? null,
            $raw['slug'],
            $raw['scientific_name'],
            $raw['year'] ?? null,
            $raw['bibliography'] ?? null,
            $raw['author'] ?? null,
            new Status($raw['status']),
            new Rank($raw['rank']),
            $raw['family_common_name'] ?? null,
            $raw['family'],
            $raw['genus_id'],
            $raw['genus'],
            $raw['image_url'] ?? null,
            isset($raw['duration']) ? self::createDuration($raw['duration']) : null,
            isset($raw['edible_part']) ? self::createEdiblePart($raw['edible_part']) : null,
            $raw['edible'] ?? null,
            $raw['vegetable'] ?? null,
            $raw['observations'] ?? null,
            isset($raw['images']) ? self::createImages($raw['images']) : null,
            $raw['common_names'] ?? null,
            isset($raw['distributions']) ? self::createDistributions($raw['distributions']) : null,
            isset($raw['flower']) ? self::createFlower($raw['flower']) : null,
            isset($raw['foliage']) ? self::createFoliage($raw['foliage']) : null,
            isset($raw['fruit_or_seed']) ? self::createFruitOrSeed($raw['fruit_or_seed']) : null,
            isset($raw['specifications']) ? self::createSpecifications($raw['specifications']) : null,
            isset($raw['growth']) ? self::createGrowth($raw['growth']) : null,
            isset($raw['synonyms']) ? self::createSynonyms($raw['synonyms']) : null,
            isset($raw['sources']) ? self::createSources($raw['sources']) : null,
        );
    }

    /**
     * @param array $raw
     * @return Duration[]
     */
    public static function createDuration(array $raw): array
    {
        return array_map(
            static fn(string $duration) => new Duration($duration),
            $raw
        );
    }

    /**
     * @param array $raw
     * @return EdiblePart[]
     */
    public static function createEdiblePart(array $raw): array
    {
        return array_map(
            static fn(string $ediblePart) => new EdiblePart($ediblePart),
            $raw
        );
    }

    public static function createImages(array $raw): Images
    {
        $mappedFields = [];

        foreach ($raw as $key => $rawImages) {
            $mappedFields[$key] = array_map(
                static fn(array $rawImage): Image => self::createImage($rawImage),
                $rawImages
            );
        }

        return new Images(
            $mappedFields['flower'] ?? [],
            $mappedFields['leaf'] ?? [],
            $mappedFields['habit'] ?? [],
            $mappedFields['fruit'] ?? [],
            $mappedFields['bark'] ?? [],
            $mappedFields['other'] ?? [],
        );
    }

    public static function createImage(array $raw): Image
    {
        return new Image(
            $raw['id'],
            $raw['image_url'],
            $raw['copyright']
        );
    }

    public static function createDistributions(array $raw): Distributions
    {
        return new Distributions(
            isset($raw['native']) ? array_map(
                static fn(array $raw) => self::createDistibution($raw),
                $raw['native']
            ) : [],
            isset($raw['introduced']) ? array_map(
                static fn(array $raw) => self::createDistibution($raw),
                $raw['introduced']
            ) : [],
            isset($raw['doubtful']) ? array_map(
                static fn(array $raw) => self::createDistibution($raw),
                $raw['doubtful']
            ) : [],
            isset($raw['absent']) ? array_map(
                static fn(array $raw) => self::createDistibution($raw),
                $raw['absent']
            ) : [],
            isset($raw['extinct']) ? array_map(
                static fn(array $raw) => self::createDistibution($raw),
                $raw['extinct']
            ) : [],
        );
    }

    public static function createDistibution(array $raw): Distribution
    {
        return new Distribution(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['tdwg_code'],
            $raw['tdwg_level'],
            $raw['species_count'],
            $raw['links'],
        );
    }

    public static function createFlower(array $raw): Flower
    {
        return new Flower(
            $raw['color'] ? array_map(static fn(string $c) => new Color($c), $raw['color']) : null,
            $raw['conspicuous'] ?? null,
        );
    }

    public static function createFoliage(array $raw): Foliage
    {
        return new Foliage(
            $raw['texture'] ? new Texture($raw['texture']) : null,
            $raw['color'] ? array_map(static fn(string $c) => new Color($c), $raw['color']) : null,
            $raw['leaf_retention'] ?? null,
        );
    }

    public static function createFruitOrSeed(array $raw): FruitOrSeed
    {
        return new FruitOrSeed(
            $raw['conspicuous'] ?? null,
            $raw['color'] ? array_map(static fn(string $c) => new Color($c), $raw['color']) : null,
            $raw['shape'] ?? null,
            $raw['seed_persistence'] ?? null,
        );
    }

    public static function createSpecifications(array $raw): Specifications
    {
        return new Specifications(
            $raw['ligneous_type'] ? new LigneousType($raw['ligneous_type']) : null,
            $raw['growth_form'] ?? null,
            $raw['growth_habit'] ?? null,
            $raw['growth_rate'] ?? null,
            $raw['average_height']['cm'] ?? null,
            $raw['maximum_height']['cm'] ?? null,
            $raw['nitrogen_fixation'] ?? null,
            $raw['shape_and_orientation'] ?? null,
            $raw['toxicity'] ? new Toxicity($raw['toxicity']) : null,
        );
    }

    public static function createGrowth(array $raw): Growth
    {
        return new Growth(
            $raw['days_to_harvest'] ?? null,
            $raw['description'] ?? null,
            $raw['sowing'] ?? null,
            $raw['ph_maximum'] ?? null,
            $raw['ph_minimum'] ?? null,
            $raw['light'] ?? null,
            $raw['atmospheric_humidity'] ?? null,
            isset($raw['growth_months']) ? array_map(
                static fn(string $m) => new Month($m),
                $raw['growth_months']
            ) : null,
            isset($raw['bloom_months']) ? array_map(static fn(string $m) => new Month($m), $raw['bloom_months']) : null,
            isset($raw['fruit_months']) ? array_map(static fn(string $m) => new Month($m), $raw['fruit_months']) : null,
            $raw['row_spacing']['cm'] ?? null,
            $raw['spread']['cm'] ?? null,
            $raw['minimum_precipitation']['mm'] ?? null,
            $raw['maximum_precipitation']['mm'] ?? null,
            $raw['minimum_root_depth']['cm'] ?? null,
            $raw['minimum_temperature']['deg_c'] ?? null,
            $raw['maximum_temperature']['deg_c'] ?? null,
            $raw['soil_nutriments'] ?? null,
            $raw['soil_salinity'] ?? null,
            $raw['soil_texture'] ?? null,
            $raw['soil_humidity'] ?? null,
        );
    }

    /**
     * @param array $raw
     * @return Synonym[]|string[]
     */
    public static function createSynonyms(array $raw): array
    {
        return array_map(
            static function ($r) {
                if (is_array($r)) {
                    return new Synonym(
                        $r['id'],
                        $r['name'],
                        $r['author'] ?? null,
                    );
                }

                return $r;
            },
            $raw
        );
    }


    /**
     * @param array $raw
     * @return Source[]
     */
    public static function createSources(array $raw): array
    {
        return array_map(
            static function (array $raw) {

                $lastUpdate = NullableDateTimeService::parseString($raw['last_update']);

                return new Source(
                    $raw['id'],
                    $raw['name'],
                    $raw['url'] ?? null,
                    $raw['citation'] ?? null,
                    $lastUpdate,
                );
            },
            $raw
        );
    }
}
