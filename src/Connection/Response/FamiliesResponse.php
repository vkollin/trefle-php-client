<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Family;

class FamiliesResponse extends Response
{
    /** @var Family[] */
    private array $families;

    public function __construct(array $links, array $meta, array $families)
    {
        parent::__construct($links, $meta);
        $this->families = $families;
    }

    /** @return Family[] */
    public function getFamilies(): array
    {
        return $this->families;
    }
}
