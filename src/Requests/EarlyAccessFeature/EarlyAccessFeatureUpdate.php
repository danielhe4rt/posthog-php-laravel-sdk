<?php

namespace DanielHe4rt\PostHog\Requests\EarlyAccessFeature;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * early_access_feature_update
 */
class EarlyAccessFeatureUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/early_access_feature/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this early access feature.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
