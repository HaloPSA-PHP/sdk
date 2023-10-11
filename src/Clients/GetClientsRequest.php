<?php

namespace HaloPSA\Sdk\Clients;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetClientsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/Client';
    }
}