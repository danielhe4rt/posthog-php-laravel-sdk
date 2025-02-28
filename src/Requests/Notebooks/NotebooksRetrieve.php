<?php

namespace DanielHe4rt\PostHog\Requests\Notebooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * notebooks_retrieve
 *
 * The API for interacting with Notebooks. This feature is in early access and the API can have
 * breaking changes without announcement.
 */
class NotebooksRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/notebooks/{$this->shortId}";
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
