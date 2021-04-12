<?php declare(strict_types=1);

namespace Trefle\Model\Species;

use DateTime;

class Source
{
    private string $id;
    private string $name;
    private ?string $url;
    private ?string $citation;
    private ?DateTime $lastUpdate;

    public function __construct(
        string $id,
        string $name,
        ?string $url,
        ?string $citation,
        ?DateTime $lastUpdate
    ) {
        $this->id         = $id;
        $this->name       = $name;
        $this->url        = $url;
        $this->citation   = $citation;
        $this->lastUpdate = $lastUpdate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getCitation(): ?string
    {
        return $this->citation;
    }

    public function getLastUpdate(): ?DateTime
    {
        return $this->lastUpdate;
    }
}
