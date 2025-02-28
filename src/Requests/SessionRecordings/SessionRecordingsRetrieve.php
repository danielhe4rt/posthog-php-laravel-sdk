<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * session_recordings_retrieve
 */
class SessionRecordingsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/session_recordings/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
