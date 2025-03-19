<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node;

class EventsNode extends EntityNode
{

    protected EntityNodeKindEnum $kind = EntityNodeKindEnum::EventsNode;

    public function __construct(
        private readonly string $event,
        MathEnum                $math,
        string                  $name,
        ?string                 $customName
    )
    {
        $this->math = $math;
        $this->name = $name;
        $this->customName = $customName;

    }

    public static function make(?string $event, MathEnum $math, ?string $name, ?string $customName = null): self
    {
        return new self(
            $event,
            $math,
            $name,
            $customName
        );
    }


    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function jsonSerialize(): array
    {
        $payload = [
            'event' => $this->event,
            'kind' => $this->kind->value,
            'math' => $this->math->value,
            'name' => $this->name,
        ];

        if ($this->customName) {
            $payload['custom_name'] = $this->customName;
        }

        return $payload;
    }
}