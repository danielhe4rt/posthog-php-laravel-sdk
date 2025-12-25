<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties\Filters;

use DanielHe4rt\PostHog\Query\Filters\Properties\BaseProperty;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyFilterKind;
use DanielHe4rt\PostHog\Query\Filters\Properties\PropertyOperator;

class SessionPropertyFilter extends BaseProperty
{
    private PropertyOperator $operator;

    protected ?PropertyFilterKind $type = PropertyFilterKind::Session;

    public function __construct(
        public string    $key,
        PropertyOperator $operator,
        public mixed     $value = null,
        public ?string   $label = null,
    )
    {
        $this->operator = $operator;
    }

    public function jsonSerialize(): array
    {
        $payload = [];

        if ($this->key) {
            $payload['key'] = $this->key;
        }

        $payload['operator'] = $this->operator->value;


        if ($this->value) {
            $payload['value'] = $this->value;
        }

        if ($this->label) {
            $payload['label'] = $this->label;
        }


        return $payload;

    }

    public static function make(string $key, PropertyOperator $operator, mixed $value = null, ?string $label = null): static
    {
        return new static($key, $operator, $value, $label );
    }
}