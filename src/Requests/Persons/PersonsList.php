<?php

namespace DanielHe4rt\PostHog\Requests\Persons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * persons_list
 *
 * This endpoint is meant for reading and deleting persons. To create or update persons, we recommend
 * using the [capture API](https://posthog.com/docs/api/capture), the `$set` and `$unset`
 * [properties](https://posthog.com/docs/product-analytics/user-properties), or one of our SDKs.
 */
class PersonsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/persons";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $distinctId Filter list by distinct id.
	 * @param null|string $email Filter persons by email (exact match)
	 * @param null|string $format
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|array $properties Filter Persons by person properties.
	 * @param null|string $search Search persons, either by email (full text search) or distinct_id (exact match).
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $distinctId = null,
		protected ?string $email = null,
		protected ?string $format = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?array $properties = null,
		protected ?string $search = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'distinct_id' => $this->distinctId,
			'email' => $this->email,
			'format' => $this->format,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'properties' => $this->properties,
			'search' => $this->search,
		]);
	}
}
