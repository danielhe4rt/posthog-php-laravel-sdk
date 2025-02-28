<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsDestroy;
use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsPartialUpdate;
use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsRetrieve2;
use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsSeenTogetherRetrieve;
use DanielHe4rt\PostHog\Requests\PropertyDefinitions\PropertyDefinitionsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class PropertyDefinitions extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $eventNames If sent, response value will have `is_seen_on_filtered_events` populated. JSON-encoded
	 * @param string $excludedProperties JSON-encoded list of excluded properties
	 * @param bool $filterByEventNames Whether to return only properties for events in `event_names`
	 * @param int $groupTypeIndex What group type is the property for. Only should be set if `type=group`
	 * @param bool $isFeatureFlag Whether to return only (or excluding) feature flag properties
	 * @param bool $isNumerical Whether to return only (or excluding) numerical property definitions
	 * @param string $properties Comma-separated list of properties to filter
	 * @param string $search Searches properties by name
	 * @param string $type What property definitions to return
	 *
	 * * `event` - event
	 * * `person` - person
	 * * `group` - group
	 * * `session` - session
	 */
	public function propertyDefinitionsRetrieve(
		string $projectId,
		?string $eventNames,
		?string $excludedProperties,
		?bool $filterByEventNames,
		?int $groupTypeIndex,
		?bool $isFeatureFlag,
		?bool $isNumerical,
		?string $properties,
		?string $search,
		?string $type,
	): Response
	{
		return $this->connector->send(new PropertyDefinitionsRetrieve($projectId, $eventNames, $excludedProperties, $filterByEventNames, $groupTypeIndex, $isFeatureFlag, $isNumerical, $properties, $search, $type));
	}


	/**
	 * @param string $id A UUID string identifying this property definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function propertyDefinitionsRetrieve2(string $id, string $projectId): Response
	{
		return $this->connector->send(new PropertyDefinitionsRetrieve2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this property definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function propertyDefinitionsUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new PropertyDefinitionsUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this property definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function propertyDefinitionsDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new PropertyDefinitionsDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this property definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function propertyDefinitionsPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new PropertyDefinitionsPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function propertyDefinitionsSeenTogetherRetrieve(string $projectId): Response
	{
		return $this->connector->send(new PropertyDefinitionsSeenTogetherRetrieve($projectId));
	}
}
