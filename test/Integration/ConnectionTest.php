<?php declare(strict_types=1);

namespace Trefle\Test\Integration;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Trefle\Connection\ApiResponse;
use Trefle\Connection\Connection;
use Trefle\Connection\Options;
use Trefle\Exception\BadResponseException;
use Trefle\Factory\ApiResponseFactory;

final class ConnectionTest extends TestCase
{
    public function testConnection(): void
    {
        $options = new Options('token');

        $clientStub = $this->createMock(Client::class);
        $clientStub
            ->method('get')
            ->willReturn(
                $this->createResponse()
            );

        $connection = new Connection($options, $clientStub);
        $response   = $connection->get('some path');

        self::assertInstanceOf(ApiResponse::class, $response);
    }

    private function createResponse(
        array $data = [],
        array $meta = [],
        array $links = []
    ): Response {
        return new Response(
            200,
            [],
            json_encode(
                [
                    'data'  => $data,
                    'meta'  => $meta,
                    'links' => $links,
                ],
                JSON_THROW_ON_ERROR
            )
        );
    }

    public function testConnectionThrowsException(): void
    {
        $this->expectException(BadResponseException::class);

        $options = new Options('token');

        $clientStub = $this->createMock(Client::class);
        $clientStub
            ->method('get')
            ->willReturn(new Response(404));

        $connection = new Connection($options, $clientStub);
        $connection->get('some path');
    }

    public function testApiResponseFactoryThrowsExceptionIfJsonIsInvalid(): void
    {
        $this->expectException(BadResponseException::class);

        $responseStub = $this->createMock(Response::class);
        $responseStub
            ->method('getBody')
            ->willReturn('Some invalid json');

        ApiResponseFactory::createFromResponse($responseStub);
    }
}
