<?php

namespace DanielHe4rt\PostHog\Requests\Groups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * groups_find_retrieve
 */
class GroupsFindRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/groups/find";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $groupKey Specify the key of the group to find
	 * @param int $groupTypeIndex Specify the group type to find
	 */
	public function __construct(
		protected string $projectId,
		protected string $groupKey,
		protected int $groupTypeIndex,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['group_key' => $this->groupKey, 'group_type_index' => $this->groupTypeIndex]);
	}
}
