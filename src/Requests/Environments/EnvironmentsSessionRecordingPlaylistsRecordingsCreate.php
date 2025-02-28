<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * environments_session_recording_playlists_recordings_create
 */
class EnvironmentsSessionRecordingPlaylistsRecordingsCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/session_recording_playlists/{$this->shortId}/recordings/{$this->sessionRecordingId}";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $sessionRecordingId
	 * @param string $shortId
	 */
	public function __construct(
		protected string $projectId,
		protected string $sessionRecordingId,
		protected string $shortId,
	) {
	}
}
