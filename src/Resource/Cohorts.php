<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Cohorts\CohortsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsCreate;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsDestroy;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsDuplicateAsStaticCohortRetrieve;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsList;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsPersonsRetrieve;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsRetrieve;
use DanielHe4rt\PostHog\Requests\Cohorts\CohortsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Cohorts extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function cohortsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new CohortsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsCreate(string $projectId): Response
	{
		return $this->connector->send(new CohortsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsActivityRetrieve2(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsActivityRetrieve2($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsDuplicateAsStaticCohortRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new CohortsDuplicateAsStaticCohortRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function cohortsPersonsRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new CohortsPersonsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function cohortsActivityRetrieve(string $projectId): Response
	{
		return $this->connector->send(new CohortsActivityRetrieve($projectId));
	}
}
