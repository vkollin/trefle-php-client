<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Plant;

class PlantsResponse extends Response
{
    /** @var Plant[] */
    private array $plants;

    public function __construct(array $links, array $meta, array $plants)
    {
        parent::__construct($links, $meta);
        $this->plants = $plants;
    }

    /** @return Plant[] */
    public function getPlants(): array
    {
        return $this->plants;
    }
}
