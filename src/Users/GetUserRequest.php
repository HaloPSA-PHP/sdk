<?php

namespace HaloPSA\Sdk\Users;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetUserRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly int $userId)
    {}

    public function resolveEndpoint(): string
    {
        return "api/Users/{$this->userId}";
    }
}