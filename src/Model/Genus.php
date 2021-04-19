<?php declare(strict_types=1);

namespace Trefle\Model;

use Trefle\Model\Links\Links;

class Genus extends Base
{
    private Family $family;

    public function __construct(int $id, string $name, string $slug, Links $links, Family $family)
    {
        parent::__construct($id, $name, $slug, $links);
        $this->family = $family;
    }

    public function getFamily(): Family
    {
        return $this->family;
    }
}
