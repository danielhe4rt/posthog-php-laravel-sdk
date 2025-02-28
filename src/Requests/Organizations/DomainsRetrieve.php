<?php

namespace DanielHe4rt\PostHog\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * domains_retrieve
 */
class DomainsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/organizations/{$this->organizationId}/domains/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function __construct(
		protected string $id,
		protected string $organizationId,
	) {
	}
}
