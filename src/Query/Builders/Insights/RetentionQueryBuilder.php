<?php

namespace DanielHe4rt\PostHog\Query\Builders\Insights;

use DanielHe4rt\PostHog\Query\Filters\Retention\Concerns\InteractsWithRetention;
use DanielHe4rt\PostHog\Query\QueryKindEnum;

class RetentionQueryBuilder extends AbstractInsightsQueryBuilder
{
    use InteractsWithRetention;


    protected QueryKindEnum $queryType = QueryKindEnum::RetentionQuery;

    public static function make(): self
    {
        return new self();
    }

    public function build(): array
    {
        $payload = parent::jsonSerialize();

        $payload['kind'] = $this->queryType->value;
        $this->buildRetention($payload);

        return $payload;

    }
}