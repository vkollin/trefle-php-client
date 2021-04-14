<?php declare(strict_types=1);

namespace Trefle\Search;

abstract class Base
{
    protected string $fieldName;

    public function __construct(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }
}
