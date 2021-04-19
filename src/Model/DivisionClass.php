<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class DivisionClass extends Base
{
    private ?Division $division;

    public function __construct(int $id, string $name, string $slug, Links $links, ?Division $division)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->division = $division;
    }

    public function getDivision(): ?Division
    {
        return $this->division;
    }
}
