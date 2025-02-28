<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * environments_complete_product_onboarding_partial_update
 *
 * Projects for the current organization.
 */
class EnvironmentsCompleteProductOnboardingPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/environments/{$this->id}/complete_product_onboarding";
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
