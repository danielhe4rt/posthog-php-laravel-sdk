<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsCreate;
use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsDestroy;
use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsList;
use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsPartialUpdate;
use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsRetrieve;
use DanielHe4rt\PostHog\Requests\Annotations\AnnotationsUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Annotations extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 * @param string $search A search term.
	 */
	public function annotationsList(string $projectId, ?int $limit, ?int $offset, ?string $search): Response
	{
		return $this->connector->send(new AnnotationsList($projectId, $limit, $offset, $search));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function annotationsCreate(string $projectId): Response
	{
		return $this->connector->send(new AnnotationsCreate($projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this annotation.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function annotationsRetrieve(int $id, string $projectId): Response
	{
		return $this->connector->send(new AnnotationsRetrieve($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this annotation.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function annotationsUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new AnnotationsUpdate($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this annotation.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function annotationsDestroy(int $id, string $projectId): Response
	{
		return $this->connector->send(new AnnotationsDestroy($id, $projectId));
	}


	/**
	 * @param int $id A unique integer value identifying this annotation.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function annotationsPartialUpdate(int $id, string $projectId): Response
	{
		return $this->connector->send(new AnnotationsPartialUpdate($id, $projectId));
	}
}
