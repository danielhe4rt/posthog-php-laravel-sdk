<?php
require_once 'vendor/autoload.php';

use DanielHe4rt\PostHog\PostHogConnector;
use DanielHe4rt\PostHog\PostHogServersEnum;

$client = PostHogConnector::new(
    server: PostHogServersEnum::US_PUBLIC,
    apiKey: 'x',
    personalApiKey: 'x'
);

$response = $client->capture([
    'event' => 'test',
    'distinct_id' => '123',
    'properties' => [
        'key' => 'value'
    ]
]);

var_dump($response->body());

$response = $client->activityLog()->activityLogList(132433);

var_dump($response->body());