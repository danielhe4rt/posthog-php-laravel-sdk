<?php

namespace DanielHe4rt\PostHog\Requests\FeatureFlags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * feature_flags_local_evaluation_retrieve
 *
 * Create, read, update and delete feature flags. [See docs](https://posthog.com/docs/feature-flags)
 * for more information on feature flags.
 *
 * If you're looking to use feature flags on your application,
 * you can either use our JavaScript Library or our dedicated endpoint to check if feature flags are
 * enabled for a given user.
 */
class FeatureFlagsLocalEvaluationRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/feature_flags/local_evaluation";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
