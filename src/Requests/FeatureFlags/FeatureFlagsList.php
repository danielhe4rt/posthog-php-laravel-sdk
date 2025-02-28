<?php

namespace DanielHe4rt\PostHog\Requests\FeatureFlags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * feature_flags_list
 *
 * Create, read, update and delete feature flags. [See docs](https://posthog.com/docs/feature-flags)
 * for more information on feature flags.
 *
 * If you're looking to use feature flags on your application,
 * you can either use our JavaScript Library or our dedicated endpoint to check if feature flags are
 * enabled for a given user.
 */
class FeatureFlagsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/feature_flags";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $active
	 * @param null|string $createdById The User ID which initially created the feature flag.
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|string $search Search by feature flag key or name. Case insensitive.
	 * @param null|string $type
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $active = null,
		protected ?string $createdById = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $search = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'active' => $this->active,
			'created_by_id' => $this->createdById,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'search' => $this->search,
			'type' => $this->type,
		]);
	}
}
