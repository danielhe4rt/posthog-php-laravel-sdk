<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties;

enum PropertyOperator: string implements \JsonSerializable
{
    case Exact = 'exact';
    case IsNot = 'is_not';
    case IContains = 'icontains';
    case NotIContains = 'not_icontains';
    case Regex = 'regex';
    case NotRegex = 'not_regex';
    case GreaterThan = 'gt';
    case GreaterThanOrEqual = 'gte';
    case LessThan = 'lt';
    case LessThanOrEqual = 'lte';
    case IsSet = 'is_set';
    case IsNotSet = 'is_not_set';
    case IsDateExact = 'is_date_exact';
    case IsDateBefore = 'is_date_before';
    case IsDateAfter = 'is_date_after';
    case Between = 'between';
    case NotBetween = 'not_between';
    case Minimum = 'min';
    case Maximum = 'max';
    case In = 'in';
    case NotIn = 'not_in';
    case IsCleanedPathExact = 'is_cleaned_path_exact';

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}