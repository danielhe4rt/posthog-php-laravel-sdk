<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsBackfillCreate2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsBackfillsCancelCreate;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsBackfillsCreate;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsBackfillsList;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsBackfillsRetrieve;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsCreate2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsDestroy2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsList2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsLogsRetrieve2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsPartialUpdate2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsPauseCreate2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRetrieve2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRunsCancelCreate;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRunsList;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRunsLogsRetrieve;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRunsRetrieve;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsRunsRetryCreate;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsUnpauseCreate2;
use DanielHe4rt\PostHog\Requests\BatchExports\BatchExportsUpdate2;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class BatchExports extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function batchExportsList2(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new BatchExportsList2($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsCreate2(string $projectId): Response
	{
		return $this->connector->send(new BatchExportsCreate2($projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param string $ordering Which field to use when ordering the results.
	 */
	public function batchExportsBackfillsList(
		string $batchExportId,
		string $projectId,
		?string $cursor,
		?string $ordering,
	): Response
	{
		return $this->connector->send(new BatchExportsBackfillsList($batchExportId, $projectId, $cursor, $ordering));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsBackfillsCreate(string $batchExportId, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsBackfillsCreate($batchExportId, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export backfill.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsBackfillsRetrieve(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsBackfillsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export backfill.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsBackfillsCancelCreate(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsBackfillsCancelCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param string $ordering Which field to use when ordering the results.
	 */
	public function batchExportsRunsList(
		string $batchExportId,
		string $projectId,
		?string $cursor,
		?string $ordering,
	): Response
	{
		return $this->connector->send(new BatchExportsRunsList($batchExportId, $projectId, $cursor, $ordering));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsRunsRetrieve(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsRunsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsRunsCancelCreate(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsRunsCancelCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsRunsLogsRetrieve(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsRunsLogsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsRunsRetryCreate(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsRunsRetryCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsRetrieve2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsRetrieve2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsUpdate2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsUpdate2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsDestroy2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsDestroy2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsPartialUpdate2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsPartialUpdate2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsBackfillCreate2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsBackfillCreate2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsLogsRetrieve2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsLogsRetrieve2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsPauseCreate2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsPauseCreate2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function batchExportsUnpauseCreate2(string $id, string $projectId): Response
	{
		return $this->connector->send(new BatchExportsUnpauseCreate2($id, $projectId));
	}
}
