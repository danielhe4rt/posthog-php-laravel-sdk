<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_app_metrics_retrieve
 */
class EnvironmentsAppMetricsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/app_metrics/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this plugin config.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
