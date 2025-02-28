<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * roles_role_memberships_destroy
 */
class RolesRoleMembershipsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/roles/{$this->roleId}/role_memberships/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this role membership.
	 * @param string $organizationId
	 * @param string $roleId
	 */
	public function __construct(
		protected string $id,
		protected string $organizationId,
		protected string $roleId,
	) {
	}
}
