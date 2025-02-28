<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Groups\GroupsFindRetrieve;
use DanielHe4rt\PostHog\Requests\Groups\GroupsList;
use DanielHe4rt\PostHog\Requests\Groups\GroupsPropertyDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\Groups\GroupsPropertyValuesRetrieve;
use DanielHe4rt\PostHog\Requests\Groups\GroupsRelatedRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Groups extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param int $groupTypeIndex Specify the group type to list
	 * @param string $search Search the group name
	 */
	public function groupsList(string $projectId, ?string $cursor, int $groupTypeIndex, string $search): Response
	{
		return $this->connector->send(new GroupsList($projectId, $cursor, $groupTypeIndex, $search));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $groupKey Specify the key of the group to find
	 * @param int $groupTypeIndex Specify the group type to find
	 */
	public function groupsFindRetrieve(string $projectId, string $groupKey, int $groupTypeIndex): Response
	{
		return $this->connector->send(new GroupsFindRetrieve($projectId, $groupKey, $groupTypeIndex));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function groupsPropertyDefinitionsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new GroupsPropertyDefinitionsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function groupsPropertyValuesRetrieve(string $projectId): Response
	{
		return $this->connector->send(new GroupsPropertyValuesRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $groupTypeIndex Specify the group type to find
	 * @param string $id Specify the id of the user to find groups for
	 */
	public function groupsRelatedRetrieve(string $projectId, int $groupTypeIndex, string $id): Response
	{
		return $this->connector->send(new GroupsRelatedRetrieve($projectId, $groupTypeIndex, $id));
	}
}
