<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * batch_exports_destroy
 */
class BatchExportsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/batch_exports/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $id,
		protected string $organizationId,
	) {
	}
}
