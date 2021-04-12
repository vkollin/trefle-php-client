<?php declare(strict_types=1);

namespace Trefle\Connection;

class ApiResponse
{
    private array $data;
    private array $meta;
    private ?array $links;

    public function __construct(array $data, array $meta, ?array $links = null)
    {
        $this->data  = $data;
        $this->meta  = $meta;
        $this->links = $links;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }
}
