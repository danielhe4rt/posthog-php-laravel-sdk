<?php

namespace DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * experiment_saved_metrics_partial_update
 */
class ExperimentSavedMetricsPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/experiment_saved_metrics/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this experiment saved metric.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
