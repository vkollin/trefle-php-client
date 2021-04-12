<?php declare(strict_types=1);

namespace Trefle;

use Trefle\Connection\ApiClient;
use Trefle\Factory\ConnectionFactory;
use Trefle\Factory\ConnectionOptionsFactory;

class Client
{
    public static function create(string $token, array $options = []): ApiClient
    {
        $connectionOptions = ConnectionOptionsFactory::createWithOptionsArray($token, $options);
        $connection        = ConnectionFactory::create($connectionOptions);

        return new ApiClient($connection);
    }
}
