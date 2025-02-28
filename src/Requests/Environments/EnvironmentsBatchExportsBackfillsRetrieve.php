<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_batch_exports_backfills_retrieve
 *
 * ViewSet for BatchExportBackfill models.
 *
 * Allows creating and reading backfills, but not updating or
 * deleting them.
 */
class EnvironmentsBatchExportsBackfillsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/batch_exports/{$this->batchExportId}/backfills/{$this->id}";
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
