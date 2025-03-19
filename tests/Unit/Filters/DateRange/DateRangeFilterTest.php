<?php

use DanielHe4rt\PostHog\Query\Filters\DateRange\DateRangeFilter;

test('it can create a date range with only from date', function () {
    $dateRange = DateRangeFilter::from('-7d');
    
    expect($dateRange)
        ->toBeInstanceOf(DateRangeFilter::class)
        ->and($dateRange->from)->toBe('-7d')
        ->and($dateRange->to)->toBeNull();
});

test('it can create a date range with both from and to dates', function () {
    $dateRange = DateRangeFilter::from('-14d', 'now');
    
    expect($dateRange)
        ->toBeInstanceOf(DateRangeFilter::class)
        ->and($dateRange->from)->toBe('-14d')
        ->and($dateRange->to)->toBe('now');
});

test('it can be created using constructor', function () {
    $dateRange = new DateRangeFilter('-30d', '-1d');
    
    expect($dateRange)
        ->toBeInstanceOf(DateRangeFilter::class)
        ->and($dateRange->from)->toBe('-30d')
        ->and($dateRange->to)->toBe('-1d');
}); 