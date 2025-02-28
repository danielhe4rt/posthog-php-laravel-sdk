<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * invites_bulk_create
 */
class InvitesBulkCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/invites/bulk";
	}


	/**
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $organizationId,
	) {
	}
}
