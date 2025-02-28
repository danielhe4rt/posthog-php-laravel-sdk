<?php

namespace DanielHe4rt\PostHog\Requests\Exports;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * exports_list
 */
class ExportsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/exports";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 */
	public function __construct(
		protected string $projectId,
		protected ?int $limit = null,
		protected ?int $offset = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit, 'offset' => $this->offset]);
	}
}
