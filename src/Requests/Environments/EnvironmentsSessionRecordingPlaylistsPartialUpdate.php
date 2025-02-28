<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * environments_session_recording_playlists_partial_update
 */
class EnvironmentsSessionRecordingPlaylistsPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
