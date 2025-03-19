<?php

namespace DanielHe4rt\PostHog\Query\Filters\Breakdown;

enum BreakdownTypeEnum: string
{
    case Event = 'event';
    case Person = 'person';
    case Session = 'session';
    case Group = 'group';
    case HogQL = 'hogql';
} 