<?php

namespace DanielHe4rt\PostHog\Query\Builders\Insights;

use DanielHe4rt\PostHog\Query\Filters\Breakdown\Concerns\InteractsWithBreakdown;
use DanielHe4rt\PostHog\Query\Filters\Compare\Concerns\InteractsWithCompare;
use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\Concern\InteractsWithConversionGoal;
use DanielHe4rt\PostHog\Query\Filters\DateRange\Concerns\InteractsWithDateRange;
use DanielHe4rt\PostHog\Query\Filters\Interval\Concerns\InteractsWithInterval;
use DanielHe4rt\PostHog\Query\Filters\Node\Concerns\InteractsWithSeries;
use DanielHe4rt\PostHog\Query\Filters\Properties\Concerns\InteractsWithProperties;
use DanielHe4rt\PostHog\Query\QueryKindEnum;

/**
 * Builder for PostHog trends queries
 *
 * @see https://posthog.com/docs/api/queries/trends
 */
class TrendsQueryBuilder extends AbstractInsightsQueryBuilder
{
    use InteractsWithInterval,
        InteractsWithDateRange,
        InteractsWithBreakdown,
        InteractsWithCompare,
        InteractsWithConversionGoal,
        InteractsWithProperties,
        InteractsWithSeries;

    protected QueryKindEnum $queryType = QueryKindEnum::TrendsQuery;

    public static function make(): self
    {
        return new self();
    }


    /**
     * Build the query payload
     *
     * @return array
     */
    public function build(): array
    {
        return $this->jsonSerialize();
    }


    public function jsonSerialize(): array
    {
        $payload = parent::jsonSerialize();

        $payload['kind'] = $this->queryType->value;

        $this->buildDateRange($payload);
        $this->buildInterval($payload);
        $this->buildSeries($payload);
        $this->buildCompare($payload);
        $this->buildProperties($payload);
        $this->buildConversionGoal($payload);
        $this->buildBreakdown($payload);

        return $payload;
    }
}