<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\EventDefinitions\EventDefinitionsDestroy;
use DanielHe4rt\PostHog\Requests\EventDefinitions\EventDefinitionsPartialUpdate;
use DanielHe4rt\PostHog\Requests\EventDefinitions\EventDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\EventDefinitions\EventDefinitionsRetrieve2;
use DanielHe4rt\PostHog\Requests\EventDefinitions\EventDefinitionsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class EventDefinitions extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function eventDefinitionsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EventDefinitionsRetrieve($projectId));
	}


	/**
	 * @param string $id A UUID string identifying this event definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function eventDefinitionsRetrieve2(string $id, string $projectId): Response
	{
		return $this->connector->send(new EventDefinitionsRetrieve2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this event definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function eventDefinitionsUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EventDefinitionsUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this event definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function eventDefinitionsDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new EventDefinitionsDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this event definition.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function eventDefinitionsPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EventDefinitionsPartialUpdate($id, $projectId));
	}
}
