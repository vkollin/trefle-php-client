<?php declare(strict_types=1);

namespace Trefle\Model;

class Division extends Base
{
    private SubKingdom $subKingdom;

    public function __construct(int $id, string $name, string $slug, array $links, SubKingdom $subKingdom)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->subKingdom = $subKingdom;
    }

    public function getSubKingdom(): SubKingdom
    {
        return $this->subKingdom;
    }
}
