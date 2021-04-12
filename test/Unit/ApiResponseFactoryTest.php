<?php declare(strict_types=1);

namespace Trefle\Test\Unit;

use PHPUnit\Framework\TestCase;
use Trefle\Factory\ApiResponseFactory;

final class ApiResponseFactoryTest extends TestCase
{
    public function testSuccessful(): void
    {
        $apiResponse = ApiResponseFactory::createFromArray(
            [
                'data'  => ['data'],
                'meta'  => ['meta'],
                'links' => ['links'],
            ]
        );

        self::assertEquals(['data'], $apiResponse->getData());
        self::assertEquals(['meta'], $apiResponse->getMeta());
        self::assertEquals(['links'], $apiResponse->getLinks());
    }
}
