<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Species;

class SpeciesResponse extends Response
{
    /** @var Species[] */
    private array $species;

    public function __construct(array $links, array $meta, array $species)
    {
        parent::__construct($links, $meta);
        $this->species = $species;
    }

    /** @return Species[] */
    public function getSpecies(): array
    {
        return $this->species;
    }
}
