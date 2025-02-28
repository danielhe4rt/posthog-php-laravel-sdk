<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Insights\InsightsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Insights\InsightsCancelCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsDestroy;
use DanielHe4rt\PostHog\Requests\Insights\InsightsFunnelCorrelationCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsFunnelCorrelationRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsFunnelCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsFunnelRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsList;
use DanielHe4rt\PostHog\Requests\Insights\InsightsMyLastViewedRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsSharingList;
use DanielHe4rt\PostHog\Requests\Insights\InsightsTimingCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsTrendCreate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsTrendRetrieve;
use DanielHe4rt\PostHog\Requests\Insights\InsightsUpdate;
use DanielHe4rt\PostHog\Requests\Insights\InsightsViewedCreate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Insights extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $createdBy
	 * @param string $format
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $refresh
	 * Whether to refresh the retrieved insights, how aggresively, and if sync or async:
	 * - `'force_cache'` - return cached data or a cache miss; always completes immediately as it never calculates
	 * - `'blocking'` - calculate synchronously (returning only when the query is done), UNLESS there are very fresh results in the cache
	 * - `'async'` - kick off background calculation (returning immediately with a query status), UNLESS there are very fresh results in the cache
	 * - `'lazy_async'` - kick off background calculation, UNLESS there are somewhat fresh results in the cache
	 * - `'force_blocking'` - calculate synchronously, even if fresh results are already cached
	 * - `'force_async'` - kick off background calculation, even if fresh results are already cached
	 * Background calculation can be tracked using the `query_status` response field.
	 * @param string $shortId
	 */
	public function insightsList(
		string $projectId,
		?int $createdBy,
		?string $format,
		?int $limit,
		?int $offset,
		?string $refresh,
		?string $shortId,
	): Response
	{
		return $this->connector->send(new InsightsList($projectId, $createdBy, $format, $limit, $offset, $refresh, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsCreate($projectId, $format));
	}


	/**
	 * @param int $insightId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function insightsSharingList(int $insightId, string $projectId): Response
	{
		return $this->connector->send(new InsightsSharingList($insightId, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 * @param int $fromDashboard
	 * Only if loading an insight in the context of a dashboard: The relevant dashboard's ID.
	 * When set, the specified dashboard's filters and date range override will be applied.
	 * @param string $refresh
	 * Whether to refresh the insight, how aggresively, and if sync or async:
	 * - `'force_cache'` - return cached data or a cache miss; always completes immediately as it never calculates
	 * - `'blocking'` - calculate synchronously (returning only when the query is done), UNLESS there are very fresh results in the cache
	 * - `'async'` - kick off background calculation (returning immediately with a query status), UNLESS there are very fresh results in the cache
	 * - `'lazy_async'` - kick off background calculation, UNLESS there are somewhat fresh results in the cache
	 * - `'force_blocking'` - calculate synchronously, even if fresh results are already cached
	 * - `'force_async'` - kick off background calculation, even if fresh results are already cached
	 * Background calculation can be tracked using the `query_status` response field.
	 */
	public function insightsRetrieve(
		int $id,
		string $projectId,
		?string $format,
		?int $fromDashboard,
		?string $refresh,
	): Response
	{
		return $this->connector->send(new InsightsRetrieve($id, $projectId, $format, $fromDashboard, $refresh));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsDestroy(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsDestroy($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsPartialUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsPartialUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsActivityRetrieve2(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsActivityRetrieve2($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsViewedCreate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsViewedCreate($id, $projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsActivityRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsActivityRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsCancelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsCancelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsFunnelRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsFunnelRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsFunnelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsFunnelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsFunnelCorrelationRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsFunnelCorrelationRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsFunnelCorrelationCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsFunnelCorrelationCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsMyLastViewedRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsMyLastViewedRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsTimingCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsTimingCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsTrendRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsTrendRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function insightsTrendCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new InsightsTrendCreate($projectId, $format));
	}
}
