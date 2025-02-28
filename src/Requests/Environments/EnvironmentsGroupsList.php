<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_groups_list
 *
 * List all groups of a specific group type. You must pass ?group_type_index= in the URL. To get a list
 * of valid group types, call /api/:project_id/groups_types/
 */
class EnvironmentsGroupsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/groups";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $cursor The pagination cursor value.
	 * @param int $groupTypeIndex Specify the group type to list
	 * @param string $search Search the group name
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $cursor = null,
		protected int $groupTypeIndex,
		protected string $search,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['cursor' => $this->cursor, 'group_type_index' => $this->groupTypeIndex, 'search' => $this->search]);
	}
}
