<?php

namespace DanielHe4rt\PostHog\Query\Filters\Retention\Enums;

enum RetentionReferenceEnum: string
{
    case Total = 'total';
    case Previous = 'previous';
}
