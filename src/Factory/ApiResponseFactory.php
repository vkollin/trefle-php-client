<?php declare(strict_types=1);

namespace Trefle\Factory;

use JsonException;
use Psr\Http\Message\ResponseInterface;
use Trefle\Connection\ApiResponse;
use Trefle\Exception\BadResponseException;

class ApiResponseFactory
{
    /**
     * @param ResponseInterface $response
     * @return ApiResponse
     * @throws BadResponseException
     */
    public static function createFromResponse(ResponseInterface $response): ApiResponse
    {
        try {
            $raw = json_decode((string) $response->getBody(), true, 512, JSON_THROW_ON_ERROR);

            return self::createFromArray($raw);
        } catch (JsonException $exception) {
            throw new BadResponseException('json from api response could not be decoded', 0, $exception);
        }
    }

    public static function createFromArray(array $raw): ApiResponse
    {
        $data  = $raw['data'];
        $meta  = $raw['meta'];
        $links = $raw['links'] ?? [];

        return new ApiResponse($data, $meta, $links);
    }
}
