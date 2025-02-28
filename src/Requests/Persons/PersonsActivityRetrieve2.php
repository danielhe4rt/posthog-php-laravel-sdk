<?php

namespace DanielHe4rt\PostHog\Requests\Persons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * persons_activity_retrieve_2
 *
 * This endpoint is meant for reading and deleting persons. To create or update persons, we recommend
 * using the [capture API](https://posthog.com/docs/api/capture), the `$set` and `$unset`
 * [properties](https://posthog.com/docs/product-analytics/user-properties), or one of our SDKs.
 */
class PersonsActivityRetrieve2 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/persons/{$this->id}/activity";
	}


	/**
	 * @param int $id A unique integer value identifying this person.
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
