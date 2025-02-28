<?php

namespace DanielHe4rt\PostHog\Requests\Experiments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * experiments_create_exposure_cohort_for_experiment_create
 */
class ExperimentsCreateExposureCohortForExperimentCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/experiments/{$this->id}/create_exposure_cohort_for_experiment";
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
