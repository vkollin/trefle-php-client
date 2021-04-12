<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Kingdom;

class KingdomResponse extends SingleResponse
{
    private Kingdom $kingdom;

    public function __construct(array $meta, Kingdom $kingdom)
    {
        parent::__construct($meta);

        $this->kingdom = $kingdom;
    }

    public function getKingdom(): Kingdom
    {
        return $this->kingdom;
    }
}
