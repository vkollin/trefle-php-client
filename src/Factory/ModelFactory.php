<?php declare(strict_types=1);

namespace Trefle\Factory;

use Trefle\Model\Division;
use Trefle\Model\DivisionClass;
use Trefle\Model\DivisionOrder;
use Trefle\Model\Family;
use Trefle\Model\Genus;
use Trefle\Model\Kingdom;
use Trefle\Model\Plant;
use Trefle\Model\Species;
use Trefle\Model\SubKingdom;

class ModelFactory
{
    public static function createPlant(array $raw): Plant
    {
        return new Plant(
            $raw['id'],
            $raw['common_name'] ?? null,
            $raw['slug'],
            $raw['scientific_name'],
            $raw['year'] ?? null,
            $raw['bibliography'] ?? null,
            $raw['author'] ?? null,
            $raw['family_common_name'] ?? null,
            $raw['genus_id'],
            $raw['main_species_id'] ?? null,
            $raw['vegetable'] ?? null,
            $raw['observations'] ?? null,
            ($raw['main_species'] ?? null) ? self::createSpecies($raw['main_species']) : null,
            $raw['sources'] ?? null,
            $raw['links']
        );
    }

    public static function createSpecies(array $raw): Species
    {
        return SpeciesModelFactory::createSpecies($raw);
    }

    public static function createGenus(array $raw): Genus
    {
        return new Genus(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            self::createFamily($raw['family'])
        );
    }

    public static function createFamily(array $raw): Family
    {
        return new Family(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            !empty($raw['division_order']) ? self::createDivisionOrder($raw['division_order']) : null
        );
    }

    public static function createDivisionOrder(array $raw): DivisionOrder
    {
        return new DivisionOrder(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            self::createDivisionClass($raw['division_class'])
        );
    }

    public static function createDivisionClass(array $raw): DivisionClass
    {
        return new DivisionClass(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            $raw['division'] ? self::createDivision($raw['division']) : null
        );
    }

    public static function createDivision(array $raw): Division
    {
        return new Division(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            self::createSubKingdom($raw['subkingdom'])
        );
    }

    public static function createSubKingdom(array $raw): SubKingdom
    {
        return new SubKingdom(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            $raw['links'],
            self::createKingdom($raw['kingdom'])
        );
    }

    public static function createKingdom(array $raw): Kingdom
    {
        return new Kingdom(
            $raw['id'],
            $raw['name'],
            $raw['links'],
        );
    }
}
