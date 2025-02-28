<?php

namespace DanielHe4rt\PostHog\Requests\Insights;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * insights_retrieve
 *
 * Adds an "access_controls" action to the viewset that handles access control for the given
 * resource
 *
 * Why a mixin? We want to easily add this to any existing resource, including providing easy
 * helpers for adding access control info such
 * as the current users access level to any response.
 */
class InsightsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/insights/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 * @param null|int $fromDashboard
	 * Only if loading an insight in the context of a dashboard: The relevant dashboard's ID.
	 * When set, the specified dashboard's filters and date range override will be applied.
	 * @param null|string $refresh
	 * Whether to refresh the insight, how aggresively, and if sync or async:
	 * - `'force_cache'` - return cached data or a cache miss; always completes immediately as it never calculates
	 * - `'blocking'` - calculate synchronously (returning only when the query is done), UNLESS there are very fresh results in the cache
	 * - `'async'` - kick off background calculation (returning immediately with a query status), UNLESS there are very fresh results in the cache
	 * - `'lazy_async'` - kick off background calculation, UNLESS there are somewhat fresh results in the cache
	 * - `'force_blocking'` - calculate synchronously, even if fresh results are already cached
	 * - `'force_async'` - kick off background calculation, even if fresh results are already cached
	 * Background calculation can be tracked using the `query_status` response field.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
		protected ?string $format = null,
		protected ?int $fromDashboard = null,
		protected ?string $refresh = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format, 'from_dashboard' => $this->fromDashboard, 'refresh' => $this->refresh]);
	}
}
