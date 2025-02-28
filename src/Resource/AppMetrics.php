<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\AppMetrics\AppMetricsErrorDetailsRetrieve;
use DanielHe4rt\PostHog\Requests\AppMetrics\AppMetricsHistoricalExportsRetrieve;
use DanielHe4rt\PostHog\Requests\AppMetrics\AppMetricsHistoricalExportsRetrieve2;
use DanielHe4rt\PostHog\Requests\AppMetrics\AppMetricsRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class AppMetrics extends Resource
{
	/**
	 * @param int $id A unique integer value identifying this plugin config.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function appMetricsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new AppMetricsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this plugin config.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function appMetricsErrorDetailsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new AppMetricsErrorDetailsRetrieve($id, $projectId));
	}


	/**
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function appMetricsHistoricalExportsRetrieve(string $pluginConfigId, string $projectId): Response
	{
		return $this->connector->send(new AppMetricsHistoricalExportsRetrieve($pluginConfigId, $projectId));
	}


	/**
	 * @param string $id
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function appMetricsHistoricalExportsRetrieve2(string $id, string $pluginConfigId, string $projectId): Response
	{
		return $this->connector->send(new AppMetricsHistoricalExportsRetrieve2($id, $pluginConfigId, $projectId));
	}
}
