<?php

use DanielHe4rt\PostHog\Query\Filters\Retention\RetentionFilter;
use DanielHe4rt\PostHog\Query\Filters\Retention\Concerns\InteractsWithRetention;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionTypeEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionPeriodEnum;

// Create a test class that uses the trait
class TestClassWithRetention
{
    use InteractsWithRetention;
    
    public function getRetention(): RetentionFilter
    {
        return $this->retention;
    }
    
    public function applyRetentionToFilters(): array
    {
        $filters = [];
        $this->buildRetention($filters);
        return $filters;
    }
}

test('can set retention filter', function () {
    $testClass = new TestClassWithRetention();
    $retentionFilter = RetentionFilter::make();
    
    $result = $testClass->setRetention($retentionFilter);
    
    expect($result)->toBeInstanceOf(TestClassWithRetention::class)
        ->and($testClass->getRetention())->toBe($retentionFilter);
});

test('buildRetention adds retention filter to filters array', function () {
    $testClass = new TestClassWithRetention();
    $retentionFilter = RetentionFilter::make()
        ->setRetentionType(RetentionTypeEnum::FIRST_TIME)
        ->setPeriod(RetentionPeriodEnum::Week)
        ->setTotalIntervals(10);
    
    $testClass->setRetention($retentionFilter);
    $filters = $testClass->applyRetentionToFilters();
    
    expect($filters)->toBeArray()
        ->and($filters)->toHaveKey('retentionFilter')
        ->and($filters['retentionFilter'])->toBeArray()
        ->and($filters['retentionFilter'])->toHaveKey('retentionType')
        ->and($filters['retentionFilter']['retentionType'])->toBe(RetentionTypeEnum::FIRST_TIME->value)
        ->and($filters['retentionFilter'])->toHaveKey('period')
        ->and($filters['retentionFilter']['period'])->toBe(RetentionPeriodEnum::Week->value)
        ->and($filters['retentionFilter'])->toHaveKey('totalIntervals')
        ->and($filters['retentionFilter']['totalIntervals'])->toBe(10);
}); 