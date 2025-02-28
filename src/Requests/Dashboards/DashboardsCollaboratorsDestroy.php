<?php

namespace DanielHe4rt\PostHog\Requests\Dashboards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * dashboards_collaborators_destroy
 */
class DashboardsCollaboratorsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/dashboards/{$this->dashboardId}/collaborators/{$this->userUuid}";
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $userUuid
	 */
	public function __construct(
		protected int $dashboardId,
		protected string $projectId,
		protected string $userUuid,
	) {
	}
}
