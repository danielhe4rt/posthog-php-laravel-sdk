<?php

namespace DanielHe4rt\PostHog;

use DanielHe4rt\PostHog\Requests\Capture;
use DanielHe4rt\PostHog\Resource\Actions;
use DanielHe4rt\PostHog\Resource\ActivityLog;
use DanielHe4rt\PostHog\Resource\Annotations;
use DanielHe4rt\PostHog\Resource\AppMetrics;
use DanielHe4rt\PostHog\Resource\BatchExports;
use DanielHe4rt\PostHog\Resource\Cohorts;
use DanielHe4rt\PostHog\Resource\Dashboards;
use DanielHe4rt\PostHog\Resource\DashboardTemplates;
use DanielHe4rt\PostHog\Resource\EarlyAccessFeature;
use DanielHe4rt\PostHog\Resource\Environments;
use DanielHe4rt\PostHog\Resource\EventDefinitions;
use DanielHe4rt\PostHog\Resource\Events;
use DanielHe4rt\PostHog\Resource\ExperimentHoldouts;
use DanielHe4rt\PostHog\Resource\Experiments;
use DanielHe4rt\PostHog\Resource\ExperimentSavedMetrics;
use DanielHe4rt\PostHog\Resource\ExplicitMembers;
use DanielHe4rt\PostHog\Resource\Exports;
use DanielHe4rt\PostHog\Resource\FeatureFlags;
use DanielHe4rt\PostHog\Resource\FileSystem;
use DanielHe4rt\PostHog\Resource\Groups;
use DanielHe4rt\PostHog\Resource\GroupsTypes;
use DanielHe4rt\PostHog\Resource\Insights;
use DanielHe4rt\PostHog\Resource\Notebooks;
use DanielHe4rt\PostHog\Resource\Organizations;
use DanielHe4rt\PostHog\Resource\Persons;
use DanielHe4rt\PostHog\Resource\PluginConfigs;
use DanielHe4rt\PostHog\Resource\PropertyDefinitions;
use DanielHe4rt\PostHog\Resource\Query;
use DanielHe4rt\PostHog\Resource\SessionRecordingPlaylists;
use DanielHe4rt\PostHog\Resource\SessionRecordings;
use DanielHe4rt\PostHog\Resource\Sessions;
use DanielHe4rt\PostHog\Resource\Subscriptions;
use DanielHe4rt\PostHog\Resource\Surveys;
use DanielHe4rt\PostHog\Resource\Users;
use DanielHe4rt\PostHog\Resource\WebExperiments;
use Saloon\Contracts\Body\HasBody;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Repositories\Body\JsonBodyRepository;

/**
 * PostHog Connector
 */
class PostHogConnector extends Connector
{
    public function __construct(
        protected PostHogServersEnum $server,
        protected ?string            $apiKey,
        protected ?string            $personalApiKey,
    )
    {

    }

    public function send(HasBody|Request $request, ?MockClient $mockClient = null, ?callable $handleRetry = null): Response
    {
        if ($request instanceof Capture) {
            /* @var JsonBodyRepository $body */
            $payloadWithApiKey = array_merge($request->body()->all(), [
                'api_key' => $this->apiKey
            ]);
            $request->body()->set($payloadWithApiKey);
            return parent::send($request, $mockClient, $handleRetry);
        }

        return parent::send($request, $mockClient, $handleRetry);
    }


    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->personalApiKey);
    }

    public static function new(PostHogServersEnum $server, ?string $apiKey, ?string $personalApiKey): self
    {
        return new self($server, $apiKey, $personalApiKey);
    }

    public function resolveBaseUrl(): string
    {
        return $this->server->value;
    }


    public function actions(): Actions
    {
        return new Actions($this);
    }


    public function activityLog(): ActivityLog
    {
        return new ActivityLog($this);
    }


    public function annotations(): Annotations
    {
        return new Annotations($this);
    }


    public function appMetrics(): AppMetrics
    {
        return new AppMetrics($this);
    }


    public function batchExports(): BatchExports
    {
        return new BatchExports($this);
    }


    public function cohorts(): Cohorts
    {
        return new Cohorts($this);
    }


    public function dashboardTemplates(): DashboardTemplates
    {
        return new DashboardTemplates($this);
    }


    public function dashboards(): Dashboards
    {
        return new Dashboards($this);
    }


    public function earlyAccessFeature(): EarlyAccessFeature
    {
        return new EarlyAccessFeature($this);
    }


    public function environments(): Environments
    {
        return new Environments($this);
    }


    public function eventDefinitions(): EventDefinitions
    {
        return new EventDefinitions($this);
    }


    public function events(): Events
    {
        return new Events($this);
    }


    public function experimentHoldouts(): ExperimentHoldouts
    {
        return new ExperimentHoldouts($this);
    }


    public function experimentSavedMetrics(): ExperimentSavedMetrics
    {
        return new ExperimentSavedMetrics($this);
    }


    public function experiments(): Experiments
    {
        return new Experiments($this);
    }


    public function explicitMembers(): ExplicitMembers
    {
        return new ExplicitMembers($this);
    }


    public function exports(): Exports
    {
        return new Exports($this);
    }


    public function featureFlags(): FeatureFlags
    {
        return new FeatureFlags($this);
    }


    public function fileSystem(): FileSystem
    {
        return new FileSystem($this);
    }


    public function groups(): Groups
    {
        return new Groups($this);
    }


    public function groupsTypes(): GroupsTypes
    {
        return new GroupsTypes($this);
    }


    public function insights(): Insights
    {
        return new Insights($this);
    }


    public function notebooks(): Notebooks
    {
        return new Notebooks($this);
    }


    public function organizations(): Organizations
    {
        return new Organizations($this);
    }


    public function persons(): Persons
    {
        return new Persons($this);
    }


    public function pluginConfigs(): PluginConfigs
    {
        return new PluginConfigs($this);
    }


    public function propertyDefinitions(): PropertyDefinitions
    {
        return new PropertyDefinitions($this);
    }


    public function queryApi(): Query
    {
        return new Query($this);
    }


    public function sessionRecordingPlaylists(): SessionRecordingPlaylists
    {
        return new SessionRecordingPlaylists($this);
    }


    public function sessionRecordings(): SessionRecordings
    {
        return new SessionRecordings($this);
    }


    public function sessions(): Sessions
    {
        return new Sessions($this);
    }


    public function subscriptions(): Subscriptions
    {
        return new Subscriptions($this);
    }


    public function surveys(): Surveys
    {
        return new Surveys($this);
    }


    public function users(): Users
    {
        return new Users($this);
    }


    public function webExperiments(): WebExperiments
    {
        return new WebExperiments($this);
    }

    public function capture(array $payload): Response
    {
        return $this->send(new Capture($payload));
    }
}
