<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Surveys\SurveysActivityRetrieve;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysActivityRetrieve2;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysCreate;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysDestroy;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysList;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysPartialUpdate;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysResponsesCountRetrieve;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysRetrieve;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysSummarizeResponsesCreate;
use DanielHe4rt\PostHog\Requests\Surveys\SurveysUpdate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Surveys extends Resource
{
	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function surveysList(string $projectId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new SurveysList($projectId, $limit, $offset));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysCreate(string $projectId): Response
	{
		return $this->connector->send(new SurveysCreate($projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysRetrieve(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysRetrieve($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysDestroy(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysDestroy($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysPartialUpdate(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysPartialUpdate($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysActivityRetrieve2(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysActivityRetrieve2($id, $projectId));
	}


	/**
	 * @param string $id A UUID string identifying this survey.
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysSummarizeResponsesCreate(string $id, string $projectId): Response
	{
		return $this->connector->send(new SurveysSummarizeResponsesCreate($id, $projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysActivityRetrieve(string $projectId): Response
	{
		return $this->connector->send(new SurveysActivityRetrieve($projectId));
	}


	/**
	 * @param string $projectId Project ID of the project you're trying to access. To find the ID of the project, make a call to /api/projects/.
	 */
	public function surveysResponsesCountRetrieve(string $projectId): Response
	{
		return $this->connector->send(new SurveysResponsesCountRetrieve($projectId));
	}
}
