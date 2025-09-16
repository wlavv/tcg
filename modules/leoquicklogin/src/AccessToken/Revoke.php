<?php
/**
 * 2007-2015 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo Quick Login And Social Login
 *
 * DISCLAIMER
 *
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2015 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

namespace Google\AccessToken;

use Google\Auth\HttpHandler\HttpHandlerFactory;
use Google\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;

/**
 * Wrapper around Google Access Tokens which provides convenience functions
 *
 */
class Revoke
{
    /**
     * @var ClientInterface The http client
     */
    private $http;

    /**
     * Instantiates the class, but does not initiate the login flow, leaving it
     * to the discretion of the caller.
     */
    public function __construct(ClientInterface $http = null)
    {
        $this->http = $http;
    }

    /**
     * Revoke an OAuth2 access token or refresh token. This method will revoke the current access
     * token, if a token isn't provided.
     *
     * @param string|array $token The token (access token or a refresh token) that should be revoked.
     * @return boolean Returns True if the revocation was successful, otherwise False.
     */
    public function revokeToken($token)
    {
        if (is_array($token)) {
            if (isset($token['refresh_token'])) {
                $token = $token['refresh_token'];
            } else {
                $token = $token['access_token'];
            }
        }

        $body = Psr7\Utils::streamFor(http_build_query(['token' => $token]));
        $request = new Request(
            'POST',
            Client::OAUTH2_REVOKE_URI,
            [
                'Cache-Control' => 'no-store',
                'Content-Type'  => 'application/x-www-form-urlencoded',
            ],
            $body
        );

        $httpHandler = HttpHandlerFactory::build($this->http);

        $response = $httpHandler($request);

        return $response->getStatusCode() == 200;
    }
}
