<?php

namespace DanielHe4rt\PostHog\Requests\Query;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * query_draft_sql_retrieve
 */
class QueryDraftSqlRetrieve extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/projects/{$this->projectId}/query/draft_sql";
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function __construct(
		protected string $projectId,
	) {
	}
}
