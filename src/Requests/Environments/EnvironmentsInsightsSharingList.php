<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_insights_sharing_list
 */
class EnvironmentsInsightsSharingList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/insights/{$this->insightId}/sharing";
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
