<?php

namespace DanielHe4rt\PostHog\Requests\SessionRecordingPlaylists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * session_recording_playlists_list
 */
class SessionRecordingPlaylistsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/session_recording_playlists";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|int $createdBy
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|string $shortId
	 */
	public function __construct(
		protected string $projectId,
		protected ?int $createdBy = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $shortId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['created_by' => $this->createdBy, 'limit' => $this->limit, 'offset' => $this->offset, 'short_id' => $this->shortId]);
	}
}
