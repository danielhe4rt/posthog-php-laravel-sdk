<?php

use DanielHe4rt\PostHog\Query\Filters\Properties\Filters\SessionPropertyFilter;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;

test('can create session property filter with constructor', function () {
    $filter = new SessionPropertyFilter(
        key: 'session_duration',
        operator: PropertyOperator::GreaterThan,
        value: 300,
        label: 'Session Duration'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('session_duration')
        ->and($json['operator'])->toBe(PropertyOperator::GreaterThan->value)
        ->and($json['value'])->toBe(300)
        ->and($json['label'])->toBe('Session Duration');
});

test('can create session property filter with static make method', function () {
    $filter = SessionPropertyFilter::make(
        key: 'pages_visited',
        operator: PropertyOperator::GreaterThanOrEqual,
        value: 5,
        label: 'Pages Visited'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('pages_visited')
        ->and($json['operator'])->toBe(PropertyOperator::GreaterThanOrEqual->value)
        ->and($json['value'])->toBe(5)
        ->and($json['label'])->toBe('Pages Visited');
});

test('can create session property filter without label', function () {
    $filter = SessionPropertyFilter::make(
        key: 'browser',
        operator: PropertyOperator::Exact,
        value: 'Chrome'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('browser')
        ->and($json['operator'])->toBe(PropertyOperator::Exact->value)
        ->and($json['value'])->toBe('Chrome')
        ->and($json)->not->toHaveKey('label');
});

test('can create session property filter without value for is_set operator', function () {
    $filter = SessionPropertyFilter::make(
        key: 'has_converted',
        operator: PropertyOperator::IsSet
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('has_converted')
        ->and($json['operator'])->toBe(PropertyOperator::IsSet->value);
        
    if (array_key_exists('value', $json) && $json['value'] !== null) {
        expect($json['value'])->toBeNull();
    } else {
        expect($json)->not->toHaveKey('value');
    }
});

test('can create session property filter with boolean value', function () {
    $filter = SessionPropertyFilter::make(
        key: 'is_first_time',
        operator: PropertyOperator::Exact,
        value: true
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('is_first_time')
        ->and($json['operator'])->toBe(PropertyOperator::Exact->value)
        ->and($json['value'])->toBeTrue();
});

test('can create session property filter with array value for between operator', function () {
    $range = [5, 15];
    $filter = SessionPropertyFilter::make(
        key: 'time_on_page',
        operator: PropertyOperator::Between,
        value: $range
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['key'])->toBe('time_on_page')
        ->and($json['operator'])->toBe(PropertyOperator::Between->value)
        ->and($json['value'])->toBe($range);
}); 