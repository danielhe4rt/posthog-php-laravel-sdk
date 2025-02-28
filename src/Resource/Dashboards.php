<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsCollaboratorsCreate;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsCollaboratorsDestroy;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsCollaboratorsList;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsCreate;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsCreateFromTemplateJsonCreate;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsDestroy;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsList;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsMoveTilePartialUpdate;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsRetrieve;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsSharingList;
use DanielHe4rt\PostHog\Requests\Dashboards\DashboardsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Dashboards extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function dashboardsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new DashboardsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsCreate(string $projectId): Response
	{
		return $this->connector->send(new DashboardsCreate($projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsCollaboratorsList(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new DashboardsCollaboratorsList($dashboardId, $projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsCollaboratorsCreate(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new DashboardsCollaboratorsCreate($dashboardId, $projectId));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $userUuid
	 */
	public function dashboardsCollaboratorsDestroy(int $dashboardId, string $projectId, string $userUuid): Response
	{
		return $this->connector->send(new DashboardsCollaboratorsDestroy($dashboardId, $projectId, $userUuid));
	}


	/**
	 * @param int $dashboardId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsSharingList(int $dashboardId, string $projectId): Response
	{
		return $this->connector->send(new DashboardsSharingList($dashboardId, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this dashboard.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsMoveTilePartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardsMoveTilePartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardsCreateFromTemplateJsonCreate(string $projectId): Response
	{
		return $this->connector->send(new DashboardsCreateFromTemplateJsonCreate($projectId));
	}
}
