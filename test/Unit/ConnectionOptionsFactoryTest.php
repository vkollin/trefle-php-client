<?php declare(strict_types=1);

namespace Trefle\Test\Unit;

use PHPUnit\Framework\TestCase;
use Trefle\Connection\Version;
use Trefle\Exception\InvalidArgumentException;
use Trefle\Exception\InvalidVersionException;
use Trefle\Factory\ConnectionOptionsFactory;

final class ConnectionOptionsFactoryTest extends TestCase
{
    public function testSuccessful(): void
    {
        $options = ConnectionOptionsFactory::createWithOptionsArray(
            'token',
            ['version' => Version::V1_6_0]
        );

        self::assertEquals(Version::V1_6_0, $options->getVersion());
        self::assertEquals('token', $options->getToken());
    }

    public function testThrowsExceptionWithInvalidVersion(): void
    {
        $this->expectException(InvalidVersionException::class);

        ConnectionOptionsFactory::createWithOptionsArray(
            'token',
            ['version' => '0.0.1']
        );
    }

    public function testThrowsExceptionWithInvalidOption(): void
    {
        $this->expectException(InvalidArgumentException::class);

        ConnectionOptionsFactory::createWithOptionsArray(
            'token',
            ['invalid' => 'option']
        );
    }
}
