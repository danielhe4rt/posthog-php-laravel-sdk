<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsAiFiltersCreate;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsAiRegexCreate;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsDestroy;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsList;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsPartialUpdate;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsRetrieve;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsSharingList;
use DanielHe4rt\PostHog\Requests\SessionRecordings\SessionRecordingsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class SessionRecordings extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function sessionRecordingsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new SessionRecordingsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $recordingId
	 */
	public function sessionRecordingsSharingList(string $projectId, string $recordingId): Response
	{
		return $this->connector->send(new SessionRecordingsSharingList($projectId, $recordingId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsAiFiltersCreate(string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsAiFiltersCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function sessionRecordingsAiRegexCreate(string $projectId): Response
	{
		return $this->connector->send(new SessionRecordingsAiRegexCreate($projectId));
	}
}
