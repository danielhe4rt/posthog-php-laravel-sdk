<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemCreate;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemDestroy;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemList;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemPartialUpdate;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemRetrieve;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemUnfiledRetrieve;
use DanielHe4rt\PostHog\Requests\FileSystem\FileSystemUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class FileSystem extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $search A search term.
	 */
	public function fileSystemList(string $projectId, ?int $limit, ?int $offset, ?string $search): Response
	{
		return $this->connector->send(new FileSystemList($projectId, $limit, $offset, $search));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemCreate(string $projectId): Response
	{
		return $this->connector->send(new FileSystemCreate($projectId));
	}


	/**
	 * @param string $id A UUID string identifying this file system.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new FileSystemRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this file system.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new FileSystemUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this file system.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new FileSystemDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this file system.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new FileSystemPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function fileSystemUnfiledRetrieve(string $projectId): Response
	{
		return $this->connector->send(new FileSystemUnfiledRetrieve($projectId));
	}
}
