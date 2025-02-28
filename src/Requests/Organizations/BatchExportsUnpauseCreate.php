<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * batch_exports_unpause_create
 *
 * Unpause a BatchExport.
 */
class BatchExportsUnpauseCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/batch_exports/{$this->id}/unpause";
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
