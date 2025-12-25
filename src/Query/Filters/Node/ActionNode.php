<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node;

class ActionNode extends EntityNode
{
    private ?int $actionId = null;


    /**
     * Get the action ID
     */
    public function getActionId(): ?int
    {
        return $this->actionId;
    }

    public function jsonSerialize(): array
    {
        // TODO: Implement jsonSerialize() method.
        return [];
    }
}