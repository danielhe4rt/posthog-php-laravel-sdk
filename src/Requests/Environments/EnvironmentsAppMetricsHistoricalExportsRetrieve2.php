<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_app_metrics_historical_exports_retrieve_2
 */
class EnvironmentsAppMetricsHistoricalExportsRetrieve2 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/app_metrics/{$this->pluginConfigId}/historical_exports/{$this->id}";
	}


	/**
	 * @param string $id
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $pluginConfigId,
		protected string $projectId,
	) {
	}
}
