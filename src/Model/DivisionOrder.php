<?php declare(strict_types=1);

namespace Trefle\Model;

class DivisionOrder extends Base
{
    private DivisionClass $divisionClass;

    public function __construct(int $id, string $name, string $slug, array $links, DivisionClass $divisionClass)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->divisionClass = $divisionClass;
    }

    public function getDivisionClass(): DivisionClass
    {
        return $this->divisionClass;
    }
}
