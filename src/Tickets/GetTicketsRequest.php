<?php

namespace HaloPSA\Sdk\Tickets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetTicketsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/api/Tickets';
    }
}