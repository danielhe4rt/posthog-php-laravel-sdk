<?php

namespace DanielHe4rt\PostHog\Requests;


use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class Capture extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method =  Method::POST;

    public function __construct(public array $payload)
    {
    }


    public function defaultBody(): array
    {
        return $this->payload;
    }

    public function resolveEndpoint(): string
    {
        return '/i/v0/e/';
    }
}