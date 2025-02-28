<?php

namespace DanielHe4rt\PostHog\Requests\PropertyDefinitions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * property_definitions_retrieve
 */
class PropertyDefinitionsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/property_definitions";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $eventNames If sent, response value will have `is_seen_on_filtered_events` populated. JSON-encoded
	 * @param null|string $excludedProperties JSON-encoded list of excluded properties
	 * @param null|bool $filterByEventNames Whether to return only properties for events in `event_names`
	 * @param null|int $groupTypeIndex What group type is the property for. Only should be set if `type=group`
	 * @param null|bool $isFeatureFlag Whether to return only (or excluding) feature flag properties
	 * @param null|bool $isNumerical Whether to return only (or excluding) numerical property definitions
	 * @param null|string $properties Comma-separated list of properties to filter
	 * @param null|string $search Searches properties by name
	 * @param null|string $type What property definitions to return
	 *
	 * * `event` - event
	 * * `person` - person
	 * * `group` - group
	 * * `session` - session
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $eventNames = null,
		protected ?string $excludedProperties = null,
		protected ?bool $filterByEventNames = null,
		protected ?int $groupTypeIndex = null,
		protected ?bool $isFeatureFlag = null,
		protected ?bool $isNumerical = null,
		protected ?string $properties = null,
		protected ?string $search = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'event_names' => $this->eventNames,
			'excluded_properties' => $this->excludedProperties,
			'filter_by_event_names' => $this->filterByEventNames,
			'group_type_index' => $this->groupTypeIndex,
			'is_feature_flag' => $this->isFeatureFlag,
			'is_numerical' => $this->isNumerical,
			'properties' => $this->properties,
			'search' => $this->search,
			'type' => $this->type,
		]);
	}
}
