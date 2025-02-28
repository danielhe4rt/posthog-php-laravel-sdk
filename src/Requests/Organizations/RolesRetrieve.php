<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * roles_retrieve
 */
class RolesRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/roles/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this role.
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $id,
		protected string $organizationId,
	) {
	}
}
