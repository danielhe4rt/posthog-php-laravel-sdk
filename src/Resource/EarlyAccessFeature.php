<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeatureCreate;
use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeatureDestroy;
use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeatureList;
use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeaturePartialUpdate;
use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeatureRetrieve;
use DanielHe4rt\PostHog\Requests\EarlyAccessFeature\EarlyAccessFeatureUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class EarlyAccessFeature extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function earlyAccessFeatureList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EarlyAccessFeatureList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function earlyAccessFeatureCreate(string $projectId): Response
	{
		return $this->connector->send(new EarlyAccessFeatureCreate($projectId));
	}


	/**
	 * @param string $id A UUID string identifying this early access feature.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function earlyAccessFeatureRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new EarlyAccessFeatureRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this early access feature.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function earlyAccessFeatureUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EarlyAccessFeatureUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this early access feature.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function earlyAccessFeatureDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new EarlyAccessFeatureDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this early access feature.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function earlyAccessFeaturePartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EarlyAccessFeaturePartialUpdate($id, $projectId));
	}
}
