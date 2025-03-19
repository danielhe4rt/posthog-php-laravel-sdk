<?php

use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\ActionConversionGoal;
use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\CustomEventConversionGoal;

test('it can create a custom event conversion goal', function () {
    $goal = CustomEventConversionGoal::make('sign_up');
    
    expect($goal)
        ->toBeInstanceOf(CustomEventConversionGoal::class);
        
    $json = $goal->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('customEventName', 'sign_up');
});

test('it can create a custom event conversion goal with constructor', function () {
    $goal = new CustomEventConversionGoal('purchase_completed');
    
    expect($goal)
        ->toBeInstanceOf(CustomEventConversionGoal::class);
        
    $json = $goal->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('customEventName', 'purchase_completed');
});

test('it can create an action conversion goal', function () {
    $goal = ActionConversionGoal::make(123);
    
    expect($goal)
        ->toBeInstanceOf(ActionConversionGoal::class);
        
    $json = $goal->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('actionId', 123);
});

test('it can create an action conversion goal with constructor', function () {
    $goal = new ActionConversionGoal(456);
    
    expect($goal)
        ->toBeInstanceOf(ActionConversionGoal::class);
        
    $json = $goal->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('actionId', 456);
}); 