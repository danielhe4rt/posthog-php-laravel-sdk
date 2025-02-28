<?php

namespace DanielHe4rt\PostHog\Requests\Cohorts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * cohorts_duplicate_as_static_cohort_retrieve
 */
class CohortsDuplicateAsStaticCohortRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/cohorts/{$this->id}/duplicate_as_static_cohort";
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
