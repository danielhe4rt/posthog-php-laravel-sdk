<?php

namespace DanielHe4rt\PostHog\Query\Filters\DateRange;

readonly class DateRangeFilter
{
    public function __construct(
        public string  $from,
        public ?string $to = null,
    )
    {

    }

    public static function from(string $from, ?string $to = null): static
    {
        return new static($from, $to);
    }


}