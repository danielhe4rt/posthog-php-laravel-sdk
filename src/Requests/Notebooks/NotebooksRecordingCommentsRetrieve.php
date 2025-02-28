<?php

namespace DanielHe4rt\PostHog\Requests\Notebooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * notebooks_recording_comments_retrieve
 *
 * The API for interacting with Notebooks. This feature is in early access and the API can have
 * breaking changes without announcement.
 */
class NotebooksRecordingCommentsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/notebooks/recording_comments";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
