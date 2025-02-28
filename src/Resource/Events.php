<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Events\EventsList;
use DanielHe4rt\PostHog\Requests\Events\EventsRetrieve;
use DanielHe4rt\PostHog\Requests\Events\EventsValuesRetrieve;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Events extends Resource
{
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
	public function eventsList(
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
		return $this->connector->send(new EventsList($projectId, $before, $distinctId, $event, $format, $limit, $offset, $personId, $properties, $select, $where));
	}


	/**
	 * @param string $id
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function eventsRetrieve(string $id, string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EventsRetrieve($id, $projectId, $format));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param string $format
	 */
	public function eventsValuesRetrieve(string $projectId, ?string $format): Response
	{
		return $this->connector->send(new EventsValuesRetrieve($projectId, $format));
	}
}
