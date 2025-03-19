<?php


use DanielHe4rt\PostHog\Query\Builders\Insights\TrendsQueryBuilder;
use DanielHe4rt\PostHog\Query\Filters\DateRange\DateRangeFilter;
use DanielHe4rt\PostHog\Query\Filters\Interval\QueryIntervalEnum;
use DanielHe4rt\PostHog\Query\Filters\Node\EventsNode;
use DanielHe4rt\PostHog\Query\Filters\Node\MathEnum;
use DanielHe4rt\PostHog\Query\Filters\Properties\Filters\EventPropertyFilter;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;

test('it can set the date range', function () {
    $expected = [
        'kind' => 'TrendsQuery',
        'filterTestAccounts' => false,
        'dateRange' => [
            'date_from' => '-7d',
            'date_to' => null,
        ],
        'interval' => 'day',
        'series' => [
            [
                'event' => '$pageview',
                'kind' => 'EventsNode',
                'math' => 'dau',
                'name' => 'Pageview',
            ],
        ],
        'compareFilter' => [
            'compare' => true,
        ],
        'properties' => [
            [
                'type' => 'event',
                'key' => '$host',
                'operator' => 'exact',
                'value' => 'api-main-ofjibb.laravel.cloud',
            ],
        ],
    ];

    // TODO: check the SeriesTypes because probably it has one for each type of event.
    // TODO: do a basis Series and Abstract it.
    // TODO: after you finish the filtering, will be enough to use as a basis to build the rest.

    $actual = TrendsQueryBuilder::make()
        ->setDateRange(DateRangeFilter::from('-7d'))
        ->setInterval(QueryIntervalEnum::Day)
        ->addCompareFilter()
        ->addSeries(EventsNode::make('$pageview', MathEnum::DAU, 'Pageview'))
        ->addProperty(EventPropertyFilter::make('$host', PropertyOperator::Exact, 'api-main-ofjibb.laravel.cloud'));


    expect($actual)->toBeInstanceOf(TrendsQueryBuilder::class)
        ->and($actual->build())->toMatchArray($expected);
});