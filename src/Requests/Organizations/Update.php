<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * update
 */
class Update extends Request
{
	protected Method $method = Method::PUT;


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
