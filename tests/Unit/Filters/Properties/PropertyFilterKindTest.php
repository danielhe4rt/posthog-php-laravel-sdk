<?php

use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyFilterKind;

test('all property filter kinds have correct values', function () {
    expect(PropertyFilterKind::Meta->value)->toBe('meta')
        ->and(PropertyFilterKind::Event->value)->toBe('event')
        ->and(PropertyFilterKind::Person->value)->toBe('person')
        ->and(PropertyFilterKind::Element->value)->toBe('element')
        ->and(PropertyFilterKind::Feature->value)->toBe('feature')
        ->and(PropertyFilterKind::Session->value)->toBe('session')
        ->and(PropertyFilterKind::Cohort->value)->toBe('cohort')
        ->and(PropertyFilterKind::Recording->value)->toBe('recording')
        ->and(PropertyFilterKind::LogEntry->value)->toBe('log_entry')
        ->and(PropertyFilterKind::Group->value)->toBe('group')
        ->and(PropertyFilterKind::HogQL->value)->toBe('hogql')
        ->and(PropertyFilterKind::DataWarehouse->value)->toBe('data_warehouse')
        ->and(PropertyFilterKind::DataWarehousePersonProperty->value)->toBe('data_warehouse_person_property');
});

test('property filter kind correctly implements jsonSerialize', function () {
    expect(PropertyFilterKind::Event->jsonSerialize())->toBe('event')
        ->and(PropertyFilterKind::Person->jsonSerialize())->toBe('person')
        ->and(PropertyFilterKind::Session->jsonSerialize())->toBe('session');
    
    // Test with json_encode
    expect(json_encode(PropertyFilterKind::Event))->toBe('"event"')
        ->and(json_encode(PropertyFilterKind::Person))->toBe('"person"')
        ->and(json_encode(PropertyFilterKind::Session))->toBe('"session"');
}); 