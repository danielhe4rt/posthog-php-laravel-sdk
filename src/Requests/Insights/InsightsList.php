<?php

namespace DanielHe4rt\PostHog\Requests\Insights;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * insights_list
 *
 * Adds an "access_controls" action to the viewset that handles access control for the given
 * resource
 *
 * Why a mixin? We want to easily add this to any existing resource, including providing easy
 * helpers for adding access control info such
 * as the current users access level to any response.
 */
class InsightsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/insights";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|int $createdBy
	 * @param null|string $format
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|string $refresh
	 * Whether to refresh the retrieved insights, how aggresively, and if sync or async:
	 * - `'force_cache'` - return cached data or a cache miss; always completes immediately as it never calculates
	 * - `'blocking'` - calculate synchronously (returning only when the query is done), UNLESS there are very fresh results in the cache
	 * - `'async'` - kick off background calculation (returning immediately with a query status), UNLESS there are very fresh results in the cache
	 * - `'lazy_async'` - kick off background calculation, UNLESS there are somewhat fresh results in the cache
	 * - `'force_blocking'` - calculate synchronously, even if fresh results are already cached
	 * - `'force_async'` - kick off background calculation, even if fresh results are already cached
	 * Background calculation can be tracked using the `query_status` response field.
	 * @param null|string $shortId
	 */
	public function __construct(
		protected string $projectId,
		protected ?int $createdBy = null,
		protected ?string $format = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $refresh = null,
		protected ?string $shortId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'created_by' => $this->createdBy,
			'format' => $this->format,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'refresh' => $this->refresh,
			'short_id' => $this->shortId,
		]);
	}
}
