<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesCreate;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesDestroy;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesJsonSchemaRetrieve;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesList;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesPartialUpdate;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesRetrieve;
use DanielHe4rt\PostHog\Requests\DashboardTemplates\DashboardTemplatesUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class DashboardTemplates extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function dashboardTemplatesList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new DashboardTemplatesList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesCreate(string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesCreate($projectId));
	}


	/**
	 * @param string $id A UUID string identifying this dashboard template.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this dashboard template.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this dashboard template.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this dashboard template.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function dashboardTemplatesJsonSchemaRetrieve(string $projectId): Response
	{
		return $this->connector->send(new DashboardTemplatesJsonSchemaRetrieve($projectId));
	}
}
