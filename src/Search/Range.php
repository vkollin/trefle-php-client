<?php declare(strict_types=1);

namespace Trefle\Search;

class Range extends Base
{
    private int $min;
    private int $max;

    public function __construct(string $fieldName, int $min, int $max)
    {
        parent::__construct($fieldName);
        $this->min = $min;
        $this->max = $max;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function getRange(): array
    {
        return [$this->min, $this->max];
    }
}
