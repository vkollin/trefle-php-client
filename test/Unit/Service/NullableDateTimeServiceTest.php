<?php declare(strict_types=1);

namespace Trefle\Test\Unit;

use PHPUnit\Framework\TestCase;
use Trefle\Service\NullableDateTimeService;

final class NullableDateTimeServiceTest extends TestCase
{
    public function testCreateSourceCanHandleValidDatetimeString(): void
    {
        $dateTime = NullableDateTimeService::parseString('1965-12-28T01:00:00.000Z');

        self::assertEquals('28.12.1965', $dateTime->format('d.m.Y'));
    }

    public function testCreateSourceCanHandleInvalidDatetimeString(): void
    {
        $dateTime = NullableDateTimeService::parseString('this should not be parsable');

        self::assertNull($dateTime);
    }
}
