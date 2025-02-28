<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * session_recording_playlists_recordings_retrieve
 */
class SessionRecordingPlaylistsRecordingsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/session_recording_playlists/{$this->shortId}/recordings";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function __construct(
		protected string $projectId,
		protected string $shortId,
	) {
	}
}
