<?php

namespace DanielHe4rt\PostHog\Requests\EventDefinitions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * event_definitions_destroy
 */
class EventDefinitionsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/event_definitions/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this event definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
