<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_is_generating_demo_data_retrieve
 *
 * Projects for the current organization.
 */
class EnvironmentsIsGeneratingDemoDataRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/environments/{$this->id}/is_generating_demo_data";
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
