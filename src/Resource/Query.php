<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Query\QueryCheckAuthForAsyncCreate;
use DanielHe4rt\PostHog\Requests\Query\QueryCreate;
use DanielHe4rt\PostHog\Requests\Query\QueryDestroy;
use DanielHe4rt\PostHog\Requests\Query\QueryDraftSqlRetrieve;
use DanielHe4rt\PostHog\Requests\Query\QueryRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Query extends Resource
{
    /**
     * Sends a query to PostHog.
     *
     * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
     * @url https://posthog.com/docs/api/query
     */
    public function query(string $projectId, array $payload): Response
    {
        return $this->connector->send(new QueryCreate($projectId, $payload));
    }


    /**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function queryRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new QueryRetrieve($id, $projectId));
	}


    /**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function queryDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new QueryDestroy($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function queryCheckAuthForAsyncCreate(string $projectId): Response
	{
		return $this->connector->send(new QueryCheckAuthForAsyncCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function queryDraftSqlRetrieve(string $projectId): Response
	{
		return $this->connector->send(new QueryDraftSqlRetrieve($projectId));
	}
}
