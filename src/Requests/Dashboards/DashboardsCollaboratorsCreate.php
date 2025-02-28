<?php

namespace DanielHe4rt\PostHog\Requests\Dashboards;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * dashboards_collaborators_create
 */
class DashboardsCollaboratorsCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/dashboards/{$this->dashboardId}/collaborators";
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
