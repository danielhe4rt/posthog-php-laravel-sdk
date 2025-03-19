<?php

use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;

test('all property operators have correct values', function () {
    expect(PropertyOperator::Exact->value)->toBe('exact')
        ->and(PropertyOperator::IsNot->value)->toBe('is_not')
        ->and(PropertyOperator::IContains->value)->toBe('icontains')
        ->and(PropertyOperator::NotIContains->value)->toBe('not_icontains')
        ->and(PropertyOperator::Regex->value)->toBe('regex')
        ->and(PropertyOperator::NotRegex->value)->toBe('not_regex')
        ->and(PropertyOperator::GreaterThan->value)->toBe('gt')
        ->and(PropertyOperator::GreaterThanOrEqual->value)->toBe('gte')
        ->and(PropertyOperator::LessThan->value)->toBe('lt')
        ->and(PropertyOperator::LessThanOrEqual->value)->toBe('lte')
        ->and(PropertyOperator::IsSet->value)->toBe('is_set')
        ->and(PropertyOperator::IsNotSet->value)->toBe('is_not_set')
        ->and(PropertyOperator::IsDateExact->value)->toBe('is_date_exact')
        ->and(PropertyOperator::IsDateBefore->value)->toBe('is_date_before')
        ->and(PropertyOperator::IsDateAfter->value)->toBe('is_date_after')
        ->and(PropertyOperator::Between->value)->toBe('between')
        ->and(PropertyOperator::NotBetween->value)->toBe('not_between')
        ->and(PropertyOperator::Minimum->value)->toBe('min')
        ->and(PropertyOperator::Maximum->value)->toBe('max')
        ->and(PropertyOperator::In->value)->toBe('in')
        ->and(PropertyOperator::NotIn->value)->toBe('not_in')
        ->and(PropertyOperator::IsCleanedPathExact->value)->toBe('is_cleaned_path_exact');
});

test('property operator correctly implements jsonSerialize', function () {
    expect(PropertyOperator::Exact->jsonSerialize())->toBe('exact')
        ->and(PropertyOperator::GreaterThan->jsonSerialize())->toBe('gt')
        ->and(PropertyOperator::IsSet->jsonSerialize())->toBe('is_set');
    
    // Test with json_encode
    expect(json_encode(PropertyOperator::Exact))->toBe('"exact"')
        ->and(json_encode(PropertyOperator::GreaterThan))->toBe('"gt"')
        ->and(json_encode(PropertyOperator::IsSet))->toBe('"is_set"');
}); 