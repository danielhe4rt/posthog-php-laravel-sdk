<?php

use DanielHe4rt\PostHog\Query\Filters\Compare\CompareFilter;

test('it can create a compare filter with default values', function () {
    $filter = new CompareFilter();
    
    expect($filter)
        ->toBeInstanceOf(CompareFilter::class);
        
    $json = $filter->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('compare', false)
        ->not->toHaveKey('compare_to');
});

test('it can create a compare filter with make method', function () {
    $filter = CompareFilter::make(true, '-7d');
    
    expect($filter)
        ->toBeInstanceOf(CompareFilter::class);
        
    $json = $filter->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('compare', true)
        ->toHaveKey('compare_to', '-7d');
});

test('it can create a compare filter with custom values using constructor', function () {
    $filter = new CompareFilter(true, '-30d');
    
    expect($filter)
        ->toBeInstanceOf(CompareFilter::class);
        
    $json = $filter->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('compare', true)
        ->toHaveKey('compare_to', '-30d');
});

test('it does not include compareTo in JSON if null', function () {
    $filter = new CompareFilter(true, null);
    
    $json = $filter->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('compare', true)
        ->not->toHaveKey('compare_to');
}); 