<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\PluginConfigs\PluginConfigsLogsList;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class PluginConfigs extends Resource
{
	/**
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function pluginConfigsLogsList(string $pluginConfigId, string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new PluginConfigsLogsList($pluginConfigId, $projectId, $limit, $offset));
	}
}
