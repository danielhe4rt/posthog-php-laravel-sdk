<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\ActivityLog\ActivityLogBookmarkActivityNotificationCreate;
use DanielHe4rt\PostHog\Requests\ActivityLog\ActivityLogImportantChangesRetrieve;
use DanielHe4rt\PostHog\Requests\ActivityLog\ActivityLogList;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class ActivityLog extends Resource
{
	/**
	 * @param int $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function activityLogList(int $projectId): Response
	{
		return $this->connector->send(new ActivityLogList($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function activityLogBookmarkActivityNotificationCreate(string $projectId): Response
	{
		return $this->connector->send(new ActivityLogBookmarkActivityNotificationCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function activityLogImportantChangesRetrieve(string $projectId): Response
	{
		return $this->connector->send(new ActivityLogImportantChangesRetrieve($projectId));
	}
}
