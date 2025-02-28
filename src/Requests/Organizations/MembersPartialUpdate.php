<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * members_partial_update
 */
class MembersPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
