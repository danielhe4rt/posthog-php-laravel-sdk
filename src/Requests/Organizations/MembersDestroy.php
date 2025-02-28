<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * members_destroy
 */
class MembersDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/members/{$this->userUuid}";
	}


	/**
	 * @param string $organizationId
	 * @param string $userUuid
	 */
	public function __construct(
		protected string $organizationId,
		protected string $userUuid,
	) {
	}
}
