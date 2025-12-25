<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node;

use DanielHe4rt\PostHog\Query\Filters\Node\Concerns\InteractsWithMath;
use DanielHe4rt\PostHog\Query\Filters\Node\Contracts\EntityNodeContract;
use JsonSerializable;

/**
 * Data Transfer Object for a series item in PostHog queries
 */
abstract class EntityNode implements EntityNodeContract, JsonSerializable
{
    use InteractsWithMath;

    protected EntityNodeKindEnum $kind;

    protected ?string $name = null;
    protected ?string $customName = null;


    /**
     * Get the node kind
     */
    public function getKind(): EntityNodeKindEnum
    {
        return $this->kind;
    }


    /**
     * Get the display name
     */
    public function getName(): ?string
    {
        return $this->name;
    }


}