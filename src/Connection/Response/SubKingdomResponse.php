<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\SubKingdom;

class SubKingdomResponse extends SingleResponse
{
    private SubKingdom $subKingdom;

    public function __construct(array $meta, SubKingdom $subKingdom)
    {
        parent::__construct($meta);
        $this->subKingdom = $subKingdom;
    }

    public function getSubKingdom(): SubKingdom
    {
        return $this->subKingdom;
    }
}
