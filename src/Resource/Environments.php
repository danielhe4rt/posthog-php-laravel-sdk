<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsAddProductIntentPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsAppMetricsErrorDetailsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsAppMetricsHistoricalExportsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsAppMetricsHistoricalExportsRetrieve2;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsAppMetricsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsBackfillCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsBackfillsCancelCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsBackfillsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsBackfillsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsBackfillsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsLogsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsPauseCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRunsCancelCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRunsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRunsLogsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRunsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsRunsRetryCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsUnpauseCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsBatchExportsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsCompleteProductOnboardingPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsCollaboratorsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsCollaboratorsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsCollaboratorsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsCreateFromTemplateJsonCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsMoveTilePartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsSharingList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDashboardsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsEventsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsEventsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsEventsValuesRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExplicitMembersUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExportsContentRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExportsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExportsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsExportsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsGroupsFindRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsGroupsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsGroupsPropertyDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsGroupsPropertyValuesRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsGroupsRelatedRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsCancelCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsFunnelCorrelationCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsFunnelCorrelationRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsFunnelCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsFunnelRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsMyLastViewedRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsSharingList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsTimingCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsTrendCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsTrendRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsInsightsViewedCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsIsGeneratingDemoDataRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsBulkDeleteCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsCohortsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsDeletePropertyCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsFunnelCorrelationCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsFunnelCorrelationRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsFunnelCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsFunnelRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsLifecycleRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsPropertiesTimelineRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsSplitCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsStickinessRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsTrendsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsUpdatePropertyCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPersonsValuesRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsPluginConfigsLogsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsQueryCheckAuthForAsyncCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsQueryCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsQueryDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsQueryDraftSqlRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsQueryRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsResetTokenPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsRecordingsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsRecordingsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsRecordingsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingPlaylistsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsAiFiltersCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsAiRegexCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsSharingList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionRecordingsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionsPropertyDefinitionsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSessionsValuesRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsCreate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsDestroy;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsList;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsRetrieve;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsSubscriptionsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsUpdate;
use DanielHe4rt\PostHog\Requests\Environments\EnvironmentsWebVitalsRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Environments extends Resource
{
	/**
	 * @param int $id A unique integer value identifying this plugin config.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsAppMetricsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsAppMetricsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this plugin config.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsAppMetricsErrorDetailsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsAppMetricsErrorDetailsRetrieve($id, $projectId));
	}


	/**
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsAppMetricsHistoricalExportsRetrieve(string $pluginConfigId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsAppMetricsHistoricalExportsRetrieve($pluginConfigId, $projectId));
	}


	/**
	 * @param string $id
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsAppMetricsHistoricalExportsRetrieve2(
		string $id,
		string $pluginConfigId,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsAppMetricsHistoricalExportsRetrieve2($id, $pluginConfigId, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsBatchExportsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsCreate($projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param string $ordering Which field to use when ordering the results.
	 */
	public function environmentsBatchExportsBackfillsList(
		string $batchExportId,
		string $projectId,
		?string $cursor,
		?string $ordering,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsBackfillsList($batchExportId, $projectId, $cursor, $ordering));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsBackfillsCreate(string $batchExportId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsBackfillsCreate($batchExportId, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export backfill.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsBackfillsRetrieve(
		string $batchExportId,
		string $id,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsBackfillsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export backfill.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsBackfillsCancelCreate(
		string $batchExportId,
		string $id,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsBackfillsCancelCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param string $ordering Which field to use when ordering the results.
	 */
	public function environmentsBatchExportsRunsList(
		string $batchExportId,
		string $projectId,
		?string $cursor,
		?string $ordering,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRunsList($batchExportId, $projectId, $cursor, $ordering));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsRunsRetrieve(string $batchExportId, string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRunsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsRunsCancelCreate(
		string $batchExportId,
		string $id,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRunsCancelCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsRunsLogsRetrieve(
		string $batchExportId,
		string $id,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRunsLogsRetrieve($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $batchExportId
	 * @param string $id A UUID string identifying this batch export run.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsRunsRetryCreate(
		string $batchExportId,
		string $id,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRunsRetryCreate($batchExportId, $id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsBackfillCreate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsBackfillCreate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsLogsRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsLogsRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsPauseCreate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsPauseCreate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsBatchExportsUnpauseCreate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsBatchExportsUnpauseCreate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsDashboardsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsCreate($projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsCollaboratorsList(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsCollaboratorsList($dashboardId, $projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsCollaboratorsCreate(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsCollaboratorsCreate($dashboardId, $projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $userUuid
	 */
	public function environmentsDashboardsCollaboratorsDestroy(
		int $dashboardId,
		string $projectId,
		string $userUuid,
	): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsCollaboratorsDestroy($dashboardId, $projectId, $userUuid));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsSharingList(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsSharingList($dashboardId, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsMoveTilePartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsMoveTilePartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDashboardsCreateFromTemplateJsonCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDashboardsCreateFromTemplateJsonCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $before Only return events with a timestamp before this time.
	 * @param int $distinctId Filter list by distinct id.
	 * @param string $event Filter list by event. For example `user sign up` or `$pageview`.
	 * @param string $format
	 * @param int $limit The maximum number of results to return
	 * @param int $offset The initial index from which to return the results.
	 * @param int $personId Filter list by person id.
	 * @param array $properties Filter events by event property, person property, cohort, groups and more.
	 * @param array $select (Experimental) JSON-serialized array of HogQL expressions to return
	 * @param array $where (Experimental) JSON-serialized array of HogQL expressions that must pass
	 */
	public function environmentsEventsList(
		string $projectId,
		?string $before,
		?int $distinctId,
		?string $event,
		?string $format,
		?int $limit,
		?int $offset,
		?int $personId,
		?array $properties,
		?array $select,
		?array $where,
	): Response
	{
		return $this->connector->send(new EnvironmentsEventsList($projectId, $before, $distinctId, $event, $format, $limit, $offset, $personId, $properties, $select, $where));
	}


	/**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsEventsRetrieve(string $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsEventsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsEventsValuesRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsEventsValuesRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersList(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersList($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersCreate($projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersRetrieve(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersRetrieve($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersUpdate(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersUpdate($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersDestroy(string $parentMembershipUserUuid, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersDestroy($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $parentMembershipUserUuid
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExplicitMembersPartialUpdate(
		string $parentMembershipUserUuid,
		string $projectId,
	): Response
	{
		return $this->connector->send(new EnvironmentsExplicitMembersPartialUpdate($parentMembershipUserUuid, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsExportsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsExportsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExportsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExportsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this exported asset.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExportsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExportsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this exported asset.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsExportsContentRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsExportsContentRetrieve($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $cursor The pagination cursor value.
	 * @param int $groupTypeIndex Specify the group type to list
	 * @param string $search Search the group name
	 */
	public function environmentsGroupsList(
		string $projectId,
		?string $cursor,
		int $groupTypeIndex,
		string $search,
	): Response
	{
		return $this->connector->send(new EnvironmentsGroupsList($projectId, $cursor, $groupTypeIndex, $search));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $groupKey Specify the key of the group to find
	 * @param int $groupTypeIndex Specify the group type to find
	 */
	public function environmentsGroupsFindRetrieve(string $projectId, string $groupKey, int $groupTypeIndex): Response
	{
		return $this->connector->send(new EnvironmentsGroupsFindRetrieve($projectId, $groupKey, $groupTypeIndex));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsGroupsPropertyDefinitionsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsGroupsPropertyDefinitionsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsGroupsPropertyValuesRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsGroupsPropertyValuesRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $groupTypeIndex Specify the group type to find
	 * @param string $id Specify the id of the user to find groups for
	 */
	public function environmentsGroupsRelatedRetrieve(string $projectId, int $groupTypeIndex, string $id): Response
	{
		return $this->connector->send(new EnvironmentsGroupsRelatedRetrieve($projectId, $groupTypeIndex, $id));
	}


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
	public function environmentsInsightsList(
		string $projectId,
		?int $createdBy,
		?string $format,
		?int $limit,
		?int $offset,
		?string $refresh,
		?string $shortId,
	): Response
	{
		return $this->connector->send(new EnvironmentsInsightsList($projectId, $createdBy, $format, $limit, $offset, $refresh, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsCreate($projectId, $format));
	}


	/**
	 * @param int $insightId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsInsightsSharingList(int $insightId, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsInsightsSharingList($insightId, $projectId));
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
	public function environmentsInsightsRetrieve(
		int $id,
		string $projectId,
		?string $format,
		?int $fromDashboard,
		?string $refresh,
	): Response
	{
		return $this->connector->send(new EnvironmentsInsightsRetrieve($id, $projectId, $format, $fromDashboard, $refresh));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsDestroy(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsDestroy($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsPartialUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsPartialUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsActivityRetrieve2(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsActivityRetrieve2($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this insight.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsViewedCreate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsViewedCreate($id, $projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsActivityRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsActivityRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsCancelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsCancelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsFunnelRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsFunnelRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsFunnelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsFunnelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsFunnelCorrelationRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsFunnelCorrelationRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsFunnelCorrelationCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsFunnelCorrelationCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsMyLastViewedRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsMyLastViewedRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsTimingCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsTimingCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsTrendRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsTrendRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsInsightsTrendCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsInsightsTrendCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $distinctId Filter list by distinct id.
	 * @param string $email Filter persons by email (exact match)
	 * @param string $format
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param array $properties Filter Persons by person properties.
	 * @param string $search Search persons, either by email (full text search) or distinct_id (exact match).
	 */
	public function environmentsPersonsList(
		string $projectId,
		?string $distinctId,
		?string $email,
		?string $format,
		?int $limit,
		?int $offset,
		?array $properties,
		?string $search,
	): Response
	{
		return $this->connector->send(new EnvironmentsPersonsList($projectId, $distinctId, $email, $format, $limit, $offset, $properties, $search));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param string $format
	 */
	public function environmentsPersonsDestroy(
		int $id,
		string $projectId,
		?bool $deleteEvents,
		?string $format,
	): Response
	{
		return $this->connector->send(new EnvironmentsPersonsDestroy($id, $projectId, $deleteEvents, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsPartialUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsPartialUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsActivityRetrieve2(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsActivityRetrieve2($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $unset Specify the property key to delete
	 * @param string $format
	 */
	public function environmentsPersonsDeletePropertyCreate(
		int $id,
		string $projectId,
		string $unset,
		?string $format,
	): Response
	{
		return $this->connector->send(new EnvironmentsPersonsDeletePropertyCreate($id, $projectId, $unset, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsPropertiesTimelineRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsPropertiesTimelineRetrieve($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsSplitCreate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsSplitCreate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 * @param string $key Specify the property key
	 * @param mixed $value Specify the property value
	 */
	public function environmentsPersonsUpdatePropertyCreate(
		int $id,
		string $projectId,
		?string $format,
		string $key,
		mixed $value,
	): Response
	{
		return $this->connector->send(new EnvironmentsPersonsUpdatePropertyCreate($id, $projectId, $format, $key, $value));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsActivityRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsActivityRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param array $distinctIds A list of distinct IDs, up to 100 of them. We'll delete all persons associated with those distinct IDs.
	 * @param string $format
	 * @param array $ids A list of PostHog person IDs, up to 100 of them. We'll delete all the persons listed.
	 */
	public function environmentsPersonsBulkDeleteCreate(
		string $projectId,
		?bool $deleteEvents,
		?array $distinctIds,
		?string $format,
		?array $ids,
	): Response
	{
		return $this->connector->send(new EnvironmentsPersonsBulkDeleteCreate($projectId, $deleteEvents, $distinctIds, $format, $ids));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsCohortsRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsCohortsRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsFunnelRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsFunnelRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsFunnelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsFunnelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsFunnelCorrelationRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsFunnelCorrelationRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsFunnelCorrelationCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsFunnelCorrelationCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsLifecycleRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsLifecycleRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsStickinessRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsStickinessRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsTrendsRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsTrendsRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function environmentsPersonsValuesRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EnvironmentsPersonsValuesRetrieve($projectId, $format));
	}


	/**
	 * @param string $pluginConfigId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsPluginConfigsLogsList(
		string $pluginConfigId,
		string $projectId,
		?int $limit,
		?int $offset,
	): Response
	{
		return $this->connector->send(new EnvironmentsPluginConfigsLogsList($pluginConfigId, $projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsQueryCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsQueryCreate($projectId));
	}


	/**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsQueryRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsQueryRetrieve($id, $projectId));
	}


	/**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsQueryDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsQueryDestroy($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsQueryCheckAuthForAsyncCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsQueryCheckAuthForAsyncCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsQueryDraftSqlRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsQueryDraftSqlRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $createdBy
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsList(
		string $projectId,
		?int $createdBy,
		?int $limit,
		?int $offset,
		?string $shortId,
	): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsList($projectId, $createdBy, $limit, $offset, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingPlaylistsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsRetrieve(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsRetrieve($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsDestroy(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsDestroy($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsPartialUpdate(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsPartialUpdate($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsRecordingsRetrieve(string $projectId, string $shortId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsRecordingsRetrieve($projectId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $sessionRecordingId
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsRecordingsCreate(
		string $projectId,
		string $sessionRecordingId,
		string $shortId,
	): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsRecordingsCreate($projectId, $sessionRecordingId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $sessionRecordingId
	 * @param string $shortId
	 */
	public function environmentsSessionRecordingPlaylistsRecordingsDestroy(
		string $projectId,
		string $sessionRecordingId,
		string $shortId,
	): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingPlaylistsRecordingsDestroy($projectId, $sessionRecordingId, $shortId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsSessionRecordingsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this session recording.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $recordingId
	 */
	public function environmentsSessionRecordingsSharingList(string $projectId, string $recordingId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsSharingList($projectId, $recordingId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsAiFiltersCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsAiFiltersCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionRecordingsAiRegexCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionRecordingsAiRegexCreate($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionsPropertyDefinitionsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionsPropertyDefinitionsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSessionsValuesRetrieve(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSessionsValuesRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsSubscriptionsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSubscriptionsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSubscriptionsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSubscriptionsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSubscriptionsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsSubscriptionsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsSubscriptionsPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $pathname Filter web vitals by pathname
	 */
	public function environmentsWebVitalsRetrieve(string $projectId, string $pathname): Response
	{
		return $this->connector->send(new EnvironmentsWebVitalsRetrieve($projectId, $pathname));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function environmentsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new EnvironmentsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsCreate(string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsActivityRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsActivityRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsAddProductIntentPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsAddProductIntentPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsCompleteProductOnboardingPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsCompleteProductOnboardingPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsIsGeneratingDemoDataRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsIsGeneratingDemoDataRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this environment (aka team).
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function environmentsResetTokenPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new EnvironmentsResetTokenPartialUpdate($id, $projectId));
	}
}
