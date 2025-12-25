<?php

namespace DanielHe4rt\PostHog\Query\Filters\Properties;

enum PropertyFilterKind: string implements \JsonSerializable
{
    case Meta = 'meta';
    case Event = 'event';
    case Person = 'person';
    case Element = 'element';
    case Feature = 'feature';
    case Session = 'session';
    case Cohort = 'cohort';
    case Recording = 'recording';
    case LogEntry = 'log_entry';
    case Group = 'group';
    case HogQL = 'hogql';
    case DataWarehouse = 'data_warehouse';
    case DataWarehousePersonProperty = 'data_warehouse_person_property';

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}