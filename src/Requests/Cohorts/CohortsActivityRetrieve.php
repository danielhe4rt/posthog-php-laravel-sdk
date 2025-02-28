<?php

namespace DanielHe4rt\PostHog\Requests\Cohorts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * cohorts_activity_retrieve
 */
class CohortsActivityRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/cohorts/activity";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
