<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_hedgehog_config_retrieve
 */
class UsersHedgehogConfigRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/users/{$this->uuid}/hedgehog_config";
	}


	/**
	 * @param string $uuid
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
