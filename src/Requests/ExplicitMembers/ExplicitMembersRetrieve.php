<?php

namespace DanielHe4rt\PostHog\Requests\ExplicitMembers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * explicit_members_retrieve
 */
class ExplicitMembersRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/explicit_members/{$this->parentMembershipUserUuid}";
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
