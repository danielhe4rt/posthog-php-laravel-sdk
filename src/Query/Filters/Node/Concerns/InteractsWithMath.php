<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Node\MathEnum;


trait InteractsWithMath
{

    protected MathEnum $math = MathEnum::Total;

    /** @param string|null $mathProperty The property to use for property-based math functions */
    protected ?string $mathProperty = null;

    /** @param string|null $mathGroupTypeIndex The group type index for group-based math functions */
    protected ?string $mathGroupTypeIndex = null;

    /** @param string|null $hogql The HogQL expression for HogQL math */
    protected ?string $mathHogql = null;

    /**
     * Set the math property for property-based calculations
     */

    public function setMathType(MathEnum $mathType): static
    {
        $this->math = $mathType;

        return $this;
    }

    public function setMathProperty(string $property): self
    {
        $this->mathProperty = $property;
        return $this;
    }

    /**
     * Set the math group type index for group-based calculations
     */
    public function setMathGroupTypeIndex(string $index): self
    {
        $this->mathGroupTypeIndex = $index;
        return $this;
    }

    /**
     * Set the HogQL expression for HogQL-based calculations
     */
    public function setHogQL(string $hogql): self
    {
        $this->mathHogql = $hogql;
        return $this;
    }


    /**
     * Get the math function
     */
    public function getMath(): MathEnum
    {
        return $this->math;
    }

}