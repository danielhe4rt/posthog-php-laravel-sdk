<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordings;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * session_recordings_ai_filters_create
 *
 * Generate session recording filters using AI. This is in development and likely to change, you should
 * not depend on this API.
 */
class SessionRecordingsAiFiltersCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/session_recordings/ai/filters";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
