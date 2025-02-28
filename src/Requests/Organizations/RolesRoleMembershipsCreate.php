<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * roles_role_memberships_create
 */
class RolesRoleMembershipsCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/roles/{$this->roleId}/role_memberships";
	}


	/**
	 * @param string $organizationId
	 * @param string $roleId
	 */
	public function __construct(
		protected string $organizationId,
		protected string $roleId,
	) {
	}
}
