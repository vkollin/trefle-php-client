<?php declare(strict_types=1);

namespace Trefle\Connection\Response;

use Trefle\Model\Genus;

class GeneraResponse extends Response
{
    /** @var Genus[] * */
    private array $genera;

    public function __construct(array $links, array $meta, array $genera)
    {
        parent::__construct($links, $meta);
        $this->genera = $genera;
    }

    /** @return Genus[] */
    public function getGenera(): array
    {
        return $this->genera;
    }
}
