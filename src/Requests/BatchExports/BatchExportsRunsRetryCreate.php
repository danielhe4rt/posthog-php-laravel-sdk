<?php

namespace DanielHe4rt\PostHog\Requests\BatchExports;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * batch_exports_runs_retry_create
 *
 * Retry a batch export run.
 *
 * We use the same underlying mechanism as when backfilling a batch export,
 * as retrying
 * a run is the same as backfilling one run.
 */
class BatchExportsRunsRetryCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/batch_exports/{$this->batchExportId}/runs/{$this->id}/retry";
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $batchExportId,
		protected string $id,
		protected string $projectId,
	) {
	}
}
