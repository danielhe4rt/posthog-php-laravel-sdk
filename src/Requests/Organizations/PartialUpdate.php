<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * partial_update
 */
class PartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this organization.
	 */
	public function __construct(
		protected string $id,
	) {
	}
}
