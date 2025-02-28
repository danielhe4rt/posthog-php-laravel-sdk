<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_update
 */
class UsersUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/users/{$this->uuid}";
	}


	/**
	 * @param string $uuid
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
