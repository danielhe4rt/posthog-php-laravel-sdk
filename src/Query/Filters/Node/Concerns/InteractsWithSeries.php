<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Node\Contracts\EntityNodeContract;
use InvalidArgumentException;


trait InteractsWithSeries
{
    private array $series = [];

    /**
     * Set the series for the trends query.
     * Expects an array of QuerySeries instances.
     */

    public function addSeries(EntityNodeContract $series): static
    {
        $this->series[] = $series;
        return $this;
    }

    public function setSeries(array $series): static
    {
        foreach ($series as $item) {
            if (!$item instanceof EntityNodeContract) {
                throw new InvalidArgumentException('Each series must be an instance of QuerySeries.');
            }
        }
        $this->series = $series;
        return $this;
    }

    public function buildSeries(array &$payload): void
    {
        if (count($this->series) > 0) {
            $payload['series'] = array_map(static fn(EntityNodeContract $item) => $item->jsonSerialize(), $this->series);
        }
    }
}