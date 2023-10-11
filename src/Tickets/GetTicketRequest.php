<?php

namespace HaloPSA\Sdk\Tickets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetTicketRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly int $ticketId)
    {}

    public function resolveEndpoint(): string
    {
        return "/api/Tickets/{$this->ticketId}";
    }
}