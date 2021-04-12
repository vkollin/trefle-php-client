<?php declare(strict_types=1);

namespace Trefle\Test\ApiTest;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;
use Trefle\Connection\ApiClient;
use Trefle\Connection\ApiResponse;
use Trefle\Factory\ApiResponseFactory;

class ApiTestCase extends TestCase
{
    use MatchesSnapshots;

    private ApiClient $client;

    protected function getResponse(string $fileName): ApiResponse
    {
        $filepath = sprintf('%s/../resources/openApi/v1/%s.json', __DIR__, $fileName);

        return ApiResponseFactory::createFromArray(
            json_decode(file_get_contents($filepath), true, 512, JSON_THROW_ON_ERROR)
        );
    }
}
