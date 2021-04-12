<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\SubKingdom;

class SubKingdomsResponse extends Response
{
    /** @var SubKingdom[] */
    private array $subKingdoms;

    public function __construct(array $links, array $meta, array $subKingdoms)
    {
        parent::__construct($links, $meta);

        $this->subKingdoms = $subKingdoms;
    }

    /** @return SubKingdom[] */
    public function getSubKingdoms(): array
    {
        return $this->subKingdoms;
    }
}
