<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * partial_update_2
 *
 * Projects for the current organization.
 */
class PartialUpdate2 extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/projects/{$this->id}";
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function __construct(
		protected int $id,
		protected string $organizationId,
	) {
	}
}
