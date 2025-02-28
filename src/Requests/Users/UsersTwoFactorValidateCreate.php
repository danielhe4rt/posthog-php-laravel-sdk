<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * users_two_factor_validate_create
 */
class UsersTwoFactorValidateCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/users/{$this->uuid}/two_factor_validate";
	}


	/**
	 * @param string $uuid
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
