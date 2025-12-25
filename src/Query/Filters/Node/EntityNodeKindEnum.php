<?php

namespace DanielHe4rt\PostHog\Query\Filters\Node;

enum EntityNodeKindEnum: string
{
    case EventsNode = 'EventsNode';
    case ActionsNode = 'ActionsNode';

    case DataWarehouseNode = 'DataWarehouseNode';
} 