<?php

namespace DanielHe4rt\PostHog\Query\Builders\Insights;

use DanielHe4rt\PostHog\Query\Builders\AbstractQueryBuilder;
use DanielHe4rt\PostHog\Query\Filters\DateRange\Concerns\InteractsWithDateRange;
use DanielHe4rt\PostHog\Query\Filters\Node\Concerns\InteractsWithSeries;
use DanielHe4rt\PostHog\Query\Filters\Properties\Concerns\InteractsWithProperties;
use DanielHe4rt\PostHog\Query\QueryKindEnum;

abstract class AbstractInsightsQueryBuilder extends AbstractQueryBuilder
{
    use InteractsWithSeries,
        InteractsWithDateRange,
        InteractsWithProperties;

    protected QueryKindEnum $queryType;

    protected bool $filterTestAccount = false;

    protected ?int $samplingFactor = null;

    protected ?int $dataColorScheme = null;

    protected ?array $hogqlModifiers = null;

    protected ?array $aggregationGroupTypeIndex = null;


    public function setFilterTestAccount(bool $filter): self
    {
        $this->filterTestAccount = $filter;
        return $this;
    }

    /**
     * Set the sampling factor
     *
     * @param int $factor
     * @return $this
     */
    public function setSamplingFactor(int $factor): self
    {
        $this->samplingFactor = $factor;
        return $this;
    }

    /**
     * Set the data color scheme
     *
     * @param int $scheme
     * @return $this
     */
    public function setDataColorScheme(int $scheme): self
    {
        $this->dataColorScheme = $scheme;
        return $this;
    }

    /**
     * Set HogQL modifiers
     *
     * @param array $modifiers
     * @return $this
     */
    public function setHogqlModifiers(array $modifiers): self
    {
        $this->hogqlModifiers = $modifiers;
        return $this;
    }

    /**
     * Set aggregation group type index
     *
     * @param array $index
     * @return $this
     */
    public function setAggregationGroupTypeIndex(array $index): self
    {
        $this->aggregationGroupTypeIndex = $index;
        return $this;
    }

    public function jsonSerialize(): array
    {
        $payload = [];

        if ($this->dateRange) {
            $this->buildDateRange($payload);
        }

        if ($this->properties) {
            $this->buildProperties($payload);
        }

        $payload['filterTestAccounts'] = $this->filterTestAccount;
        $payload['kind'] = $this->queryType->value;

        return $payload;
    }
}