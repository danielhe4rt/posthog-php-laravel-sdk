<?php

namespace DanielHe4rt\PostHog\Query;


use DanielHe4rt\PostHog\Query\Builders\Insights\RetentionQueryBuilder;
use DanielHe4rt\PostHog\Query\Builders\Insights\TrendsQueryBuilder;
use InvalidArgumentException;

/**
 * Factory for creating query builders
 */
class QueryFactory
{
    /**
     * Create a new query builder
     */
    public static function create(QueryKindEnum $type): QueryBuilderInterface
    {
        return match ($type) {
            QueryKindEnum::TrendsQuery => new TrendsQueryBuilder(),
            QueryKindEnum::RetentionQuery => new RetentionQueryBuilder(),
            default => throw new InvalidArgumentException("Unsupported query type: {$type}")
        };
    }

    /**
     * Create a trends query builder
     *
     * @return TrendsQueryBuilder
     */
    public static function trends(): TrendsQueryBuilder
    {
        /** @var TrendsQueryBuilder $builder */
        $builder = self::create(QueryKindEnum::TrendsQuery);

        return $builder;
    }

    public static function retention(): RetentionQueryBuilder
    {
        /** @var RetentionQueryBuilder $builder */
        $builder = self::create(QueryKindEnum::RetentionQuery);

        return $builder;
    }
} 