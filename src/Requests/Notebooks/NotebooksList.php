<?php

namespace DanielHe4rt\PostHog\Requests\Notebooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * notebooks_list
 *
 * The API for interacting with Notebooks. This feature is in early access and the API can have
 * breaking changes without announcement.
 */
class NotebooksList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/notebooks";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $contains Filter for notebooks that match a provided filter.
	 *                 Each match pair is separated by a colon,
	 *                 multiple match pairs can be sent separated by a space or a comma
	 * @param null|int $createdBy The UUID of the Notebook's creator
	 * @param null|string $dateFrom Filter for notebooks created after this date & time
	 * @param null|string $dateTo Filter for notebooks created before this date & time
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|string $user If any value is provided for this parameter, return notebooks created by the logged in user.
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $contains = null,
		protected ?int $createdBy = null,
		protected ?string $dateFrom = null,
		protected ?string $dateTo = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $user = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'contains' => $this->contains,
			'created_by' => $this->createdBy,
			'date_from' => $this->dateFrom,
			'date_to' => $this->dateTo,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'user' => $this->user,
		]);
	}
}
