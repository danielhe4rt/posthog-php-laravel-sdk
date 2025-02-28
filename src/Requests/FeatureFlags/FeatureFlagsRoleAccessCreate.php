<?php

namespace DanielHe4rt\PostHog\Requests\FeatureFlags;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * feature_flags_role_access_create
 */
class FeatureFlagsRoleAccessCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/feature_flags/{$this->featureFlagId}/role_access";
	}


	/**
	 * @param int $featureFlagId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $featureFlagId,
		protected string $projectId,
	) {
	}
}
