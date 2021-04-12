<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Species;

class OneSpeciesResponse extends SingleResponse
{
    private Species $species;

    public function __construct(array $meta, Species $species)
    {
        parent::__construct($meta);
        $this->species = $species;
    }

    public function getSpecies(): Species
    {
        return $this->species;
    }
}
