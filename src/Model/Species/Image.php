<?php declare(strict_types=1);

namespace Trefle\Model\Species;

class Image
{
    private int $id;
    private string $url;
    private ?string $copyright;

    public function __construct(int $id, string $url, ?string $copyright)
    {
        $this->id        = $id;
        $this->url       = $url;
        $this->copyright = $copyright;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }
}
