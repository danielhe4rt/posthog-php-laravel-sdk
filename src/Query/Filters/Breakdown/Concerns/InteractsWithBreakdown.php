<?php

namespace DanielHe4rt\PostHog\Query\Filters\Breakdown\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Breakdown\BreakdownFilter;

trait InteractsWithBreakdown
{
    protected ?BreakdownFilter $breakdownFilter = null;


    /**
     * Set the breakdown filter
     *
     * @param BreakdownFilter $breakdown The breakdown configuration
     * @return $this
     */
    public function setBreakdownFilter(BreakdownFilter $breakdown): static
    {
        $this->breakdownFilter = $breakdown;
        return $this;
    }

    /**
     * Get the breakdown filter
     *
     * @return BreakdownFilter|null
     */
    public function getBreakdownFilter(): ?BreakdownFilter
    {
        return $this->breakdownFilter;
    }

    private function buildBreakdown(array &$payload): void
    {
        if ($this->breakdownFilter) {
            $payload['breakdownFilter'] = $this->breakdownFilter;
        }
    }

}
