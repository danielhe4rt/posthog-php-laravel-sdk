<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * batch_exports_logs_retrieve
 */
class BatchExportsLogsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/batch_exports/{$this->id}/logs";
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
