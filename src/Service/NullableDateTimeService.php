<?php declare(strict_types=1);

namespace Trefle\Service;

use DateTime;
use Exception;
use Trefle\Exception\InvalidDateTimeException;

class NullableDateTimeService
{
    public static function parseString(string $datetime): ?DateTime
    {
        try {
            return self::parseDateTimeOrThrowException($datetime);
        } catch (InvalidDateTimeException $e) {
            return null;
        }
    }

    /**
     * @throws InvalidDateTimeException
     */
    private static function parseDateTimeOrThrowException(string $datetime): DateTime
    {
        try {
            return new DateTime($datetime);
        } catch (Exception $exception) {
            throw new InvalidDateTimeException(sprintf("'%s' is not parsable by DateTime", $datetime), 0, $exception);
        }
    }
}
