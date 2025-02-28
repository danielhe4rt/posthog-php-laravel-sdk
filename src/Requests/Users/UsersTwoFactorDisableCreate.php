<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * users_two_factor_disable_create
 *
 * Disable 2FA and remove all related devices
 */
class UsersTwoFactorDisableCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/users/{$this->uuid}/two_factor_disable";
	}


	/**
	 * @param string $uuid
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
