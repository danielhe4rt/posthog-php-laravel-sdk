<?php

namespace DanielHe4rt\PostHog\Requests\ExperimentHoldouts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * experiment_holdouts_retrieve
 */
class ExperimentHoldoutsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/experiment_holdouts/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this experiment holdout.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
