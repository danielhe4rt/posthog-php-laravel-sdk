<?php

namespace DanielHe4rt\PostHog\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * users_list
 */
class UsersList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/users";
	}


	/**
	 * @param null|bool $isStaff
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 */
	public function __construct(
		protected ?bool $isStaff = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['is_staff' => $this->isStaff, 'limit' => $this->limit, 'offset' => $this->offset]);
	}
}
