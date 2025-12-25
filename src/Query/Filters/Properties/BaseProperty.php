<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties;

use DanielHe4rt\PostHog\Query\Filters\Properties\Contracts\PropertyFilterContract;
use JsonSerializable;

abstract class BaseProperty implements PropertyFilterContract, JsonSerializable
{
    protected string $key;

    protected mixed $value = null;

    protected ?string $label;

    protected ?PropertyFilterKind $type;
}