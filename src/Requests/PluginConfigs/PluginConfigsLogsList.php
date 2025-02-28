<?php

namespace DanielHe4rt\PostHog\Requests\PluginConfigs;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * plugin_configs_logs_list
 */
class PluginConfigsLogsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/plugin_configs/{$this->pluginConfigId}/logs";
	}


	/**
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 */
	public function __construct(
		protected string $pluginConfigId,
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
