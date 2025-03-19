<?php

namespace DanielHe4rt\PostHog\Query;


enum QueryKindEnum: string
{
    // Data nodes
    case EventsNode = 'EventsNode';
    case ActionsNode = 'ActionsNode';
    case DataWarehouseNode = 'DataWarehouseNode';
    case EventsQuery = 'EventsQuery';
    case PersonsNode = 'PersonsNode';
    case HogQuery = 'HogQuery';
    case HogQLQuery = 'HogQLQuery';
    case HogQLASTQuery = 'HogQLASTQuery';
    case HogQLMetadata = 'HogQLMetadata';
    case HogQLAutocomplete = 'HogQLAutocomplete';
    case ActorsQuery = 'ActorsQuery';
    case FunnelsActorsQuery = 'FunnelsActorsQuery';
    case FunnelCorrelationActorsQuery = 'FunnelCorrelationActorsQuery';
    case SessionsTimelineQuery = 'SessionsTimelineQuery';
    case RecordingsQuery = 'RecordingsQuery';
    case SessionAttributionExplorerQuery = 'SessionAttributionExplorerQuery';
    case RevenueExampleEventsQuery = 'RevenueExampleEventsQuery';
    case RevenueExampleDataWarehouseTablesQuery = 'RevenueExampleDataWarehouseTablesQuery';
    case ErrorTrackingQuery = 'ErrorTrackingQuery';

    // Interface nodes
    case DataTableNode = 'DataTableNode';
    case DataVisualizationNode = 'DataVisualizationNode';
    case SavedInsightNode = 'SavedInsightNode';
    case InsightVizNode = 'InsightVizNode';

    case TrendsQuery = 'TrendsQuery';
    case FunnelsQuery = 'FunnelsQuery';
    case RetentionQuery = 'RetentionQuery';
    case PathsQuery = 'PathsQuery';
    case StickinessQuery = 'StickinessQuery';
    case LifecycleQuery = 'LifecycleQuery';
    case InsightActorsQuery = 'InsightActorsQuery';
    case InsightActorsQueryOptions = 'InsightActorsQueryOptions';
    case FunnelCorrelationQuery = 'FunnelCorrelationQuery';

    // Web analytics + Web Vitals queries
    case WebOverviewQuery = 'WebOverviewQuery';
    case WebStatsTableQuery = 'WebStatsTableQuery';
    case WebExternalClicksTableQuery = 'WebExternalClicksTableQuery';
    case WebGoalsQuery = 'WebGoalsQuery';
    case WebVitalsQuery = 'WebVitalsQuery';
    case WebVitalsPathBreakdownQuery = 'WebVitalsPathBreakdownQuery';

    // Experiment queries
    case ExperimentMetric = 'ExperimentMetric';
    case ExperimentQuery = 'ExperimentQuery';
    case ExperimentExposureQuery = 'ExperimentExposureQuery';
    case ExperimentEventExposureConfig = 'ExperimentEventExposureConfig';
    case ExperimentEventMetricConfig = 'ExperimentEventMetricConfig';
    case ExperimentActionMetricConfig = 'ExperimentActionMetricConfig';
    case ExperimentDataWarehouseMetricConfig = 'ExperimentDataWarehouseMetricConfig';
    case ExperimentTrendsQuery = 'ExperimentTrendsQuery';
    case ExperimentFunnelsQuery = 'ExperimentFunnelsQuery';

    // Database metadata
    case DatabaseSchemaQuery = 'DatabaseSchemaQuery';

    // AI queries
    case SuggestedQuestionsQuery = 'SuggestedQuestionsQuery';
    case TeamTaxonomyQuery = 'TeamTaxonomyQuery';
    case EventTaxonomyQuery = 'EventTaxonomyQuery';
    case ActorsPropertyTaxonomyQuery = 'ActorsPropertyTaxonomyQuery';
    case TracesQuery = 'TracesQuery';
    case VectorSearchQuery = 'VectorSearchQuery';
}
