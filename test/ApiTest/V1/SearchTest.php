<?php declare(strict_types=1);

namespace Trefle\Test\ApiTest\V1;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Trefle\Connection\Connection;
use Trefle\Connection\Options;
use Trefle\Connection\Response\PlantsResponse;
use Trefle\Connection\SearchRequest;
use Trefle\Enumeration\FilterField;
use Trefle\Enumeration\Order;
use Trefle\Enumeration\OrderField;
use Trefle\Enumeration\RangeField;
use Trefle\Enumeration\SearchType;
use Trefle\Test\ApiTest\ApiTestCase;
use TypeError;

class SearchTest extends ApiTestCase
{

    public function testSearchRequestIsBuild()
    {
        $connectionStub = $this->createMock(Connection::class);

        $searchRequest = new SearchRequest(SearchType::PLANTS(), $connectionStub);

        $searchRequest
            ->filter(FilterField::EDIBLE(), true)
            ->filter(FilterField::COMMON_NAME(), 'common name!')
            ->notFilter(FilterField::AUTHOR(), 'me')
            ->range(RangeField::LIGHT(), 3, 5)
            ->orderBy(OrderField::PH_MINIMUM(), Order::DESC());

        $this->assertMatchesSnapshot($searchRequest->getAsQuery());
    }

    public function testSearchRequestFailsWithUnknownFieldname()
    {
        $this->expectException(TypeError::class);

        $connectionStub = $this->createMock(Connection::class);

        $searchRequest = new SearchRequest(SearchType::PLANTS(), $connectionStub);

        $searchRequest->filter('gnah', 'value');
    }

    public function testSearchRequestReturnsResponse()
    {
        $clientStub = $this->createMock(Client::class);
        $clientStub
            ->method('get')
            ->willReturn(
                new Response(
                    200,
                    [],
                    '{"data": [{"id": 150478, "common_name": "Twinflower", "slug": "linnaea-borealis", "scientific_name": "Linnaea borealis", "year": 1753, "bibliography": "Sp. pl. 2:631.  1753", "author": "L.", "status": "accepted", "rank": "species", "family_common_name": "Honeysuckle family", "genus_id": 4202, "image_url": "https://bs.plantnet.org/image/o/2db51777e1663501c4d64eb294a96c8504650a9c", "synonyms": ["Obolaria borealis", "Linnaea subjugosa", "Linnaea vicina", "Linnaea pyrrosema", "Linnaea sulcata", "Linnaea foveolata", "Linnaea roseoalba", "Linnaea tenuiflora", "Linnaea tenuisulcata", "Linnaea longiflora", "Linnaea parvisignata", "Linnaea subsulcata", "Linnaea amoenula", "Linnaea pseudoproterantha", "Linnaea subviolascens", "Linnaea subconfluens", "Linnaea americana f. candicans", "Linnaea australis", "Linnaea tenuisignata", "Linnaea albiloba", "Linnaea jugosa", "Linnaea rotundata", "Linnaea borealis subsp. longiflora", "Linnaea borealis subsp. americana"], "genus": "Linnaea", "family": "Caprifoliaceae", "links": {"self": "/api/v1/species/linnaea-borealis", "plant": "/api/v1/plants/linnaea-borealis", "genus": "/api/v1/genus/linnaea"}}, {"id": 150805, "common_name": "Lesser twayblade", "slug": "neottia-cordata", "scientific_name": "Neottia cordata", "year": 1817, "bibliography": "De Orchid. Eur.: 37 (1817)", "author": "(L.) Rich.", "status": "accepted", "rank": "species", "family_common_name": null, "genus_id": 4219, "image_url": "https://bs.plantnet.org/image/o/4adb547918f8082ba61ca1fb81f54f42ee28135c", "synonyms": ["Listera cordata", "Listera cordata var. nephrophylla", "Ophrys cordata", "Listera cordata f. variegata", "Helleborine cordata", "Diphryllum cordatum", "Pollinirhiza cordata", "Serapias cordata", "Distomaea cordata", "Epipactis cordata", "Listera cordata var. cordata", "Listera cordata f. viridens", "Ophrys nephrophylla", "Listera cordata f. rubescens", "Listera nephrophylla", "Neottia nephrophylla", "Listera cordata var. chlorantha", "Listera cordata f. disjuncta", "Cymbidium cordatum", "Listera cordata f. tetraphylla", "Bifolium cordatum", "Listera cordata subsp. nephrophylla", "Listera cordata f. trifolia"], "genus": "Neottia", "family": "Orchidaceae", "links": {"self": "/api/v1/species/neottia-cordata", "plant": "/api/v1/plants/neottia-cordata", "genus": "/api/v1/genus/neottia"}}], "links": {"self": "/api/v1/plants?range%5Blight%5D=0%2C5&range%5Bph_maximum%5D=0%2C5", "first": "/api/v1/plants?page=1&range%5Blight%5D=0%2C5&range%5Bph_maximum%5D=0%2C5", "last": "/api/v1/plants?page=1&range%5Blight%5D=0%2C5&range%5Bph_maximum%5D=0%2C5"}, "meta": {"total": 2}}'
                )
            );

        $searchRequest = new SearchRequest(SearchType::PLANTS(), new Connection(new Options('token'), $clientStub));

        $response = $searchRequest->fetch();

        self::assertInstanceOf(PlantsResponse::class, $response);
        $this->assertMatchesSnapshot($response);
    }
}

