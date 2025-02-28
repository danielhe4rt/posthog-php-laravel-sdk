<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Exports\ExportsContentRetrieve;
use DanielHe4rt\PostHog\Requests\Exports\ExportsCreate;
use DanielHe4rt\PostHog\Requests\Exports\ExportsList;
use DanielHe4rt\PostHog\Requests\Exports\ExportsRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Exports extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function exportsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ExportsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function exportsCreate(string $projectId): Response
	{
		return $this->connector->send(new ExportsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this exported asset.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function exportsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExportsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this exported asset.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function exportsContentRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new ExportsContentRetrieve($id, $projectId));
	}
}
