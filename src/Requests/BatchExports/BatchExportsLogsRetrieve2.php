<?php

namespace DanielHe4rt\PostHog\Requests\BatchExports;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * batch_exports_logs_retrieve_2
 */
class BatchExportsLogsRetrieve2 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/batch_exports/{$this->id}/logs";
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
