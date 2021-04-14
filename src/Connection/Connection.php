<?php declare(strict_types=1);

namespace Trefle\Connection;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Trefle\Exception\BadResponseException;
use Trefle\Factory\ApiResponseFactory;

class Connection
{
    private Options $options;

    private Client $client;

    public function __construct(Options $options, Client $client)
    {
        $this->options = $options;
        $this->client  = $client;
    }

    public function get(string $path, array $query = null): ApiResponse
    {
        $realPath = sprintf('/api/%s/%s', $this->options->getUrlVersion(), $path);
        $options  = [];

        if ($query) {
            $options [RequestOptions::QUERY] = $query;
        }

        $response = $this->client->get($realPath, $this->addToken($options));

        $this->throwSpecificErrorIfStatusCodeIsNotOkay($response);

        return ApiResponseFactory::createFromResponse($response);
    }

    private function addToken($options): array
    {
        return array_merge_recursive(
            $options,
            [
                RequestOptions::QUERY => [
                    'token' => $this->options->getToken(),
                ]
            ]
        );
    }

    /**
     * @throws BadResponseException
     */
    private function throwSpecificErrorIfStatusCodeIsNotOkay(ResponseInterface $response): void
    {
        if ($response->getStatusCode() !== 200) {
            throw new BadResponseException(
                (string) $response->getBody(),
                $response->getStatusCode(),
            );
        }
    }
}
