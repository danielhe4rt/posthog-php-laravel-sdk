<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties\Concerns;

use DanielHe4rt\PostHog\Query\Filters\Properties\BaseProperty;

trait InteractsWithProperties
{
    /**
     * The properties for filtering
     *
     * @var BaseProperty[]|null
     */
    protected ?array $properties = null;

    /**
     * Set the properties for filtering
     *
     * @params BaseProperty[] $properties The property filters array
     * @return $this
     */

    public function addProperty(BaseProperty $property): static
    {
        if ($this->properties === null) {
            $this->properties = [];
        }

        // Check if the property already exists in the array
        if (in_array($property, $this->properties, true)) {
            return $this;
        }

        $this->properties[] = $property;
        return $this;
    }

    public function setProperties(array $properties): static
    {
        if ($this->properties === null) {
            $this->properties = [];
        }

        foreach ($properties as $property) {
            if (!($property instanceof BaseProperty)) {
                throw new \InvalidArgumentException('All properties must be instances of BaseProperty');
            }
        }

        $this->properties = $properties;
        return $this;
    }


    /**
     * Get the current properties
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    private function buildProperties(array &$payload): void
    {
        if ($this->properties !== null) {
            $payload['properties'] = array_map(static fn(BaseProperty $item) => $item->jsonSerialize(), $this->properties);
        }
    }
} 