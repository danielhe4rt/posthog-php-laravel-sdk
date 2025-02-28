<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * users_request_email_verification_create
 */
class UsersRequestEmailVerificationCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/users/request_email_verification";
	}


	public function __construct()
	{
	}
}
