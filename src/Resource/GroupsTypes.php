<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\GroupsTypes\GroupsTypesList;
use DanielHe4rt\PostHog\Requests\GroupsTypes\GroupsTypesUpdateMetadataPartialUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class GroupsTypes extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function groupsTypesList(string $projectId): Response
	{
		return $this->connector->send(new GroupsTypesList($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function groupsTypesUpdateMetadataPartialUpdate(string $projectId): Response
	{
		return $this->connector->send(new GroupsTypesUpdateMetadataPartialUpdate($projectId));
	}
}
