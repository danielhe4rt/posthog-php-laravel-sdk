<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_groups_related_retrieve
 */
class EnvironmentsGroupsRelatedRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/groups/related";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $groupTypeIndex Specify the group type to find
	 * @param string $id Specify the id of the user to find groups for
	 */
	public function __construct(
		protected string $projectId,
		protected int $groupTypeIndex,
		protected string $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['group_type_index' => $this->groupTypeIndex, 'id' => $this->id]);
	}
}
