<?php

namespace DanielHe4rt\PostHog\Requests\ActivityLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * activity_log_list
 */
class ActivityLogList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/activity_log";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
