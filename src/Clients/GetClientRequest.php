<?php

namespace HaloPSA\Sdk\Clients;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetClientRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly int $clientId)
    {}

    public function resolveEndpoint(): string
    {
        return "/api/Client/{$this->clientId}";
    }
}