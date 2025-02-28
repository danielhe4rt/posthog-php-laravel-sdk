<?php

namespace DanielHe4rt\PostHog\Requests\Insights;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * insights_destroy
 *
 * Hard delete of this model is not allowed. Use a patch API call to set "deleted" to true
 */
class InsightsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/insights/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
		protected ?string $format = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format]);
	}
}
