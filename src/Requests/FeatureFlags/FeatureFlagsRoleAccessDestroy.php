<?php

namespace DanielHe4rt\PostHog\Requests\FeatureFlags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * feature_flags_role_access_destroy
 */
class FeatureFlagsRoleAccessDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/feature_flags/{$this->featureFlagId}/role_access/{$this->id}";
	}


	/**
	 * @param int $featureFlagId
	 * @param int $id A unique integer value identifying this feature flag role access.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $featureFlagId,
		protected int $id,
		protected string $projectId,
	) {
	}
}
