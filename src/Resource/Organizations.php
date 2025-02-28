<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Organizations\ActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\AddProductIntentPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsBackfillCreate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsCreate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsList;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsLogsRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsPauseCreate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsUnpauseCreate;
use DanielHe4rt\PostHog\Requests\Organizations\BatchExportsUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\ChangeOrganizationCreate;
use DanielHe4rt\PostHog\Requests\Organizations\CompleteProductOnboardingPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\Create;
use DanielHe4rt\PostHog\Requests\Organizations\Create2;
use DanielHe4rt\PostHog\Requests\Organizations\Destroy;
use DanielHe4rt\PostHog\Requests\Organizations\Destroy2;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsCreate;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsList;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\DomainsVerifyCreate;
use DanielHe4rt\PostHog\Requests\Organizations\InvitesBulkCreate;
use DanielHe4rt\PostHog\Requests\Organizations\InvitesCreate;
use DanielHe4rt\PostHog\Requests\Organizations\InvitesDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\InvitesList;
use DanielHe4rt\PostHog\Requests\Organizations\IsGeneratingDemoDataRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\List2;
use DanielHe4rt\PostHog\Requests\Organizations\ListRequest;
use DanielHe4rt\PostHog\Requests\Organizations\MembersDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\MembersList;
use DanielHe4rt\PostHog\Requests\Organizations\MembersPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\MembersUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\PartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\PartialUpdate2;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsCreate;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsList;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\ProxyRecordsUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\ResetTokenPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\Retrieve;
use DanielHe4rt\PostHog\Requests\Organizations\Retrieve2;
use DanielHe4rt\PostHog\Requests\Organizations\RolesCreate;
use DanielHe4rt\PostHog\Requests\Organizations\RolesDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\RolesList;
use DanielHe4rt\PostHog\Requests\Organizations\RolesPartialUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\RolesRetrieve;
use DanielHe4rt\PostHog\Requests\Organizations\RolesRoleMembershipsCreate;
use DanielHe4rt\PostHog\Requests\Organizations\RolesRoleMembershipsDestroy;
use DanielHe4rt\PostHog\Requests\Organizations\RolesRoleMembershipsList;
use DanielHe4rt\PostHog\Requests\Organizations\RolesUpdate;
use DanielHe4rt\PostHog\Requests\Organizations\Update;
use DanielHe4rt\PostHog\Requests\Organizations\Update2;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Organizations extends Resource
{
	/**
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function listRequest(?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ListRequest($limit, $offset));
	}


	public function create(): Response
	{
		return $this->connector->send(new Create());
	}


	/**
	 * @param string $id A UUID string identifying this organization.
	 */
	public function retrieve(string $id): Response
	{
		return $this->connector->send(new Retrieve($id));
	}


	/**
	 * @param string $id A UUID string identifying this organization.
	 */
	public function update(string $id): Response
	{
		return $this->connector->send(new Update($id));
	}


	/**
	 * @param string $id A UUID string identifying this organization.
	 */
	public function destroy(string $id): Response
	{
		return $this->connector->send(new Destroy($id));
	}


	/**
	 * @param string $id A UUID string identifying this organization.
	 */
	public function partialUpdate(string $id): Response
	{
		return $this->connector->send(new PartialUpdate($id));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function batchExportsList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new BatchExportsList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function batchExportsCreate(string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsCreate($organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsRetrieve(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsRetrieve($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsUpdate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsDestroy(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsDestroy($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsPartialUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsPartialUpdate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsBackfillCreate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsBackfillCreate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsLogsRetrieve(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsLogsRetrieve($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsPauseCreate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsPauseCreate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this batch export.
	 * @param string $organizationId
	 */
	public function batchExportsUnpauseCreate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new BatchExportsUnpauseCreate($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function domainsList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new DomainsList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function domainsCreate(string $organizationId): Response
	{
		return $this->connector->send(new DomainsCreate($organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function domainsRetrieve(string $id, string $organizationId): Response
	{
		return $this->connector->send(new DomainsRetrieve($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function domainsUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new DomainsUpdate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function domainsDestroy(string $id, string $organizationId): Response
	{
		return $this->connector->send(new DomainsDestroy($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function domainsPartialUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new DomainsPartialUpdate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this domain.
	 * @param string $organizationId
	 */
	public function domainsVerifyCreate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new DomainsVerifyCreate($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function invitesList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new InvitesList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function invitesCreate(string $organizationId): Response
	{
		return $this->connector->send(new InvitesCreate($organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this organization invite.
	 * @param string $organizationId
	 */
	public function invitesDestroy(string $id, string $organizationId): Response
	{
		return $this->connector->send(new InvitesDestroy($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 */
	public function invitesBulkCreate(string $organizationId): Response
	{
		return $this->connector->send(new InvitesBulkCreate($organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function membersList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new MembersList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 * @param string $userUuid
	 */
	public function membersUpdate(string $organizationId, string $userUuid): Response
	{
		return $this->connector->send(new MembersUpdate($organizationId, $userUuid));
	}


	/**
	 * @param string $organizationId
	 * @param string $userUuid
	 */
	public function membersDestroy(string $organizationId, string $userUuid): Response
	{
		return $this->connector->send(new MembersDestroy($organizationId, $userUuid));
	}


	/**
	 * @param string $organizationId
	 * @param string $userUuid
	 */
	public function membersPartialUpdate(string $organizationId, string $userUuid): Response
	{
		return $this->connector->send(new MembersPartialUpdate($organizationId, $userUuid));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function list2(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new List2($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function create2(string $organizationId): Response
	{
		return $this->connector->send(new Create2($organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function retrieve2(int $id, string $organizationId): Response
	{
		return $this->connector->send(new Retrieve2($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function update2(int $id, string $organizationId): Response
	{
		return $this->connector->send(new Update2($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function destroy2(int $id, string $organizationId): Response
	{
		return $this->connector->send(new Destroy2($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function partialUpdate2(int $id, string $organizationId): Response
	{
		return $this->connector->send(new PartialUpdate2($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function activityRetrieve(int $id, string $organizationId): Response
	{
		return $this->connector->send(new ActivityRetrieve($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function addProductIntentPartialUpdate(int $id, string $organizationId): Response
	{
		return $this->connector->send(new AddProductIntentPartialUpdate($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function changeOrganizationCreate(int $id, string $organizationId): Response
	{
		return $this->connector->send(new ChangeOrganizationCreate($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function completeProductOnboardingPartialUpdate(int $id, string $organizationId): Response
	{
		return $this->connector->send(new CompleteProductOnboardingPartialUpdate($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function isGeneratingDemoDataRetrieve(int $id, string $organizationId): Response
	{
		return $this->connector->send(new IsGeneratingDemoDataRetrieve($id, $organizationId));
	}


	/**
	 * @param int $id A unique value identifying this project.
	 * @param string $organizationId
	 */
	public function resetTokenPartialUpdate(int $id, string $organizationId): Response
	{
		return $this->connector->send(new ResetTokenPartialUpdate($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function proxyRecordsList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ProxyRecordsList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function proxyRecordsCreate(string $organizationId): Response
	{
		return $this->connector->send(new ProxyRecordsCreate($organizationId));
	}


	/**
	 * @param string $id
	 * @param string $organizationId
	 */
	public function proxyRecordsRetrieve(string $id, string $organizationId): Response
	{
		return $this->connector->send(new ProxyRecordsRetrieve($id, $organizationId));
	}


	/**
	 * @param string $id
	 * @param string $organizationId
	 */
	public function proxyRecordsUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new ProxyRecordsUpdate($id, $organizationId));
	}


	/**
	 * @param string $id
	 * @param string $organizationId
	 */
	public function proxyRecordsDestroy(string $id, string $organizationId): Response
	{
		return $this->connector->send(new ProxyRecordsDestroy($id, $organizationId));
	}


	/**
	 * @param string $id
	 * @param string $organizationId
	 */
	public function proxyRecordsPartialUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new ProxyRecordsPartialUpdate($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function rolesList(string $organizationId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new RolesList($organizationId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 */
	public function rolesCreate(string $organizationId): Response
	{
		return $this->connector->send(new RolesCreate($organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this role.
	 * @param string $organizationId
	 */
	public function rolesRetrieve(string $id, string $organizationId): Response
	{
		return $this->connector->send(new RolesRetrieve($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this role.
	 * @param string $organizationId
	 */
	public function rolesUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new RolesUpdate($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this role.
	 * @param string $organizationId
	 */
	public function rolesDestroy(string $id, string $organizationId): Response
	{
		return $this->connector->send(new RolesDestroy($id, $organizationId));
	}


	/**
	 * @param string $id A UUID string identifying this role.
	 * @param string $organizationId
	 */
	public function rolesPartialUpdate(string $id, string $organizationId): Response
	{
		return $this->connector->send(new RolesPartialUpdate($id, $organizationId));
	}


	/**
	 * @param string $organizationId
	 * @param string $roleId
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function rolesRoleMembershipsList(string $organizationId, string $roleId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new RolesRoleMembershipsList($organizationId, $roleId, $limit, $offset));
	}


	/**
	 * @param string $organizationId
	 * @param string $roleId
	 */
	public function rolesRoleMembershipsCreate(string $organizationId, string $roleId): Response
	{
		return $this->connector->send(new RolesRoleMembershipsCreate($organizationId, $roleId));
	}


	/**
	 * @param string $id A UUID string identifying this role membership.
	 * @param string $organizationId
	 * @param string $roleId
	 */
	public function rolesRoleMembershipsDestroy(string $id, string $organizationId, string $roleId): Response
	{
		return $this->connector->send(new RolesRoleMembershipsDestroy($id, $organizationId, $roleId));
	}
}
