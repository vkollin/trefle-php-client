<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\DivisionOrder;

class DivisionOrderResponse extends SingleResponse
{
    private DivisionOrder $divisionOrder;

    public function __construct(array $meta, DivisionOrder $divisionOrder)
    {
        parent::__construct($meta);
        $this->divisionOrder = $divisionOrder;
    }

    public function getDivisionOrder(): DivisionOrder
    {
        return $this->divisionOrder;
    }
}
