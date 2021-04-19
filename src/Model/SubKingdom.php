<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class SubKingdom extends Base
{
    private Kingdom $kingdom;

    public function __construct(int $id, string $name, string $slug, Links $links, Kingdom $kingdom)
    {
        parent::__construct($id, $name, $slug, $links);

        $this->kingdom = $kingdom;
    }

    public function getKingdom(): Kingdom
    {
        return $this->kingdom;
    }
}
