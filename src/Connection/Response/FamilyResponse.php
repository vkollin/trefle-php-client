<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Family;

class FamilyResponse extends SingleResponse
{
    private Family $family;

    public function __construct(array $meta, Family $family)
    {
        parent::__construct($meta);
        $this->family = $family;
    }

    public function getFamily(): Family
    {
        return $this->family;
    }
}
