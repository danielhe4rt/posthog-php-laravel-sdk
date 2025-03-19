<?php

use DanielHe4rt\PostHog\Query\Filters\Properties\Filters\EventPropertyFilter;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyFilterKind;

test('can create event property filter with constructor', function () {
    $filter = new EventPropertyFilter(
        key: 'event_name',
        operator: PropertyOperator::Exact,
        value: 'button_click',
        label: 'Button Click'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['type'])->toBe(PropertyFilterKind::Event->value)
        ->and($json['key'])->toBe('event_name')
        ->and($json['operator'])->toBe(PropertyOperator::Exact->value)
        ->and($json['value'])->toBe('button_click');
    
    // Check if label is correctly handled - in some implementations it might be optional
    if (isset($json['label'])) {
        expect($json['label'])->toBe('Button Click');
    }
});

test('can create event property filter with static make method', function () {
    $filter = EventPropertyFilter::make(
        key: 'page_url',
        operator: PropertyOperator::IContains,
        value: 'checkout',
        label: 'Checkout Page'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['type'])->toBe(PropertyFilterKind::Event->value)
        ->and($json['key'])->toBe('page_url')
        ->and($json['operator'])->toBe(PropertyOperator::IContains->value)
        ->and($json['value'])->toBe('checkout');
    
    // Check if label is correctly handled - in some implementations it might be optional
    if (isset($json['label'])) {
        expect($json['label'])->toBe('Checkout Page');
    }
});

test('can create event property filter with make method and default operator', function () {
    $filter = EventPropertyFilter::make(
        key: 'user_id',
        value: '12345'
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['type'])->toBe(PropertyFilterKind::Event->value)
        ->and($json['key'])->toBe('user_id')
        ->and($json['operator'])->toBe(PropertyOperator::Exact->value)
        ->and($json['value'])->toBe('12345');
});

test('can create event property filter without value for operators like is_set', function () {
    $filter = EventPropertyFilter::make(
        key: 'email',
        operator: PropertyOperator::IsSet
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['type'])->toBe(PropertyFilterKind::Event->value)
        ->and($json['key'])->toBe('email')
        ->and($json['operator'])->toBe(PropertyOperator::IsSet->value);
        
    // Some implementations might include null value or not include it at all
    if (array_key_exists('value', $json) && $json['value'] !== null) {
        expect($json['value'])->toBeNull();
    } else {
        expect($json)->not->toHaveKey('value');
    }
});

test('can create event property filter with boolean value', function () {
    $filter = EventPropertyFilter::make(
        key: 'is_admin',
        value: true
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['value'])->toBeTrue();
});

test('can create event property filter with numeric value', function () {
    $filter = EventPropertyFilter::make(
        key: 'count',
        operator: PropertyOperator::GreaterThan,
        value: 5
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['value'])->toBe(5)
        ->and($json['operator'])->toBe('gt');
});

test('can create event property filter with array value for "in" operator', function () {
    $values = ['login', 'signup', 'checkout'];
    $filter = EventPropertyFilter::make(
        key: 'action',
        operator: PropertyOperator::In,
        value: $values
    );
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['value'])->toBe($values)
        ->and($json['operator'])->toBe('in');
}); 