<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Kingdom;

class KingdomsResponse extends Response
{
    /** @var Kingdom[] */
    private array $kingdoms;

    public function __construct(array $links, array $meta, array $subKingdoms)
    {
        parent::__construct($links, $meta);

        $this->kingdoms = $subKingdoms;
    }

    /** @return Kingdom[] */
    public function getKingdoms(): array
    {
        return $this->kingdoms;
    }
}
