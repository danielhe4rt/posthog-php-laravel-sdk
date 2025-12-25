<?php

namespace DanielHe4rt\PostHog\Query\Filters\Retention\Enums;

enum RetentionPeriodEnum: string
{
    case Hour = 'Hour';
    case Day = 'Day';
    case Week = 'Week';
    case Month = 'Month';
}
