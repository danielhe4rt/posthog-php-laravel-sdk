<?php

namespace DanielHe4rt\PostHog\Requests\Persons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * persons_funnel_correlation_create
 *
 * This endpoint is meant for reading and deleting persons. To create or update persons, we recommend
 * using the [capture API](https://posthog.com/docs/api/capture), the `$set` and `$unset`
 * [properties](https://posthog.com/docs/product-analytics/user-properties), or one of our SDKs.
 */
class PersonsFunnelCorrelationCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/persons/funnel/correlation";
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
