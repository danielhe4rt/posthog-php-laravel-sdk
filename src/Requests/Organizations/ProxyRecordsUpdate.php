<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * proxy_records_update
 */
class ProxyRecordsUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/proxy_records/{$this->id}";
	}


	/**
	 * @param string $id
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $id,
		protected string $organizationId,
	) {
	}
}
