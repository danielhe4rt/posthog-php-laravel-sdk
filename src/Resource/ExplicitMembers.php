<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersCreate;
use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersDestroy;
use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersList;
use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersPartialUpdate;
use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersRetrieve;
use DanielHe4rt\PostHog\Requests\ExplicitMembers\ExplicitMembersUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class ExplicitMembers extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersList(string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersList($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersCreate(string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersCreate($projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersRetrieve(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersRetrieve($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersUpdate(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersUpdate($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersDestroy(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersDestroy($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function explicitMembersPartialUpdate(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new ExplicitMembersPartialUpdate($parentMembershipUserUuid, $projectId));
	}
}
