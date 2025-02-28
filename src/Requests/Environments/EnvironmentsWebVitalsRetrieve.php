<?php

namespace DanielHe4rt\PostHog\Requests\Environments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * environments_web_vitals_retrieve
 */
class EnvironmentsWebVitalsRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/environments/{$this->projectId}/web_vitals";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $pathname Filter web vitals by pathname
	 */
	public function __construct(
		protected string $projectId,
		protected string $pathname,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['pathname' => $this->pathname]);
	}
}
