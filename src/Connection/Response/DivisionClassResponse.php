<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\DivisionClass;

class DivisionClassResponse extends SingleResponse
{
    private DivisionClass $divisionClass;

    public function __construct(array $meta, DivisionClass $divisionClass)
    {
        parent::__construct($meta);
        $this->divisionClass = $divisionClass;
    }

    public function getDivisionClass(): DivisionClass
    {
        return $this->divisionClass;
    }
}
