<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_two_factor_start_setup_retrieve
 */
class UsersTwoFactorStartSetupRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/users/{$this->uuid}/two_factor_start_setup";
	}


	/**
	 * @param string $uuid
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
