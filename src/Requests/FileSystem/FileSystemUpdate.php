<?php

namespace DanielHe4rt\PostHog\Requests\FileSystem;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * file_system_update
 */
class FileSystemUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/file_system/{$this->id}";
	}


	/**
	 * @param string $id A UUID string identifying this file system.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $id,
		protected string $projectId,
	) {
	}
}
