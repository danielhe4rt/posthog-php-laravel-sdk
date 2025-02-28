<?php

namespace DanielHe4rt\PostHog\Requests\Insights;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * insights_my_last_viewed_retrieve
 *
 * Returns basic details about the last 5 insights viewed by this user. Most recently viewed first.
 */
class InsightsMyLastViewedRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/insights/my_last_viewed";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $format = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format]);
	}
}
