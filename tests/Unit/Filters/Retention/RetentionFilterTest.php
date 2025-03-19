<?php

use DanielHe4rt\PostHog\Query\Filters\Retention\RetentionFilter;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionPeriodEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionReferenceEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionTypeEnum;

test('can create a retention filter with default values', function () {
    $filter = new RetentionFilter();
    
    expect($filter->getRetentionType())->toBeNull()
        ->and($filter->getRetentionReference())->toBeNull()
        ->and($filter->getTotalIntervals())->toBe(8)
        ->and($filter->getReturningEntity())->toBeNull()
        ->and($filter->getTargetEntity())->toBeNull()
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Day)
        ->and($filter->getCumulative())->toBeFalse();
});

test('can create a retention filter using static make method', function () {
    $filter = RetentionFilter::make();
    
    expect($filter)->toBeInstanceOf(RetentionFilter::class)
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Day);
});

test('can create hourly retention filter', function () {
    $filter = RetentionFilter::hourly();
    
    expect($filter)->toBeInstanceOf(RetentionFilter::class)
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Hour);
});

test('can create weekly retention filter', function () {
    $filter = RetentionFilter::weekly();
    
    expect($filter)->toBeInstanceOf(RetentionFilter::class)
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Week);
});

test('can create monthly retention filter', function () {
    $filter = RetentionFilter::monthly();
    
    expect($filter)->toBeInstanceOf(RetentionFilter::class)
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Month);
});

test('can set and get retention type', function () {
    $filter = RetentionFilter::make();
    $filter->setRetentionType(RetentionTypeEnum::FIRST_TIME);
    
    expect($filter->getRetentionType())->toBe(RetentionTypeEnum::FIRST_TIME);
    
    $filter->setRetentionType(RetentionTypeEnum::RECURRING);
    expect($filter->getRetentionType())->toBe(RetentionTypeEnum::RECURRING);
});

test('can set and get retention reference', function () {
    $filter = RetentionFilter::make();
    $filter->setRetentionReference(RetentionReferenceEnum::Total);
    
    expect($filter->getRetentionReference())->toBe(RetentionReferenceEnum::Total);
    
    $filter->setRetentionReference(RetentionReferenceEnum::Previous);
    expect($filter->getRetentionReference())->toBe(RetentionReferenceEnum::Previous);
});

test('can set and get total intervals', function () {
    $filter = RetentionFilter::make();
    $filter->setTotalIntervals(12);
    
    expect($filter->getTotalIntervals())->toBe(12);
});

test('can set and get returning entity', function () {
    $filter = RetentionFilter::make();
    $filter->setReturningEntity('users');
    
    expect($filter->getReturningEntity())->toBe('users');
});

test('can set and get target entity', function () {
    $filter = RetentionFilter::make();
    $filter->setTargetEntity('page_views');
    
    expect($filter->getTargetEntity())->toBe('page_views');
});

test('can set and get period', function () {
    $filter = RetentionFilter::make();
    $filter->setPeriod(RetentionPeriodEnum::Week);
    
    expect($filter->getPeriod())->toBe(RetentionPeriodEnum::Week);
});

test('can set and get cumulative', function () {
    $filter = RetentionFilter::make();
    $filter->setCumulative(true);
    
    expect($filter->getCumulative())->toBeTrue();
    
    $filter->setCumulative(false);
    expect($filter->getCumulative())->toBeFalse();
});

test('jsonSerialize returns correct structure', function () {
    $filter = RetentionFilter::make()
        ->setRetentionType(RetentionTypeEnum::FIRST_TIME)
        ->setRetentionReference(RetentionReferenceEnum::Total)
        ->setTotalIntervals(10)
        ->setReturningEntity('users')
        ->setTargetEntity('page_views')
        ->setPeriod(RetentionPeriodEnum::Week)
        ->setCumulative(true);
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json['retentionType'])->toBe(RetentionTypeEnum::FIRST_TIME->value)
        ->and($json['retentionReference'])->toBe(RetentionReferenceEnum::Total->value)
        ->and($json['totalIntervals'])->toBe(10)
        ->and($json['returningEntity'])->toBe('users')
        ->and($json['targetEntity'])->toBe('page_views')
        ->and($json['period'])->toBe(RetentionPeriodEnum::Week->value)
        ->and($json['cumulative'])->toBeTrue();
});

test('jsonSerialize only includes non-null values', function () {
    $filter = RetentionFilter::make();
    
    $json = $filter->jsonSerialize();
    
    expect($json)->toBeArray()
        ->and($json)->not->toHaveKey('retentionType')
        ->and($json)->not->toHaveKey('retentionReference')
        ->and($json)->toHaveKey('totalIntervals')
        ->and($json)->not->toHaveKey('returningEntity')
        ->and($json)->not->toHaveKey('targetEntity')
        ->and($json)->toHaveKey('period')
        ->and($json)->not->toHaveKey('cumulative'); // false by default, but not included in JSON
});

test('method chaining works correctly for setters', function () {
    $filter = RetentionFilter::make()
        ->setRetentionType(RetentionTypeEnum::RECURRING)
        ->setRetentionReference(RetentionReferenceEnum::Previous)
        ->setTotalIntervals(15)
        ->setReturningEntity('sessions')
        ->setTargetEntity('purchases')
        ->setPeriod(RetentionPeriodEnum::Month)
        ->setCumulative(true);
    
    expect($filter->getRetentionType())->toBe(RetentionTypeEnum::RECURRING)
        ->and($filter->getRetentionReference())->toBe(RetentionReferenceEnum::Previous)
        ->and($filter->getTotalIntervals())->toBe(15)
        ->and($filter->getReturningEntity())->toBe('sessions')
        ->and($filter->getTargetEntity())->toBe('purchases')
        ->and($filter->getPeriod())->toBe(RetentionPeriodEnum::Month)
        ->and($filter->getCumulative())->toBeTrue();
}); 