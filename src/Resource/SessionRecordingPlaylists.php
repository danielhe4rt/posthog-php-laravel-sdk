<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsCreate;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsDestroy;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsList;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsPartialUpdate;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsRecordingsCreate;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsRecordingsDestroy;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsRecordingsRetrieve;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsRetrieve;
use DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists\SessionRecordingPlaylistsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class SessionRecordingPlaylists extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $createdBy
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsList(
		string $projectId,
		?int $createdBy,
		?int $limit,
		?int $offset,
		?string $shortId,
	): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsList($projectId, $createdBy, $limit, $offset, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingPlaylistsCreate(string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsRetrieve(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsRetrieve($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsDestroy(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsDestroy($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsPartialUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsPartialUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsRecordingsRetrieve(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsRecordingsRetrieve($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $sessionRecordingId
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsRecordingsCreate(
		string $projectId,
		string $sessionRecordingId,
		string $shortId,
	): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsRecordingsCreate($projectId, $sessionRecordingId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $sessionRecordingId
	 * @param string $shortId
	 */
	public function sessionRecordingPlaylistsRecordingsDestroy(
		string $projectId,
		string $sessionRecordingId,
		string $shortId,
	): Response
	{
		return $this->connector->send(new SessionRecordingPlaylistsRecordingsDestroy($projectId, $sessionRecordingId, $shortId));
	}
}
