<?php

namespace DanielHe4rt\PostHog\Query\Filters\ConversionGoal\Concern;

use DanielHe4rt\PostHog\Query\Filters\ConversionGoal\Contracts\ConversionGoalContract;

trait InteractsWithConversionGoal
{
    protected ?ConversionGoalContract $conversionGoal = null;

    public function setConversionGoal(ConversionGoalContract $conversionGoal): static
    {
        $this->conversionGoal = $conversionGoal;

        return $this;
    }

    public function getConversionGoal(): ?ConversionGoalContract
    {
        return $this->conversionGoal;
    }

    private function buildConversionGoal(array &$payload): void
    {
        if ($this->conversionGoal !== null) {
            $payload['conversionGoal'] = $this->conversionGoal->jsonSerialize();
        }
    }
}