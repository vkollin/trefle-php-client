<?php declare(strict_types=1);

namespace Trefle\Search;

use Trefle\Enumeration\Order;

class OrderBy extends Base
{
    private Order $order;

    public function __construct(string $fieldName, Order $order)
    {
        parent::__construct($fieldName);
        $this->order = $order;
    }

    public function getOrder(): string
    {
        return $this->order->getValue();
    }
}
