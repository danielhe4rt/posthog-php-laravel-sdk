<?php

namespace DanielHe4rt\PostHog\Query\Filters\Interval\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Interval\QueryIntervalEnum;

trait InteractsWithInterval
{
    protected ?QueryIntervalEnum $interval = null;

    /**
     * Set the interval for the query.
     *
     * @param QueryIntervalEnum $interval The interval value
     * @return $this
     */
    public function setInterval(QueryIntervalEnum $interval): static
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * Get the current interval
     *
     * @return string|null
     */
    public function getInterval(): QueryIntervalEnum
    {
        return $this->interval;
    }

    private function buildInterval(array &$payload): void
    {
        if ($this->interval !== null) {
            $payload['interval'] = $this->interval->value;
        }
    }
}
