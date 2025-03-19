<?php

use DanielHe4rt\PostHog\Query\Filters\Breakdown\BreakdownFilter;
use DanielHe4rt\PostHog\Query\Filters\Breakdown\BreakdownTypeEnum;

test('it can create a breakdown for an event property', function () {
    $breakdown = BreakdownFilter::forEventProperty('property_name');
    
    expect($breakdown)
        ->toBeInstanceOf(BreakdownFilter::class)
        ->and($breakdown->getType())->toBe(BreakdownTypeEnum::Event)
        ->and($breakdown->getProperty())->toBe('property_name');
        
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_type', 'event')
        ->toHaveKey('breakdown', 'property_name');
});

test('it can create a breakdown for a person property', function () {
    $breakdown = BreakdownFilter::forPersonProperty('person_prop');
    
    expect($breakdown)
        ->toBeInstanceOf(BreakdownFilter::class)
        ->and($breakdown->getType())->toBe(BreakdownTypeEnum::Person)
        ->and($breakdown->getProperty())->toBe('person_prop');
        
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_type', 'person')
        ->toHaveKey('breakdown', 'person_prop');
});

test('it can create a breakdown for a session property', function () {
    $breakdown = BreakdownFilter::forSessionProperty('session_prop');
    
    expect($breakdown)
        ->toBeInstanceOf(BreakdownFilter::class)
        ->and($breakdown->getType())->toBe(BreakdownTypeEnum::Session)
        ->and($breakdown->getProperty())->toBe('session_prop');
        
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_type', 'session')
        ->toHaveKey('breakdown', 'session_prop');
});

test('it can create a breakdown for a group property', function () {
    $breakdown = BreakdownFilter::forGroupProperty('group_prop', 1);
    
    expect($breakdown)
        ->toBeInstanceOf(BreakdownFilter::class)
        ->and($breakdown->getType())->toBe(BreakdownTypeEnum::Group)
        ->and($breakdown->getProperty())->toBe('group_prop');
        
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_type', 'group')
        ->toHaveKey('breakdown', 'group_prop')
        ->toHaveKey('breakdown_group_type_index', 1);
});

test('it can create a breakdown for a HogQL expression', function () {
    $breakdown = BreakdownFilter::forHogQL('properties.$host');
    
    expect($breakdown)
        ->toBeInstanceOf(BreakdownFilter::class)
        ->and($breakdown->getType())->toBe(BreakdownTypeEnum::HogQL)
        ->and($breakdown->getProperty())->toBe('properties.$host');
        
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_type', 'hogql')
        ->toHaveKey('breakdown', 'properties.$host');
});

test('it can set normalize URL option', function () {
    $breakdown = BreakdownFilter::forEventProperty('url')
        ->setNormalizeUrl(true);
    
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_normalize_url', true);
});

test('it can set histogram bin count', function () {
    $breakdown = BreakdownFilter::forEventProperty('numeric_prop')
        ->setHistogramBinCount(10);
    
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_histogram_bin_count', 10);
});

test('it can set hide other aggregation option', function () {
    $breakdown = BreakdownFilter::forEventProperty('property')
        ->setHideOtherAggregation(true);
    
    $json = $breakdown->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('breakdown_hide_other_aggregation', true);
}); 