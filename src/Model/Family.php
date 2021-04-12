<?php declare(strict_types=1);

namespace Trefle\Model;

class Family extends Base
{
    private ?DivisionOrder $divisionOrder;

    public function __construct(int $id, string $name, string $slug, array $links, ?DivisionOrder $divisionOrder)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->divisionOrder = $divisionOrder;
    }

    public function getDivisionOrder(): ?DivisionOrder
    {
        return $this->divisionOrder;
    }
}
