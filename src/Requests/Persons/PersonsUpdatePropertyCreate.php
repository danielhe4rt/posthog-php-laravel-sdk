<?php

namespace DanielHe4rt\PostHog\Requests\Persons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * persons_update_property_create
 *
 * This endpoint is meant for reading and deleting persons. To create or update persons, we recommend
 * using the [capture API](https://posthog.com/docs/api/capture), the `$set` and `$unset`
 * [properties](https://posthog.com/docs/product-analytics/user-properties), or one of our SDKs.
 */
class PersonsUpdatePropertyCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/persons/{$this->id}/update_property";
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 * @param string $key Specify the property key
	 * @param mixed $value Specify the property value
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
		protected ?string $format = null,
		protected string $key,
		protected mixed $value,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format, 'key' => $this->key, 'value' => $this->value]);
	}
}
