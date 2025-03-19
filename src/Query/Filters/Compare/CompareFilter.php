<?php

namespace DanielHe4rt\PostHog\Query\Filters\Compare;

/**
 * @property bool $compare Whether to compare the current date range to a previous date range.
 * @property ?string $compareTo The date range to compare to. The value is a relative date. Examples of relative dates are: `-1y` for 1 year ago, `-14m` for 14 months ago, `-100w` for 100 weeks ago, `-14d` for 14 days ago, `-30h` for 30 hours ago.
 */

// TODO: Ask about what is the default value if $compareTo is null
class CompareFilter implements \JsonSerializable
{
    public function __construct(
        protected bool    $compare = false,
        protected ?string $compareTo = null,
    )
    {
    }

    public static function make(bool $compare, ?string $compareTo): self
    {
        return new self($compare, $compareTo);
    }

    public function jsonSerialize(): array
    {
        $payload = [
            'compare' => $this->compare,
        ];

        if ($this->compareTo) {
            $payload['compare_to'] = $this->compareTo;
        }

        return $payload;
    }
}