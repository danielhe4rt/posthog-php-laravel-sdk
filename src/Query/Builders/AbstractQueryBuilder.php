<?php

namespace DanielHe4rt\PostHog\Query\Builders;

use DanielHe4rt\PostHog\Query\QueryBuilderInterface;
use DanielHe4rt\PostHog\Query\QueryKindEnum;

/**
 * Abstract base class for PostHog query builders
 */
abstract class AbstractQueryBuilder implements QueryBuilderInterface
{

    /**
     * The query type enum
     */
    protected QueryKindEnum $queryType;

    /**
     * Get the query type enum
     *
     * @return QueryKindEnum
     */
    public function getQueryType(): QueryKindEnum
    {
        return $this->queryType;
    }
} 