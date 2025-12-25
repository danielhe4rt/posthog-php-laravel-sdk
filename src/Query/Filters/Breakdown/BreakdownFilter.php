<?php

namespace DanielHe4rt\PostHog\Query\Filters\Breakdown;

use JsonSerializable;

/**
 * Data Transfer Object for a breakdown configuration in PostHog queries
 */
class BreakdownFilter implements JsonSerializable
{
    /**
     * @param BreakdownTypeEnum|null $type The type of breakdown
     * @param string|int|array $property The property to breakdown by
     * @param bool $normalizeUrl Whether to normalize URLs
     * @param int|null $groupTypeIndex The group type index for group breakdowns
     * @param int|null $histogramBinCount The number of bins for histogram breakdowns
     * @param bool|null $hideOtherAggregation Whether to hide the "other" bucket
     */
    public function __construct(
        private ?BreakdownTypeEnum $type = BreakdownTypeEnum::Event,
        private string|int|array $property = '',
        private bool $normalizeUrl = false,
        private ?int $groupTypeIndex = null,
        private ?int $histogramBinCount = null,
        private ?bool $hideOtherAggregation = null
    ) {
    }
    
    /**
     * Create a new breakdown for an event property
     */
    public static function forEventProperty(string $property): self
    {
        return new self(
            type: BreakdownTypeEnum::Event,
            property: $property
        );
    }
    
    /**
     * Create a new breakdown for a person property
     */
    public static function forPersonProperty(string $property): self
    {
        return new self(
            type: BreakdownTypeEnum::Person,
            property: $property
        );
    }
    
    /**
     * Create a new breakdown for a session property
     */
    public static function forSessionProperty(string $property): self
    {
        return new self(
            type: BreakdownTypeEnum::Session,
            property: $property
        );
    }
    
    /**
     * Create a new breakdown for a group property
     */
    public static function forGroupProperty(string $property, int $groupTypeIndex): self
    {
        return new self(
            type: BreakdownTypeEnum::Group,
            property: $property,
            groupTypeIndex: $groupTypeIndex
        );
    }
    
    /**
     * Create a new breakdown for a HogQL expression
     */
    public static function forHogQL(string $expression): self
    {
        return new self(
            type: BreakdownTypeEnum::HogQL,
            property: $expression
        );
    }
    
    /**
     * Set whether to normalize URLs
     */
    public function setNormalizeUrl(bool $normalize): self
    {
        $this->normalizeUrl = $normalize;
        return $this;
    }
    
    /**
     * Set the histogram bin count
     */
    public function setHistogramBinCount(int $count): self
    {
        $this->histogramBinCount = $count;
        return $this;
    }
    
    /**
     * Set whether to hide the "other" aggregation
     */
    public function setHideOtherAggregation(bool $hide): self
    {
        $this->hideOtherAggregation = $hide;
        return $this;
    }
    
    /**
     * Convert the DTO to an array for JSON serialization
     */
    public function jsonSerialize(): array
    {
        $data = [
            'breakdown_type' => $this->type->value,
            'breakdown' => $this->property,
        ];
        
        if ($this->normalizeUrl) {
            $data['breakdown_normalize_url'] = true;
        }
        
        if ($this->groupTypeIndex !== null) {
            $data['breakdown_group_type_index'] = $this->groupTypeIndex;
        }
        
        if ($this->histogramBinCount !== null) {
            $data['breakdown_histogram_bin_count'] = $this->histogramBinCount;
        }
        
        if ($this->hideOtherAggregation !== null) {
            $data['breakdown_hide_other_aggregation'] = $this->hideOtherAggregation;
        }
        
        return $data;
    }
    
    /**
     * Get the breakdown type
     */
    public function getType(): BreakdownTypeEnum
    {
        return $this->type;
    }
    
    /**
     * Get the property
     */
    public function getProperty(): string|int|array
    {
        return $this->property;
    }
} 