<?php

namespace DanielHe4rt\PostHog\Requests\Cohorts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * cohorts_persons_retrieve
 */
class CohortsPersonsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/cohorts/{$this->id}/persons";
	}


	/**
	 * @param int $id A unique integer value identifying this cohort.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
		protected ?string $format = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format]);
	}
}
