<?php

namespace DanielHe4rt\PostHog;

enum PostHogServersEnum: string
{
    case US_PUBLIC = 'https://us.i.posthog.com';
    case US_PRIVATE = 'https://us.posthog.com';

    case EU_PUBLIC = 'https://eu.i.posthog.com';
    case EU_PRIVATE = 'https://eu.posthog.com';
}