<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Sessions\SessionsPropertyDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\Sessions\SessionsValuesRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Sessions extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionsPropertyDefinitionsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new SessionsPropertyDefinitionsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionsValuesRetrieve(string $projectId): Response
	{
		return $this->connector->send(new SessionsValuesRetrieve($projectId));
	}
}
