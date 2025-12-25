<?php

namespace DanielHe4rt\PostHog\Query\Filters\ConversionGoal;

use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\Contracts\ConversionGoalContract;

class CustomEventConversionGoal implements ConversionGoalContract
{
    public function __construct(private string $eventName)
    {

    }

    public static function make(string $eventName): self
    {
        return new self($eventName);
    }

    public function jsonSerialize(): array
    {
        return [
            'customEventName' => $this->eventName,
        ];
    }
}