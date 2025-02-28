<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordings;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * session_recordings_partial_update
 */
class SessionRecordingsPartialUpdate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
