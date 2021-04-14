<?php declare(strict_types=1);

namespace Trefle\Connection;

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
use Trefle\Enumeration\SearchType;
use Trefle\Factory\ResponseFactory;

class ApiClient
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getKingdoms(): KingdomsResponse
    {
        $response = $this->connection->get('kingdoms');

        return ResponseFactory::createKingdomsResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return KingdomResponse
     */
    public function getKingdom($idOrSlug): KingdomResponse
    {
        $response = $this->connection->get(sprintf('kingdoms/%s', $idOrSlug));

        return ResponseFactory::createKingdomResponse($response);
    }

    public function getSubKingdoms(): SubKingdomsResponse
    {
        $response = $this->connection->get('subkingdoms');

        return ResponseFactory::createSubKingdomsResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return SubKingdomResponse
     */
    public function getSubKingdom($idOrSlug): SubKingdomResponse
    {
        $response = $this->connection->get(sprintf('subkingdoms/%s', $idOrSlug));

        return ResponseFactory::createSubKingdomResponse($response);
    }

    public function getDivisions(): DivisionsResponse
    {
        $response = $this->connection->get('divisions');

        return ResponseFactory::createDivisionsResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return DivisionResponse
     */
    public function getDivision($idOrSlug): DivisionResponse
    {
        $response = $this->connection->get(sprintf('divisions/%s', $idOrSlug));

        return ResponseFactory::createDivisionResponse($response);
    }

    public function getDivisionClasses(): DivisionClassesResponse
    {
        $response = $this->connection->get('division_classes');

        return ResponseFactory::createDivisionClassesResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return DivisionClassResponse
     */
    public function getDivisionClass($idOrSlug): DivisionClassResponse
    {
        $response = $this->connection->get(sprintf('division_classes/%s', $idOrSlug));

        return ResponseFactory::createDivisionClassResponse($response);
    }

    public function getDivisionOrders(): DivisionOrdersResponse
    {
        $response = $this->connection->get('division_orders');

        return ResponseFactory::createDivisionOrdersResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return DivisionOrderResponse
     */
    public function getDivisionOrder($idOrSlug): DivisionOrderResponse
    {
        $response = $this->connection->get(sprintf('division_orders/%s', $idOrSlug));

        return ResponseFactory::createDivisionOrderResponse($response);
    }

    public function getFamilies(): FamiliesResponse
    {
        $response = $this->connection->get('families');

        return ResponseFactory::createFamiliesResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return FamilyResponse
     */
    public function getFamily($idOrSlug): FamilyResponse
    {
        $response = $this->connection->get(sprintf('families/%s', $idOrSlug));

        return ResponseFactory::createFamilyResponse($response);
    }

    public function getGenera(): GeneraResponse
    {
        $response = $this->connection->get('genus');

        return ResponseFactory::createGeneraResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return GenusResponse
     */
    public function getGenus($idOrSlug): GenusResponse
    {
        $response = $this->connection->get(sprintf('genus/%s', $idOrSlug));

        return ResponseFactory::createGenusResponse($response);
    }

    public function getPlants(): PlantsResponse
    {
        $response = $this->connection->get('plants');

        return ResponseFactory::createPlantsResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return PlantResponse
     */
    public function getPlant($idOrSlug): PlantResponse
    {
        $response = $this->connection->get(sprintf('plants/%s', $idOrSlug));

        return ResponseFactory::createPlantResponse($response);
    }

    public function getSpecies(): SpeciesResponse
    {
        $response = $this->connection->get('species');

        return ResponseFactory::createSpeciesResponse($response);
    }

    /**
     * @param int|string $idOrSlug
     *
     * @return OneSpeciesResponse
     */
    public function getOneSpecies($idOrSlug): OneSpeciesResponse
    {
        $response = $this->connection->get(sprintf('species/%s', $idOrSlug));

        return ResponseFactory::createOneSpeciesResponse($response);
    }

    public function searchPlants(): SearchRequest
    {
        return $this->search(SearchType::SPECIES());
    }

    protected function search(SearchType $searchType): SearchRequest
    {
        return new SearchRequest($searchType, $this->connection);
    }

    public function searchSpecies(): SearchRequest
    {
        return $this->search(SearchType::SPECIES());
    }
}
