<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_events_list
 *
 *
 *         This endpoint allows you to list and filter events.
 *         It is effectively deprecated
 * and is kept only for backwards compatibility.
 *         If you ever ask about it you will be advised
 * to not use it...
 *         If you want to ad-hoc list or aggregate events, use the Query endpoint
 * instead.
 *         If you want to export all events or many pages of events you should use our
 * CDP/Batch Exports products instead.
 */
class EnvironmentsEventsList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/events";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|string $before Only return events with a timestamp before this time.
	 * @param null|int $distinctId Filter list by distinct id.
	 * @param null|string $event Filter list by event. For example `user sign up` or `$pageview`.
	 * @param null|string $format
	 * @param null|int $limit The maximum number of results to return
	 * @param null|int $offset The initial index from which to return the results.
	 * @param null|int $personId Filter list by person id.
	 * @param null|array $properties Filter events by event property, person property, cohort, groups and more.
	 * @param null|array $select (Experimental) JSON-serialized array of HogQL expressions to return
	 * @param null|array $where (Experimental) JSON-serialized array of HogQL expressions that must pass
	 */
	public function __construct(
		protected string $projectId,
		protected ?string $before = null,
		protected ?int $distinctId = null,
		protected ?string $event = null,
		protected ?string $format = null,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?int $personId = null,
		protected ?array $properties = null,
		protected ?array $select = null,
		protected ?array $where = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'before' => $this->before,
			'distinct_id' => $this->distinctId,
			'event' => $this->event,
			'format' => $this->format,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'person_id' => $this->personId,
			'properties' => $this->properties,
			'select' => $this->select,
			'where' => $this->where,
		]);
	}
}
