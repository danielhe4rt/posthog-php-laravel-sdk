<?php

namespace DanielHe4rt\PostHog\Query\Filters\Retention;

use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionPeriodEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionReferenceEnum;
use DanielHe4rt\PostHog\Query\Filters\Retention\Enums\RetentionTypeEnum;
use JsonSerializable;

class RetentionFilter implements JsonSerializable
{

    public function __construct(
        private ?RetentionTypeEnum      $retentionType = null,
        private ?RetentionReferenceEnum $retentionReference = null,
        private ?int                    $totalIntervals = 8,
        private ?string                 $returningEntity = null,
        private ?string                 $targetEntity = null,
        private ?RetentionPeriodEnum    $period = RetentionPeriodEnum::Day,
        private ?bool                   $cumulative = false,
    )
    {

    }

    // Getters and setters for each property
    public static function make(): self
    {
        return new self();
    }

    public static function hourly(): self
    {
        return new self(period: RetentionPeriodEnum::Hour);
    }

    public static function weekly(): self
    {
        return new self(period: RetentionPeriodEnum::Week);
    }

    public static function monthly(): self
    {
        return new self(period: RetentionPeriodEnum::Month);
    }

    public function getRetentionType(): ?RetentionTypeEnum
    {
        return $this->retentionType;
    }

    public function setRetentionType(?RetentionTypeEnum $retentionType): static
    {
        $this->retentionType = $retentionType;

        return $this;
    }

    public function getRetentionReference(): ?RetentionReferenceEnum
    {
        return $this->retentionReference;
    }

    public function setRetentionReference(?RetentionReferenceEnum $retentionReference): static
    {
        $this->retentionReference = $retentionReference;

        return $this;
    }

    public function getTotalIntervals(): ?int
    {
        return $this->totalIntervals;
    }

    public function setTotalIntervals(?int $totalIntervals): static
    {
        $this->totalIntervals = $totalIntervals;

        return $this;
    }

    public function getReturningEntity(): ?string
    {
        return $this->returningEntity;
    }

    public function setReturningEntity(?string $returningEntity): static
    {
        $this->returningEntity = $returningEntity;

        return $this;
    }

    public function getTargetEntity(): ?string
    {
        return $this->targetEntity;
    }

    public function setTargetEntity(?string $targetEntity): static
    {
        $this->targetEntity = $targetEntity;

        return $this;
    }

    public function getPeriod(): ?RetentionPeriodEnum
    {
        return $this->period;
    }

    public function setPeriod(?RetentionPeriodEnum $period): static
    {
        $this->period = $period;

        return $this;
    }

    public function getCumulative(): ?bool
    {
        return $this->cumulative;
    }

    public function setCumulative(?bool $cumulative): static
    {
        $this->cumulative = $cumulative;

        return $this;
    }

    public function jsonSerialize(): array
    {
        $payload = [];

        if ($this->retentionType) {
            $payload['retentionType'] = $this->retentionType->value;
        }

        if ($this->retentionReference) {
            $payload['retentionReference'] = $this->retentionReference->value;
        }

        if ($this->totalIntervals) {
            $payload['totalIntervals'] = $this->totalIntervals;
        }

        if ($this->returningEntity) {
            $payload['returningEntity'] = $this->returningEntity;
        }

        if ($this->targetEntity) {
            $payload['targetEntity'] = $this->targetEntity;
        }

        if ($this->period) {
            $payload['period'] = $this->period->value;
        }

        if ($this->cumulative) {
            $payload['cumulative'] = $this->cumulative;
        }

        return $payload;

    }
}