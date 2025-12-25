<?php

namespace DanielHe4rt\PostHog\Query;

use JsonSerializable;

/**
 * Interface for all PostHog query builders
 */
interface QueryBuilderInterface extends JsonSerializable
{
    /**
     * Build the query array
     *
     * @return array
     */
    public function build(): array;

    /**
     * Get the query type
     *
     * @return string
     */
    public function getQueryType(): QueryKindEnum;
} 