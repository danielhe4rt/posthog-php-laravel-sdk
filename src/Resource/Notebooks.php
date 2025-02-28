<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksCreate;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksDestroy;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksList;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksPartialUpdate;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksRecordingCommentsRetrieve;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksRetrieve;
use DanielHe4rt\PostHog\Requests\Notebooks\NotebooksUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Notebooks extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $contains Filter for notebooks that match a provided filter.
	 *                 Each match pair is separated by a colon,
	 *                 multiple match pairs can be sent separated by a space or a comma
	 * @param int $createdBy The UUID of the Notebook's creator
	 * @param string $dateFrom Filter for notebooks created after this date & time
	 * @param string $dateTo Filter for notebooks created before this date & time
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $user If any value is provided for this parameter, return notebooks created by the logged in user.
	 */
	public function notebooksList(
		string $projectId,
		?string $contains,
		?int $createdBy,
		?string $dateFrom,
		?string $dateTo,
		?int $limit,
		?int $offset,
		?string $user,
	): Response
	{
		return $this->connector->send(new NotebooksList($projectId, $contains, $createdBy, $dateFrom, $dateTo, $limit, $offset, $user));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function notebooksCreate(string $projectId): Response
	{
		return $this->connector->send(new NotebooksCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function notebooksRetrieve(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new NotebooksRetrieve($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function notebooksUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new NotebooksUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function notebooksDestroy(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new NotebooksDestroy($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function notebooksPartialUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new NotebooksPartialUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function notebooksActivityRetrieve2(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new NotebooksActivityRetrieve2($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function notebooksActivityRetrieve(string $projectId): Response
	{
		return $this->connector->send(new NotebooksActivityRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function notebooksRecordingCommentsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new NotebooksRecordingCommentsRetrieve($projectId));
	}
}
