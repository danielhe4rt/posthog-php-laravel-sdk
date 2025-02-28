<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * environments_batch_exports_partial_update
 */
class EnvironmentsBatchExportsPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/batch_exports/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
