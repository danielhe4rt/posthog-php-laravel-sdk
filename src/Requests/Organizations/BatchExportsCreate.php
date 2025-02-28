<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * batch_exports_create
 */
class BatchExportsCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/batch_exports";
	}


	/**
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $organizationId,
	) {
	}
}
