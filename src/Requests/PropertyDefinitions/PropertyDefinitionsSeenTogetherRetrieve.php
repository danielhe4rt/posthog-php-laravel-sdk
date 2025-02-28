<?php

namespace DanielHe4rt\PostHog\Requests\PropertyDefinitions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * property_definitions_seen_together_retrieve
 *
 * Allows a caller to provide a list of event names and a single property name
 * Returns a map of the
 * event names to a boolean representing whether that property has ever been seen with that event_name
 */
class PropertyDefinitionsSeenTogetherRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/property_definitions/seen_together";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
