<?php

namespace DanielHe4rt\PostHog\Requests\Insights;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * insights_sharing_list
 */
class InsightsSharingList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/insights/{$this->insightId}/sharing";
	}


	/**
	 * @param int $insightId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $insightId,
		protected string $projectId,
	) {
	}
}
