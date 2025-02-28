<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_dashboards_sharing_list
 */
class EnvironmentsDashboardsSharingList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/dashboards/{$this->dashboardId}/sharing";
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $dashboardId,
		protected string $projectId,
	) {
	}
}
