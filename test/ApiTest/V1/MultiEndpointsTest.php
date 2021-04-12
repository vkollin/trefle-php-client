<?php declare(strict_types=1);

namespace Trefle\Test\ApiTest\V1;

use Trefle\Factory\ResponseFactory;
use Trefle\Test\ApiTest\ApiTestCase;

class MultiEndpointsTest extends ApiTestCase
{
    public function testGetKingdoms(): void
    {
        $response = ResponseFactory::createKingdomsResponse($this->getResponse('kingdoms'));

        $this->assertMatchesSnapshot($response->getKingdoms());
    }

    public function testGetSubKingdoms(): void
    {
        $response = ResponseFactory::createSubKingdomsResponse($this->getResponse('subkingdoms'));

        $this->assertMatchesSnapshot($response->getSubKingdoms());
    }

    public function testGetDivisions(): void
    {
        $response = ResponseFactory::createDivisionsResponse($this->getResponse('divisions'));

        $this->assertMatchesSnapshot($response->getDivisions());
    }

    public function testGetDivisionClasses(): void
    {
        $response = ResponseFactory::createDivisionClassesResponse($this->getResponse('division_classes'));

        $this->assertMatchesSnapshot($response->getDivisionClasses());
    }

    public function testGetDivisionOrders(): void
    {
        $response = ResponseFactory::createDivisionOrdersResponse($this->getResponse('division_orders'));

        $this->assertMatchesSnapshot($response->getDivisionOrders());
    }

    public function testGetFamilies(): void
    {
        $response = ResponseFactory::createFamiliesResponse($this->getResponse('families'));

        $this->assertMatchesSnapshot($response->getFamilies());
    }

    public function testGetGenera(): void
    {
        $response = ResponseFactory::createGeneraResponse($this->getResponse('genera'));

        $this->assertMatchesSnapshot($response->getGenera());
    }

    public function testGetPlants(): void
    {
        $response = ResponseFactory::createPlantsResponse($this->getResponse('plants'));

        $this->assertMatchesSnapshot($response->getPlants());
    }

    public function testGetSpecies(): void
    {
        $response = ResponseFactory::createSpeciesResponse($this->getResponse('species'));

        $this->assertMatchesSnapshot($response->getSpecies());
    }
}
