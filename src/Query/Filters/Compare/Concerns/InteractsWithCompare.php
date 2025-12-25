<?php

namespace DanielHe4rt\PostHog\Query\Filters\Compare\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Compare\CompareFilter;

trait InteractsWithCompare
{
    protected ?CompareFilter $compare = null;

    public function setCompare(CompareFilter $compare): static
    {
        $this->compare = $compare;
        return $this;
    }

    public function addCompareFilter(): static
    {
        $this->compare = new CompareFilter(true);
        return $this;
    }

    public function getCompare(): ?CompareFilter
    {
        return $this->compare;
    }

    private function buildCompare(array &$payload): void
    {
        if ($this->compare !== null) {
            $payload['compareFilter'] = $this->compare->jsonSerialize();
        }
    }
}