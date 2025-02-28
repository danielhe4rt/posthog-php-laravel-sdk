<?php

namespace DanielHe4rt\PostHog\Requests\Annotations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * annotations_destroy
 *
 * Hard delete of this model is not allowed. Use a patch API call to set "deleted" to true
 */
class AnnotationsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/annotations/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this annotation.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
	) {
	}
}
