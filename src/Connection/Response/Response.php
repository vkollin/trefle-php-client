<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

abstract class Response
{
    private array $links;
    private array $meta;

    public function __construct(array $links, array $meta)
    {
        $this->links = $links;
        $this->meta  = $meta;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }
}
