<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_session_recording_playlists_retrieve
 */
class EnvironmentsSessionRecordingPlaylistsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/session_recording_playlists/{$this->shortId}";
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
