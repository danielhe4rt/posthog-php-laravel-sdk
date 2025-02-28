<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * session_recordings_sharing_list
 */
class SessionRecordingsSharingList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/session_recordings/{$this->recordingId}/sharing";
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
