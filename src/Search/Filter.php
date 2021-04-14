<?php declare(strict_types=1);

namespace Trefle\Search;

class Filter extends Base
{
    /** @var string|int|array */
    private $value;

    /**
     * @param string $fieldName
     * @param string|int|array $value
     */
    public function __construct(string $fieldName, $value)
    {
        parent::__construct($fieldName);

        $this->value = $value;
    }

    /**
     * @return array|int|string
     */
    public function getValue()
    {
        return $this->value;
    }
}
