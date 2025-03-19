<?php

use DanielHe4rt\PostHog\Query\Filters\Interval\QueryIntervalEnum;

test('it has the correct enum values', function () {
    expect(QueryIntervalEnum::Minute->value)->toBe('minute')
        ->and(QueryIntervalEnum::Hour->value)->toBe('hour')
        ->and(QueryIntervalEnum::Day->value)->toBe('day')
        ->and(QueryIntervalEnum::Week->value)->toBe('week')
        ->and(QueryIntervalEnum::Month->value)->toBe('month');
});

test('it can be cast to string correctly', function () {
    $interval = QueryIntervalEnum::Day;
    
    expect($interval->value)->toBe('day');
}); 