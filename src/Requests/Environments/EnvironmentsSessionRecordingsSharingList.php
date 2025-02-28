<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_session_recordings_sharing_list
 */
class EnvironmentsSessionRecordingsSharingList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/session_recordings/{$this->recordingId}/sharing";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $recordingId
	 */
	public function __construct(
		protected string $projectId,
		protected string $recordingId,
	) {
	}
}
