<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * activity_retrieve
 *
 * Projects for the current organization.
 */
class ActivityRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/projects/{$this->id}/activity";
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
