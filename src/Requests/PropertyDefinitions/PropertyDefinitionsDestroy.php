<?php

namespace DanielHe4rt\PostHog\Requests\PropertyDefinitions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * property_definitions_destroy
 */
class PropertyDefinitionsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/property_definitions/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this property definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
