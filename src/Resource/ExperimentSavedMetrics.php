<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsCreate;
use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsDestroy;
use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsList;
use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsPartialUpdate;
use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsRetrieve;
use DanielHe4rt\PostHog\Requests\ExperimentSavedMetrics\ExperimentSavedMetricsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class ExperimentSavedMetrics extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function experimentSavedMetricsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentSavedMetricsCreate(string $projectId): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment saved metric.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentSavedMetricsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment saved metric.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentSavedMetricsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment saved metric.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentSavedMetricsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment saved metric.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentSavedMetricsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentSavedMetricsPartialUpdate($id, $projectId));
	}
}
