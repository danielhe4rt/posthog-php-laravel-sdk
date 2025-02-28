<?php

namespace DanielHe4rt\PostHog\Requests\Dashboards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * dashboards_retrieve
 *
 * Adds an "access_controls" action to the viewset that handles access control for the given
 * resource
 *
 * Why a mixin? We want to easily add this to any existing resource, including providing easy
 * helpers for adding access control info such
 * as the current users access level to any response.
 */
class DashboardsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/dashboards/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
