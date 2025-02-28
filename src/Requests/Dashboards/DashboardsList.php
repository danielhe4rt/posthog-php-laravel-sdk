<?php

namespace DanielHe4rt\PostHog\Requests\Dashboards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * dashboards_list
 *
 * Adds an "access_controls" action to the viewset that handles access control for the given
 * resource
 *
 * Why a mixin? We want to easily add this to any existing resource, including providing easy
 * helpers for adding access control info such
 * as the current users access level to any response.
 */
class DashboardsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/dashboards";
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
