<?php

namespace DanielHe4rt\PostHog\Query\Filters\Retention\Enums;

enum RetentionTypeEnum: string
{
    case FIRST_TIME = 'retention_first_time';
    case RECURRING = 'retention_recurring';
}
