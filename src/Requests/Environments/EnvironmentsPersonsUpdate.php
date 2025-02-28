<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_persons_update
 *
 * Only for setting properties on the person. "properties" from the request data will be updated via a
 * "$set" event.
 * This means that only the properties listed will be updated, but other properties won't
 * be removed nor updated.
 * If you would like to remove a property use the `delete_property` endpoint.
 */
class EnvironmentsPersonsUpdate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/persons/{$this->id}";
	}


	/**
	 * @param int $id A unique integer value identifying this person.
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
