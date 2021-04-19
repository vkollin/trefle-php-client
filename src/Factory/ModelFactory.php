<?php declare(strict_types=1);

namespace Trefle\Factory;

use Trefle\Model\Division;
use Trefle\Model\DivisionClass;
use Trefle\Model\DivisionOrder;
use Trefle\Model\Family;
use Trefle\Model\Genus;
use Trefle\Model\Kingdom;
use Trefle\Model\Links\Links;
use Trefle\Model\Links\PlantLinks;
use Trefle\Model\Plant;
use Trefle\Model\Species;
use Trefle\Model\SubKingdom;

class ModelFactory
{
    public static function createPlant(array $raw): Plant
    {
        if (isset($raw['links']['plant'])) {
            $links = new PlantLinks(
                $raw['links']['self'],
                $raw['links']['plant'],
                $raw['links']['genus']
            );
        } else {
            $links = new Links();

            $links->setSelf($raw['links']['self']);
            $links->setChilds($raw['links']['species']);
            $links->setParent($raw['links']['genus']);
        }

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
            $links
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
            self::createLinks(
                $raw['links']['self'],
                $raw['links']['family'],
                $raw['links']['plants'],
                $raw['links']['species']
            ),
            self::createFamily($raw['family'])
        );
    }

    public static function createLinks(
        ?string $self,
        ?string $parent = null,
        ?string $childs = null,
        ?string $grandChilds = null
    ): Links {
        $links = new Links();

        $links->setSelf($self);
        $links->setParent($parent);
        $links->setChilds($childs);
        $links->setGrandChilds($grandChilds);

        return $links;
    }

    public static function createFamily(array $raw): Family
    {
        return new Family(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            self::createLinks($raw['links']['self'], $raw['links']['division_order'], $raw['links']['genus']),
            !empty($raw['division_order']) ? self::createDivisionOrder($raw['division_order']) : null
        );
    }

    public static function createDivisionOrder(array $raw): DivisionOrder
    {
        return new DivisionOrder(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            self::createLinks($raw['links']['self'], $raw['links']['division_class']),
            self::createDivisionClass($raw['division_class'])
        );
    }

    public static function createDivisionClass(array $raw): DivisionClass
    {
        return new DivisionClass(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            self::createLinks($raw['links']['self'], $raw['links']['division']),
            $raw['division'] ? self::createDivision($raw['division']) : null
        );
    }

    public static function createDivision(array $raw): Division
    {
        return new Division(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            self::createLinks($raw['links']['self'], $raw['links']['subkingdom']),
            self::createSubKingdom($raw['subkingdom'])
        );
    }

    public static function createSubKingdom(array $raw): SubKingdom
    {
        return new SubKingdom(
            $raw['id'],
            $raw['name'],
            $raw['slug'],
            self::createLinks($raw['links']['self'], $raw['links']['kingdom']),
            self::createKingdom($raw['kingdom'])
        );
    }

    public static function createKingdom(array $raw): Kingdom
    {
        return new Kingdom(
            $raw['id'],
            $raw['name'],
            self::createLinks($raw['links']['self']),
        );
    }
}
