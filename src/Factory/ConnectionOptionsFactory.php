<?php declare(strict_types=1);

namespace Trefle\Factory;

use Trefle\Connection\Options;
use Trefle\Connection\Version;
use Trefle\Exception\InvalidArgumentException;
use Trefle\Exception\InvalidVersionException;
use UnexpectedValueException;

class ConnectionOptionsFactory
{
    /**
     * @param string $token
     * @param array $options
     * @return Options
     * @throws InvalidVersionException
     */
    public static function createWithOptionsArray(string $token, array $options): Options
    {
        $connectionOptions = new Options($token);

        foreach ($options as $optionKey => $optionValue) {
            switch ($optionKey) {
                case 'version':
                    try {
                        $connectionOptions->setVersion(new Version($optionValue));
                    } catch (UnexpectedValueException $exception) {
                        throw new InvalidVersionException(
                            sprintf('%s is not a valid version value', $optionValue),
                            0,
                            $exception
                        );
                    }
                    break;
                default:
                    throw new InvalidArgumentException(sprintf('%s is not a valid option for Connection', $optionKey));
            }
        }

        return $connectionOptions;
    }
}
