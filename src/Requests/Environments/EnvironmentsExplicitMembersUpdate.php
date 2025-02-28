<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_explicit_members_update
 */
class EnvironmentsExplicitMembersUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/explicit_members/{$this->parentMembershipUserUuid}";
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $parentMembershipUserUuid,
		protected string $projectId,
	) {
	}
}
