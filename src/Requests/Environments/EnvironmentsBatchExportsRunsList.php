<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_batch_exports_runs_list
 */
class EnvironmentsBatchExportsRunsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/batch_exports/{$this->batchExportId}/runs";
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $cursor The pagination cursor value.
	 * @param null|string $ordering Which field to use when ordering the results.
	 */
	public function __construct(
		protected string $batchExportId,
		protected string $projectId,
		protected ?string $cursor = null,
		protected ?string $ordering = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['cursor' => $this->cursor, 'ordering' => $this->ordering]);
	}
}
