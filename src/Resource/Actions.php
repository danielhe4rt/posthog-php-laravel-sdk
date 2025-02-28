<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Actions\ActionsCreate;
use DanielHe4rt\PostHog\Requests\Actions\ActionsDestroy;
use DanielHe4rt\PostHog\Requests\Actions\ActionsList;
use DanielHe4rt\PostHog\Requests\Actions\ActionsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Actions\ActionsRetrieve;
use DanielHe4rt\PostHog\Requests\Actions\ActionsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Actions extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function actionsList(string $projectId, ?string $format, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ActionsList($projectId, $format, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function actionsCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new ActionsCreate($projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this action.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function actionsRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new ActionsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this action.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function actionsUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new ActionsUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this action.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function actionsDestroy(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new ActionsDestroy($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this action.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function actionsPartialUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new ActionsPartialUpdate($id, $projectId, $format));
	}
}
