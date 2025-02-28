<?php

namespace DanielHe4rt\PostHog\Requests\EventDefinitions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * event_definitions_retrieve
 */
class EventDefinitionsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/event_definitions";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
