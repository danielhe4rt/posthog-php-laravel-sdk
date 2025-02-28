<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsCreate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsCreateStaticCohortForFlagCreate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsDashboardCreate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsDestroy;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsEnrichUsageDashboardCreate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsEvaluationReasonsRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsList;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsLocalEvaluationRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsMyFlagsRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsPartialUpdate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRemoteConfigRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRoleAccessCreate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRoleAccessDestroy;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRoleAccessList;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsRoleAccessRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsStatusRetrieve;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsUpdate;
use DanielHe4rt\PostHog\Requests\FeatureFlags\FeatureFlagsUserBlastRadiusCreate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class FeatureFlags extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $active
	 * @param string $createdById The User ID which initially created the feature flag.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $search Search by feature flag key or name. Case insensitive.
	 * @param string $type
	 */
	public function featureFlagsList(
		string $projectId,
		?string $active,
		?string $createdById,
		?int $limit,
		?int $offset,
		?string $search,
		?string $type,
	): Response
	{
		return $this->connector->send(new FeatureFlagsList($projectId, $active, $createdById, $limit, $offset, $search, $type));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsCreate(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsCreate($projectId));
	}


	/**
	 * @param int $featureFlagId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function featureFlagsRoleAccessList(
		int $featureFlagId,
		string $projectId,
		?int $limit,
		?int $offset,
	): Response
	{
		return $this->connector->send(new FeatureFlagsRoleAccessList($featureFlagId, $projectId, $limit, $offset));
	}


	/**
	 * @param int $featureFlagId
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsRoleAccessCreate(int $featureFlagId, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsRoleAccessCreate($featureFlagId, $projectId));
	}


	/**
	 * @param int $featureFlagId
	 * @param int $id A unique integer value identifying this feature flag role access.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsRoleAccessRetrieve(int $featureFlagId, int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsRoleAccessRetrieve($featureFlagId, $id, $projectId));
	}


	/**
	 * @param int $featureFlagId
	 * @param int $id A unique integer value identifying this feature flag role access.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsRoleAccessDestroy(int $featureFlagId, int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsRoleAccessDestroy($featureFlagId, $id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsPartialUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsActivityRetrieve2(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsActivityRetrieve2($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsCreateStaticCohortForFlagCreate(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsCreateStaticCohortForFlagCreate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsDashboardCreate(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsDashboardCreate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsEnrichUsageDashboardCreate(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsEnrichUsageDashboardCreate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsRemoteConfigRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsRemoteConfigRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this feature flag.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsStatusRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsStatusRetrieve($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsActivityRetrieve(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsActivityRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsEvaluationReasonsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsEvaluationReasonsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsLocalEvaluationRetrieve(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsLocalEvaluationRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsMyFlagsRetrieve(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsMyFlagsRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function featureFlagsUserBlastRadiusCreate(string $projectId): Response
	{
		return $this->connector->send(new FeatureFlagsUserBlastRadiusCreate($projectId));
	}
}
