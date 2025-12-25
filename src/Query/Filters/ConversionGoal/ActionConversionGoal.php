<?php

namespace DanielHe4rt\PostHog\Query\Filters\ConversionGoal;

use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\Contracts\ConversionGoalContract;

readonly class ActionConversionGoal implements ConversionGoalContract
{
    public function __construct(
        private int $actionId,
    )
    {

    }

    public static function make(int $actionId): self
    {
        return new self($actionId);
    }

    public function jsonSerialize(): array
    {
        return [
            'actionId' => $this->actionId,
        ];
    }
}