<?php declare(strict_types=1);

namespace Trefle\Connection;

use Trefle\Exception\ApiVersionNotImplmentedException;

class Options
{
    private string $token;

    private Version $version;

    private string $apiUrl = 'https://trefle.io';

    public function __construct(string $token)
    {
        $this->version = Version::V1_6_0();

        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getVersion(): Version
    {
        return $this->version;
    }

    public function setVersion(Version $version): void
    {
        $this->version = $version;
    }

    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @return string
     * @throws ApiVersionNotImplmentedException
     */
    public function getUrlVersion(): string
    {
        switch ($this->version->getValue()) {
            case Version::V1_6_0:
                return 'v1';
        }

        throw new ApiVersionNotImplmentedException(
            sprintf('The version %s is not implemented yet', $this->version->getValue()),
        );
    }
}
