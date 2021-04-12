<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

abstract class SingleResponse
{
    private array $meta;

    public function __construct(array $meta)
    {
        $this->meta = $meta;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }
}
