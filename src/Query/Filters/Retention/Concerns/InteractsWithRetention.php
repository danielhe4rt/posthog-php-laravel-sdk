<?php

namespace DanielHe4rt\PostHog\Query\Filters\Retention\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Retention\RetentionFilter;

trait InteractsWithRetention
{
    protected RetentionFilter $retention;


    public function setRetention(RetentionFilter $retention): static
    {
        $this->retention = $retention;

        return $this;
    }

    private function buildRetention(array &$filters): void
    {
        $filters['retentionFilter'] = $this->retention->jsonSerialize();
    }
}