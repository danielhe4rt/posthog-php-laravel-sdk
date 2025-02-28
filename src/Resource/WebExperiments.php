<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsCreate;
use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsDestroy;
use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsList;
use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsPartialUpdate;
use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsRetrieve;
use DanielHe4rt\PostHog\Requests\WebExperiments\WebExperimentsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class WebExperiments extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function webExperimentsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new WebExperimentsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function webExperimentsCreate(string $projectId): Response
	{
		return $this->connector->send(new WebExperimentsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this web experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function webExperimentsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new WebExperimentsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this web experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function webExperimentsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new WebExperimentsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this web experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function webExperimentsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new WebExperimentsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this web experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function webExperimentsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new WebExperimentsPartialUpdate($id, $projectId));
	}
}
