<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsCreate;
use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsDestroy;
use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsList;
use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsPartialUpdate;
use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsRetrieve;
use DanielHe4rt\PostHog\Requests\ExperimentHoldouts\ExperimentHoldoutsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class ExperimentHoldouts extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function experimentHoldoutsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ExperimentHoldoutsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentHoldoutsCreate(string $projectId): Response
	{
		return $this->connector->send(new ExperimentHoldoutsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment holdout.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentHoldoutsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentHoldoutsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment holdout.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentHoldoutsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentHoldoutsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment holdout.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentHoldoutsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentHoldoutsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment holdout.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentHoldoutsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentHoldoutsPartialUpdate($id, $projectId));
	}
}
