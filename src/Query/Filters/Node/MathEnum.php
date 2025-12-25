<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node;

enum MathEnum: string
{
    // Count-based calculations
    case Total = 'total';
    case DAU = 'dau'; // Daily Active Users
    case WAU = 'wau'; // Weekly Active Users 
    case MAU = 'mau'; // Monthly Active Users
    case UniquesCount = 'unique_group';
    case UniqueSession = 'unique_session';
    case CountPerActor = 'count_per_actor';
    
    // Property-based calculations
    case Sum = 'sum';
    case Avg = 'avg';
    case Min = 'min';
    case Max = 'max';
    case Median = 'median';
    case P90 = 'p90';
    case P95 = 'p95';
    case P99 = 'p99';
    
    // HogQL calculations
    case HogQL = 'hogql';
    
    // Group aggregations
    case GroupAvg = 'avg_count_per_actor';
    case GroupMin = 'min_count_per_actor';
    case GroupMax = 'max_count_per_actor';
    case GroupMedian = 'median_count_per_actor';
    case GroupP90 = 'p90_count_per_actor';
    case GroupP95 = 'p95_count_per_actor';
    case GroupP99 = 'p99_count_per_actor';
} 