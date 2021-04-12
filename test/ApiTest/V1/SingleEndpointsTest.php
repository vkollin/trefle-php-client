<?php declare(strict_types=1);

namespace Trefle\Test\ApiTest\V1;

use Trefle\Factory\ResponseFactory;
use Trefle\Test\ApiTest\ApiTestCase;

class SingleEndpointsTest extends ApiTestCase
{
    public function testGetKingdom(): void
    {
        $response = ResponseFactory::createKingdomResponse($this->getResponse('kingdom-1'));

        $this->assertMatchesSnapshot($response->getKingdom());
    }

    public function testGetSubKingdom(): void
    {
        $response = ResponseFactory::createSubKingdomResponse($this->getResponse('subkingdom-tracheobionta'));

        $this->assertMatchesSnapshot($response->getSubKingdom());
    }

    public function testGetDivision(): void
    {
        $response = ResponseFactory::createDivisionResponse($this->getResponse('division-magnoliophyta'));

        $this->assertMatchesSnapshot($response->getDivision());
    }

    public function testGetDivisionClass(): void
    {
        $response = ResponseFactory::createDivisionClassResponse($this->getResponse('division_class-magnoliopsida'));

        $this->assertMatchesSnapshot($response->getDivisionClass());
    }

    public function testGetDivisionOrder(): void
    {
        $response = ResponseFactory::createDivisionOrderResponse($this->getResponse('division_order-capparales'));

        $this->assertMatchesSnapshot($response->getDivisionOrder());
    }

    public function testGetFamily(): void
    {
        $response = ResponseFactory::createFamilyResponse($this->getResponse('family-brassicaceae'));

        $this->assertMatchesSnapshot($response->getFamily());
    }

    public function testGetGenus(): void
    {
        $response = ResponseFactory::createGenusResponse($this->getResponse('genus-eruca'));

        $this->assertMatchesSnapshot($response->getGenus());
    }

    public function testGetPlant(): void
    {
        $response = ResponseFactory::createPlantResponse($this->getResponse('plant-eruca-vesicaria'));

        $this->assertMatchesSnapshot($response->getPlant());
    }


    public function testGetOneSpecies(): void
    {
        $response = ResponseFactory::createOneSpeciesResponse($this->getResponse('species-eruca-vesicaria'));

        $this->assertMatchesSnapshot($response->getSpecies());
    }
}
