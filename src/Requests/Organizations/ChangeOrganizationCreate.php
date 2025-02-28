<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * change_organization_create
 *
 * Projects for the current organization.
 */
class ChangeOrganizationCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/projects/{$this->id}/change_organization";
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
