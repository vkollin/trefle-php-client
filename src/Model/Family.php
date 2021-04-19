<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class Family extends Base
{
    private ?DivisionOrder $divisionOrder;

    public function __construct(int $id, string $name, string $slug, Links $links, ?DivisionOrder $divisionOrder)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->divisionOrder = $divisionOrder;
    }

    public function getDivisionOrder(): ?DivisionOrder
    {
        return $this->divisionOrder;
    }
}
