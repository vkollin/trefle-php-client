<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Genus;

class GenusResponse extends SingleResponse
{
    private Genus $genus;

    public function __construct(array $meta, Genus $genus)
    {
        parent::__construct($meta);
        $this->genus = $genus;
    }

    public function getGenus(): Genus
    {
        return $this->genus;
    }
}
