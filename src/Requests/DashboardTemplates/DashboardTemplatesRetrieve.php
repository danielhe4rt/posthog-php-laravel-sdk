<?php

namespace DanielHe4rt\PostHog\Requests\DashboardTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * dashboard_templates_retrieve
 */
class DashboardTemplatesRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/dashboard_templates/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this dashboard template.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
