<?php

namespace DanielHe4rt\PostHog\Requests\Events;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * events_values_retrieve
 */
class EventsValuesRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/events/values";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $format
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $format = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['format' => $this->format]);
	}
}
