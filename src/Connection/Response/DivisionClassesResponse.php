<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\DivisionClass;

class DivisionClassesResponse extends Response
{
    /** @var DivisionClass[] */
    private array $divisionClasses;

    public function __construct(array $links, array $meta, array $divisionClasses)
    {
        parent::__construct($links, $meta);
        $this->divisionClasses = $divisionClasses;
    }

    public function getDivisionClasses(): array
    {
        return $this->divisionClasses;
    }
}
