<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Division;

class DivisionResponse extends SingleResponse
{
    private Division $division;

    public function __construct(array $meta, Division $division)
    {
        parent::__construct($meta);
        $this->division = $division;
    }

    public function getDivision(): Division
    {
        return $this->division;
    }
}
