<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Persons\PersonsActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Persons\PersonsBulkDeleteCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsCohortsRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsDeletePropertyCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsDestroy;
use DanielHe4rt\PostHog\Requests\Persons\PersonsFunnelCorrelationCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsFunnelCorrelationRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsFunnelCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsFunnelRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsLifecycleRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsList;
use DanielHe4rt\PostHog\Requests\Persons\PersonsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsPropertiesTimelineRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsSplitCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsStickinessRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsTrendsRetrieve;
use DanielHe4rt\PostHog\Requests\Persons\PersonsUpdate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsUpdatePropertyCreate;
use DanielHe4rt\PostHog\Requests\Persons\PersonsValuesRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Persons extends Resource
{
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
	public function personsList(
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
		return $this->connector->send(new PersonsList($projectId, $distinctId, $email, $format, $limit, $offset, $properties, $search));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param string $format
	 */
	public function personsDestroy(int $id, string $projectId, ?bool $deleteEvents, ?string $format): Response
	{
		return $this->connector->send(new PersonsDestroy($id, $projectId, $deleteEvents, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsPartialUpdate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsPartialUpdate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsActivityRetrieve2(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsActivityRetrieve2($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $unset Specify the property key to delete
	 * @param string $format
	 */
	public function personsDeletePropertyCreate(int $id, string $projectId, string $unset, ?string $format): Response
	{
		return $this->connector->send(new PersonsDeletePropertyCreate($id, $projectId, $unset, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsPropertiesTimelineRetrieve(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsPropertiesTimelineRetrieve($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsSplitCreate(int $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsSplitCreate($id, $projectId, $format));
	}


	/**
	 * @param int $id A unique integer value identifying this person.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 * @param string $key Specify the property key
	 * @param mixed $value Specify the property value
	 */
	public function personsUpdatePropertyCreate(
		int $id,
		string $projectId,
		?string $format,
		string $key,
		mixed $value,
	): Response
	{
		return $this->connector->send(new PersonsUpdatePropertyCreate($id, $projectId, $format, $key, $value));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsActivityRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsActivityRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param bool $deleteEvents If true, a task to delete all events associated with this person will be created and queued. The task does not run immediately and instead is batched together and at 5AM UTC every Sunday
	 * @param array $distinctIds A list of distinct IDs, up to 100 of them. We'll delete all persons associated with those distinct IDs.
	 * @param string $format
	 * @param array $ids A list of PostHog person IDs, up to 100 of them. We'll delete all the persons listed.
	 */
	public function personsBulkDeleteCreate(
		string $projectId,
		?bool $deleteEvents,
		?array $distinctIds,
		?string $format,
		?array $ids,
	): Response
	{
		return $this->connector->send(new PersonsBulkDeleteCreate($projectId, $deleteEvents, $distinctIds, $format, $ids));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsCohortsRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsCohortsRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsFunnelRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsFunnelRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsFunnelCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsFunnelCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsFunnelCorrelationRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsFunnelCorrelationRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsFunnelCorrelationCreate(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsFunnelCorrelationCreate($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsLifecycleRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsLifecycleRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsStickinessRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsStickinessRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsTrendsRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsTrendsRetrieve($projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function personsValuesRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new PersonsValuesRetrieve($projectId, $format));
	}
}
