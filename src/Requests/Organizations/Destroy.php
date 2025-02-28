<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroy
 */
class Destroy extends Request
{
	protected Method $method = Method::DELETE;


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
