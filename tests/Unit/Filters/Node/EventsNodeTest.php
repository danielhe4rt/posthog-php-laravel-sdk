<?php

use DanielHe4rt\PostHog\Query\Filters\Node\EntityNodeKindEnum;
use DanielHe4rt\PostHog\Query\Filters\Node\EventsNode;
use DanielHe4rt\PostHog\Query\Filters\Node\MathEnum;

test('it can create an events node with make method', function () {
    $node = EventsNode::make('$pageview', MathEnum::Total, 'Page Views');
    
    expect($node)
        ->toBeInstanceOf(EventsNode::class);
        
    $json = $node->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('event', '$pageview')
        ->toHaveKey('kind', 'EventsNode')
        ->toHaveKey('math', 'total')
        ->toHaveKey('name', 'Page Views')
        ->not->toHaveKey('custom_name');
});

test('it can create an events node with constructor', function () {
    $node = new EventsNode('$pageview', MathEnum::DAU, 'Daily Active Users', null);
    
    expect($node)
        ->toBeInstanceOf(EventsNode::class);
        
    $json = $node->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('event', '$pageview')
        ->toHaveKey('kind', 'EventsNode')
        ->toHaveKey('math', 'dau')
        ->toHaveKey('name', 'Daily Active Users')
        ->not->toHaveKey('custom_name');
});

test('it can create an events node with custom name', function () {
    $node = EventsNode::make('$pageview', MathEnum::WAU, 'WAU', 'Weekly Active Users');
    
    expect($node)
        ->toBeInstanceOf(EventsNode::class);
        
    $json = $node->jsonSerialize();
    expect($json)
        ->toBeArray()
        ->toHaveKey('event', '$pageview')
        ->toHaveKey('kind', 'EventsNode')
        ->toHaveKey('math', 'wau')
        ->toHaveKey('name', 'WAU')
        ->toHaveKey('custom_name', 'Weekly Active Users');
});

test('it can get the event name', function () {
    $node = EventsNode::make('$custom_event', MathEnum::Total, 'Custom Event');
    
    expect($node->getEvent())->toBe('$custom_event');
}); 