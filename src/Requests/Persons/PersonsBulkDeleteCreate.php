<?php

namespace DanielHe4rt\PostHog\Requests\Persons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * persons_bulk_delete_create
 *
 * This endpoint allows you to bulk delete persons, either by the PostHog person IDs or by distinct
 * IDs. You can pass in a maximum of 1000 IDs per call.
 */
class PersonsBulkDeleteCreate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/persons/bulk_delete";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param null|array $distinctIds A list of distinct IDs, up to 100 of them. We'll delete all persons associated with those distinct IDs.
	 * @param null|string $format
	 * @param null|array $ids A list of PostHog person IDs, up to 100 of them. We'll delete all the persons listed.
	 */
	public function __construct(
		protected string $projectId,
		protected ?bool $deleteEvents = null,
		protected ?array $distinctIds = null,
		protected ?string $format = null,
		protected ?array $ids = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'delete_events' => $this->deleteEvents,
			'distinct_ids' => $this->distinctIds,
			'format' => $this->format,
			'ids' => $this->ids,
		]);
	}
}
