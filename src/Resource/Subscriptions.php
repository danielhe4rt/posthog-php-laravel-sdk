<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsCreate;
use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsDestroy;
use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsList;
use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsRetrieve;
use DanielHe4rt\PostHog\Requests\Subscriptions\SubscriptionsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Subscriptions extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function subscriptionsList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new SubscriptionsList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function subscriptionsCreate(string $projectId): Response
	{
		return $this->connector->send(new SubscriptionsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function subscriptionsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new SubscriptionsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function subscriptionsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new SubscriptionsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function subscriptionsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new SubscriptionsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this subscription.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function subscriptionsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new SubscriptionsPartialUpdate($id, $projectId));
	}
}
