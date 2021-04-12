<?php declare(strict_types=1);

namespace Trefle\Factory;

use Trefle\Connection\ApiResponse;
use Trefle\Connection\Response\DivisionClassesResponse;
use Trefle\Connection\Response\DivisionClassResponse;
use Trefle\Connection\Response\DivisionOrderResponse;
use Trefle\Connection\Response\DivisionOrdersResponse;
use Trefle\Connection\Response\DivisionResponse;
use Trefle\Connection\Response\DivisionsResponse;
use Trefle\Connection\Response\FamiliesResponse;
use Trefle\Connection\Response\FamilyResponse;
use Trefle\Connection\Response\GeneraResponse;
use Trefle\Connection\Response\GenusResponse;
use Trefle\Connection\Response\KingdomResponse;
use Trefle\Connection\Response\KingdomsResponse;
use Trefle\Connection\Response\OneSpeciesResponse;
use Trefle\Connection\Response\PlantResponse;
use Trefle\Connection\Response\PlantsResponse;
use Trefle\Connection\Response\SpeciesResponse;
use Trefle\Connection\Response\SubKingdomResponse;
use Trefle\Connection\Response\SubKingdomsResponse;

class ResponseFactory
{
    public static function createKingdomsResponse(ApiResponse $response): KingdomsResponse
    {
        return new KingdomsResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(
                static fn($date) => ModelFactory::createKingdom($date),
                $response->getData()
            )
        );
    }

    public static function createKingdomResponse(ApiResponse $response): KingdomResponse
    {
        return new KingdomResponse(
            $response->getMeta(),
            ModelFactory::createKingdom($response->getData())
        );
    }

    public static function createSubKingdomsResponse(ApiResponse $response): SubKingdomsResponse
    {
        return new SubKingdomsResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(
                static fn($date) => ModelFactory::createSubKingdom($date),
                $response->getData()
            )
        );
    }

    public static function createSubKingdomResponse(ApiResponse $response): SubKingdomResponse
    {
        return new SubKingdomResponse(
            $response->getMeta(),
            ModelFactory::createSubKingdom($response->getData())
        );
    }

    //

    public static function createDivisionsResponse(ApiResponse $response): DivisionsResponse
    {
        return new DivisionsResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createDivision($date), $response->getData())
        );
    }

    public static function createDivisionResponse(ApiResponse $response): DivisionResponse
    {
        return new DivisionResponse(
            $response->getMeta(),
            ModelFactory::createDivision($response->getData())
        );
    }

    public static function createDivisionClassesResponse(ApiResponse $response): DivisionClassesResponse
    {
        return new DivisionClassesResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createDivisionClass($date), $response->getData())
        );
    }

    public static function createDivisionClassResponse(ApiResponse $response): DivisionClassResponse
    {
        return new DivisionClassResponse(
            $response->getMeta(),
            ModelFactory::createDivisionClass($response->getData())
        );
    }

    public static function createDivisionOrdersResponse(ApiResponse $response): DivisionOrdersResponse
    {
        return new DivisionOrdersResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createDivisionOrder($date), $response->getData())
        );
    }

    public static function createDivisionOrderResponse(ApiResponse $response): DivisionOrderResponse
    {
        return new DivisionOrderResponse(
            $response->getMeta(),
            ModelFactory::createDivisionOrder($response->getData())
        );
    }

    public static function createFamiliesResponse(ApiResponse $response): FamiliesResponse
    {
        return new FamiliesResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createFamily($date), $response->getData())
        );
    }

    public static function createFamilyResponse(ApiResponse $response): FamilyResponse
    {
        return new FamilyResponse(
            $response->getMeta(),
            ModelFactory::createFamily($response->getData())
        );
    }

    public static function createGeneraResponse(ApiResponse $response): GeneraResponse
    {
        return new GeneraResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createGenus($date), $response->getData())
        );
    }

    public static function createGenusResponse(ApiResponse $response): GenusResponse
    {
        return new GenusResponse(
            $response->getMeta(),
            ModelFactory::createGenus($response->getData())
        );
    }

    public static function createPlantsResponse(ApiResponse $response): PlantsResponse
    {
        return new PlantsResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createPlant($date), $response->getData())
        );
    }

    public static function createPlantResponse(ApiResponse $response): PlantResponse
    {
        return new PlantResponse(
            $response->getMeta(),
            ModelFactory::createPlant($response->getData())
        );
    }

    public static function createSpeciesResponse(ApiResponse $response): SpeciesResponse
    {
        return new SpeciesResponse(
            $response->getLinks(),
            $response->getMeta(),
            array_map(static fn($date) => ModelFactory::createSpecies($date), $response->getData())
        );
    }

    public static function createOneSpeciesResponse(ApiResponse $response): OneSpeciesResponse
    {
        return new OneSpeciesResponse(
            $response->getMeta(),
            ModelFactory::createSpecies($response->getData())
        );
    }
}
