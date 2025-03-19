<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties\Filters;

use DanielHe4rt\PostHog\Query\Filters\Properties\BaseProperty;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyFilterKind;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;

class EventPropertyFilter extends BaseProperty
{

    protected ?PropertyFilterKind $type = PropertyFilterKind::Event;

    public function __construct(
        protected string           $key,
        protected PropertyOperator $operator,
        protected mixed            $value = null,
        ?string                    $label = null
    )
    {
    }

    public static function make(
        string           $key,
        PropertyOperator $operator = PropertyOperator::Exact,
        mixed            $value = null,
        ?string          $label = null
    ): static
    {
        return new static($key, $operator, $value, $label);
    }

    public function jsonSerialize(): array
    {
        $payload = [];

        if ($this->type) {
            $payload['type'] = $this->type->value;
        }

        if ($this->key) {
            $payload['key'] = $this->key;
        }

        if ($this->operator) {
            $payload['operator'] = $this->operator->value;
        }

        if ($this->value) {
            $payload['value'] = $this->value;
        }

        if (isset($this->label)) {
            $payload['label'] = $this->label;
        }


        return $payload;
    }
}