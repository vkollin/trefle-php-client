<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Division;

class DivisionsResponse extends Response
{
    /** @var Division[] */
    private array $divisions;

    public function __construct(array $links, array $meta, array $divisions)
    {
        parent::__construct($links, $meta);
        $this->divisions = $divisions;
    }

    /** @return Division[] */
    public function getDivisions(): array
    {
        return $this->divisions;
    }
}
