<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Plant;

class PlantResponse extends SingleResponse
{
    private Plant $plant;

    public function __construct(array $meta, Plant $plant)
    {
        parent::__construct($meta);
        $this->plant = $plant;
    }

    public function getPlant(): Plant
    {
        return $this->plant;
    }
}
