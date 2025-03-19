<?php

namespace DanielHe4rt\PostHog\Query\Filters\Interval;

enum QueryIntervalEnum: string
{
    case Minute = 'minute';
    case Hour = 'hour';
    case Day = 'day';
    case Week = 'week';
    case Month = 'month';
}

