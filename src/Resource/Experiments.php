<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsCreate;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsCreateExposureCohortForExperimentCreate;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsDestroy;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsList;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsRequiresFlagImplementationRetrieve;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsResultsRetrieve;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsRetrieve;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsSecondaryResultsRetrieve;
use DanielHe4rt\PostHog\Requests\Experiments\ExperimentsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Experiments extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function experimentsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ExperimentsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsCreate(string $projectId): Response
	{
		return $this->connector->send(new ExperimentsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsCreateExposureCohortForExperimentCreate(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsCreateExposureCohortForExperimentCreate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsResultsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsResultsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this experiment.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsSecondaryResultsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExperimentsSecondaryResultsRetrieve($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function experimentsRequiresFlagImplementationRetrieve(string $projectId): Response
	{
		return $this->connector->send(new ExperimentsRequiresFlagImplementationRetrieve($projectId));
	}
}
