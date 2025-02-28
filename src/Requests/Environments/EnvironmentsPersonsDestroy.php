<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_persons_destroy
 *
 * Use this endpoint to delete individual persons. For bulk deletion, use the bulk_delete endpoint
 * instead.
 */
class EnvironmentsPersonsDestroy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/persons/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param null|bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param null|string $format
	 */
	public function __construct(
		protected int $id,
		protected string $projectId,
		protected ?bool $deleteEvents = null,
		protected ?string $format = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['delete_events' => $this->deleteEvents, 'format' => $this->format]);
	}
}
