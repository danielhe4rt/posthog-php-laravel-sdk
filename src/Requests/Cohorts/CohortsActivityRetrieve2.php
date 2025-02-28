<?php

namespace DanielHe4rt\PostHog\Requests\Cohorts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * cohorts_activity_retrieve_2
 */
class CohortsActivityRetrieve2 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/cohorts/{$this->id}/activity";
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
