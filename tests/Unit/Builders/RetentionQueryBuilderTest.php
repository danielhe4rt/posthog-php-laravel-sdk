<?php


use DanielHe4rt\PostHog\Query\Builders\Insights\RetentionQueryBuilder;
use DanielHe4rt\PostHog\Query\Filters\DateRange\DateRangeFilter;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionReferenceEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionTypeEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\RetentionFilter;

test('can build', function () {
    $expected = [
        "kind" => "RetentionQuery",
        "dateRange" => [
            "date_from" => "-7d",
            "date_to" => null
        ],
        "filterTestAccounts" => false,
        "retentionFilter" => [
            "retentionType" => "retention_first_time",
            "retentionReference" => "total",
            "totalIntervals" => 8,
            "period" => "Week"
        ]
    ];

    $queryBuilder = RetentionQueryBuilder::make()
        ->setDateRange(DateRangeFilter::from('-7d'))
        ->setRetention(RetentionFilter::weekly()
            ->setRetentionType(RetentionTypeEnum::FIRST_TIME)
            ->setRetentionReference(RetentionReferenceEnum::Total)
        );

    expect($queryBuilder)->toBeInstanceOf(RetentionQueryBuilder::class)
        ->and($queryBuilder->build())->toMatchArray($expected);
});
