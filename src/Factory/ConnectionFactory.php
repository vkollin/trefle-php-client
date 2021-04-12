<?php declare(strict_types=1);

namespace Trefle\Factory;

use GuzzleHttp\Client;
use Trefle\Connection\Connection;
use Trefle\Connection\Options;

class ConnectionFactory
{
    public static function create(Options $options): Connection
    {
        return new Connection($options, self::initClient($options));
    }

    private static function initClient(Options $options): Client
    {
        return new Client(
            [
                'base_uri' => $options->getApiUrl(),
            ]
        );
    }
}
