<?php

namespace DanielHe4rt\PostHog\Requests\BatchExports;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * batch_exports_backfills_cancel_create
 *
 * Cancel a batch export backfill.
 */
class BatchExportsBackfillsCancelCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/batch_exports/{$this->batchExportId}/backfills/{$this->id}/cancel";
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export backfill.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $batchExportId,
		protected string $id,
		protected string $projectId,
	) {
	}
}
