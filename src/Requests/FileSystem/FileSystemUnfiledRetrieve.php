<?php

namespace DanielHe4rt\PostHog\Requests\FileSystem;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * file_system_unfiled_retrieve
 */
class FileSystemUnfiledRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/file_system/unfiled";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
