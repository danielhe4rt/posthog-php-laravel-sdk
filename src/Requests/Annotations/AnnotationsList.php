<?php

namespace DanielHe4rt\PostHog\Requests\Annotations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * annotations_list
 *
 * Create, Read, Update and Delete annotations. [See
 * docs](https://posthog.com/docs/user-guides/annotations) for more information on annotations.
 */
class AnnotationsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/annotations";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|int $limit Number of results to return per page.
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|string $search A search term.
	 */
	public function __construct(
		protected string $projectId,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $search = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit, 'offset' => $this->offset, 'search' => $this->search]);
	}
}
