<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * environments_session_recording_playlists_create
 */
class EnvironmentsSessionRecordingPlaylistsCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/session_recording_playlists";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
