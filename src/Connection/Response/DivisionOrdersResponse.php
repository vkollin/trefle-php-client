<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\DivisionOrder;

class DivisionOrdersResponse extends Response
{
    /** @var DivisionOrder[] */
    private array $divisionOrders;

    public function __construct(array $links, array $meta, array $divisionOrders)
    {
        parent::__construct($links, $meta);
        $this->divisionOrders = $divisionOrders;
    }

    /** @return DivisionOrder[] */
    public function getDivisionOrders(): array
    {
        return $this->divisionOrders;
    }
}
