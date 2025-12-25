<?php

namespace DanielHe4rt\PostHog\Query\Filters\DateRange\Concerns;

use DanielHe4rt\PostHog\Query\Filters\DateRange\DateRangeFilter;

trait InteractsWithDateRange
{
    protected ?DateRangeFilter $dateRange = null;

    /**
     * Set the date range
     *
     */
    public function setDateRange(DateRangeFilter $dateRange): self
    {
        $this->dateRange = $dateRange;

        return $this;
    }


    /**
     * Get the start date
     */
    public function getDateRange(): ?DateRangeFilter
    {
        return $this->dateRange;
    }


    private function buildDateRange(array &$payload): void
    {
        if ($this->dateRange !== null) {
            $payload['dateRange'] = [
                'date_from' => $this->dateRange->from,
                'date_to' => $this->dateRange->to,
            ];
        }
    }
}