<?php declare(strict_types=1);

namespace Trefle\Connection;

use Trefle\Connection\Response\PlantsResponse;
use Trefle\Connection\Response\Response;
use Trefle\Connection\Response\SpeciesResponse;
use Trefle\Enumeration\FilterField;
use Trefle\Enumeration\Order;
use Trefle\Enumeration\OrderField;
use Trefle\Enumeration\RangeField;
use Trefle\Enumeration\SearchType;
use Trefle\Search\Filter;
use Trefle\Search\OrderBy;
use Trefle\Search\Range;

class SearchRequest
{
    /** @var Filter[] */
    protected array $filters = [];
    /** @var Filter[] */
    protected array $notFilters = [];
    /** @var OrderBy[] */
    protected array $orders = [];
    /** @var Range[] */
    protected array $ranges = [];
    private SearchType $searchType;
    private Connection $connection;
    private ?string $query = null;

    public function __construct(SearchType $searchType, Connection $connection)
    {
        $this->searchType = $searchType;
        $this->connection = $connection;
    }

    public function filter(FilterField $fieldName, $value): self
    {
        return $this->addFilter(new Filter($fieldName->getValue(), $value));
    }

    /**
     * Filter on values
     *
     * @param Filter $filter
     * @return $this
     */
    protected function addFilter(Filter $filter): self
    {
        $this->filters[] = $filter;

        return $this;
    }

    public function notFilter(FilterField $fieldName, $value): self
    {
        return $this->addNotFilter(new Filter($fieldName->getValue(), $value));
    }

    /**
     * Exclude results matching null values
     *
     * @param Filter $filter
     * @return $this
     */
    protected function addNotFilter(Filter $filter): self
    {
        $this->notFilters[] = $filter;

        return $this;
    }

    public function range(RangeField $fieldName, int $min, int $max): self
    {
        return $this->addRange(new Range($fieldName->getValue(), $min, $max));
    }

    /**
     * Range on values
     *
     * @param Range $range
     * @return $this
     */
    protected function addRange(Range $range): self
    {
        $this->ranges[] = $range;

        return $this;
    }

    public function orderBy(OrderField $fieldName, Order $order): self
    {
        return $this->addOrderBy(new OrderBy($fieldName->getValue(), $order));
    }

    /**
     * Sort on values
     *
     * @param OrderBy $orderBy
     * @return $this
     */
    protected function addOrderBy(OrderBy $orderBy): self
    {
        $this->orders[] = $orderBy;

        return $this;
    }

    public function query(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @return PlantsResponse|SpeciesResponse Response
     */
    public function fetch(): Response
    {
        $url           = null;
        $responseClass = null;

        $hasQuery = $this->query !== null;

        switch ($this->searchType->getValue()) {
            case SearchType::PLANTS:
                $url           = 'plants';
                $responseClass = PlantsResponse::class;
                break;
            case SearchType::SPECIES:
                $url           = 'species';
                $responseClass = SpeciesResponse::class;
                break;
        }

        if ($hasQuery) {
            $url .= '/search';
        }

        $response = $this->connection->get($url, $this->getAsQuery());

        /** @var $responseClass PlantsResponse|SpeciesResponse */
        return new $responseClass(
            $response->getLinks(),
            $response->getMeta(),
            $response->getData()
        );
    }

    public function getAsQuery(): array
    {
        $queryParts = [];

        foreach ($this->filters as $filter) {
            $queryParts['filter'][$filter->getFieldName()] = $filter->getValue();
        }

        foreach ($this->notFilters as $filter) {
            $queryParts['filter_not'][$filter->getFieldName()] = $filter->getValue();
        }

        foreach ($this->ranges as $range) {
            $queryParts['range'][$range->getFieldName()] = sprintf('%s,%s', $range->getMin(), $range->getMax());
        }

        foreach ($this->orders as $order) {
            $queryParts['order'][$order->getFieldName()] = $order->getOrder();
        }

        if ($this->query) {
            $queryParts['q'] = $this->query;
        }

        return $queryParts;
    }
}
