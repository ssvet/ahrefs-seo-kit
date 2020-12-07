<?php

namespace ahrefs\AhrefsSeoKit\Google\AuthHandler;

use ahrefs\AhrefsSeoKit\Google\Auth\CredentialsLoader;
use ahrefs\AhrefsSeoKit\Google\Auth\HttpHandler\HttpHandlerFactory;
use ahrefs\AhrefsSeoKit\Google\Auth\FetchAuthTokenCache;
use ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\AuthTokenSubscriber;
use ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\ScopedAccessTokenSubscriber;
use ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\SimpleSubscriber;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Cache\CacheItemPoolInterface;
/**
*
*/
/* Modified by Ahrefs. ahrefs\AhrefsSeoKit namespace applied. */
class Guzzle5AuthHandler
{
    protected $cache;
    protected $cacheConfig;
    public function __construct(\Psr\Cache\CacheItemPoolInterface $cache = null, array $cacheConfig = [])
    {
        $this->cache = $cache;
        $this->cacheConfig = $cacheConfig;
    }
    public function attachCredentials(\GuzzleHttp\ClientInterface $http, \ahrefs\AhrefsSeoKit\Google\Auth\CredentialsLoader $credentials, callable $tokenCallback = null)
    {
        // use the provided cache
        if ($this->cache) {
            $credentials = new \ahrefs\AhrefsSeoKit\Google\Auth\FetchAuthTokenCache($credentials, $this->cacheConfig, $this->cache);
        }
        return $this->attachCredentialsCache($http, $credentials, $tokenCallback);
    }
    public function attachCredentialsCache(\GuzzleHttp\ClientInterface $http, \ahrefs\AhrefsSeoKit\Google\Auth\FetchAuthTokenCache $credentials, callable $tokenCallback = null)
    {
        // if we end up needing to make an HTTP request to retrieve credentials, we
        // can use our existing one, but we need to throw exceptions so the error
        // bubbles up.
        $authHttp = $this->createAuthHttp($http);
        $authHttpHandler = \ahrefs\AhrefsSeoKit\Google\Auth\HttpHandler\HttpHandlerFactory::build($authHttp);
        $subscriber = new \ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\AuthTokenSubscriber($credentials, $authHttpHandler, $tokenCallback);
        $http->setDefaultOption('auth', 'google_auth');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachToken(\GuzzleHttp\ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use($token) {
            return $token['access_token'];
        };
        $subscriber = new \ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\ScopedAccessTokenSubscriber($tokenFunc, $scopes, $this->cacheConfig, $this->cache);
        $http->setDefaultOption('auth', 'scoped');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachKey(\GuzzleHttp\ClientInterface $http, $key)
    {
        $subscriber = new \ahrefs\AhrefsSeoKit\Google\Auth\Subscriber\SimpleSubscriber(['key' => $key]);
        $http->setDefaultOption('auth', 'simple');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    private function createAuthHttp(\GuzzleHttp\ClientInterface $http)
    {
        return new \GuzzleHttp\Client(['base_url' => $http->getBaseUrl(), 'defaults' => ['exceptions' => \true, 'verify' => $http->getDefaultOption('verify'), 'proxy' => $http->getDefaultOption('proxy')]]);
    }
}
