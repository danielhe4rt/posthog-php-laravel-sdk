<?php

namespace DanielHe4rt\PostHog\Requests\Experiments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * experiments_update
 */
class ExperimentsUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/experiments/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
