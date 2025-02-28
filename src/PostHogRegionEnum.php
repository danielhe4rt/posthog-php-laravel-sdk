<?php

namespace DanielHe4rt\PostHog;

enum PostHogRegionEnum: string
{
    case US_PUBLIC = 'https://us.i.posthog.com/api';
    case US_PRIVATE = 'https://us.posthog.com/api';

    case EU_PUBLIC = 'https://eu.i.posthog.com/api';
    case EU_PRIVATE = 'https://eu.posthog.com/api';
}