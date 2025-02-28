<?php

namespace DanielHe4rt\PostHog\Requests\Subscriptions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_destroy
 *
 * Hard delete of this model is not allowed. Use a patch API call to set "deleted" to true
 */
class SubscriptionsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/subscriptions/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
