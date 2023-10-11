<?php

namespace HaloPSA\Sdk;

use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;

final class HaloPSAClient extends Connector
{
    use ClientCredentialsGrant;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $clientId,
        private readonly string $clientSecret,
        private readonly array $defaultScopes = ['all']
    ) {}

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId($this->clientId)
            ->setClientSecret($this->clientSecret)
            ->setDefaultScopes($this->defaultScopes)
            ->setTokenEndpoint('/auth/token');
    }
}