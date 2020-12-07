<?php

namespace ahrefs\AhrefsSeoKit\Google\AuthHandler;

use ahrefs\AhrefsSeoKit\Google\Auth\CredentialsLoader;
use ahrefs\AhrefsSeoKit\Google\Auth\HttpHandler\HttpHandlerFactory;
use ahrefs\AhrefsSeoKit\Google\Auth\FetchAuthTokenCache;
use ahrefs\AhrefsSeoKit\Google\Auth\Middleware\AuthTokenMiddleware;
use ahrefs\AhrefsSeoKit\Google\Auth\Middleware\ScopedAccessTokenMiddleware;
use ahrefs\AhrefsSeoKit\Google\Auth\Middleware\SimpleMiddleware;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Cache\CacheItemPoolInterface;
/**
* This supports Guzzle 6
*/
/* Modified by Ahrefs. ahrefs\AhrefsSeoKit namespace applied. */
class Guzzle6AuthHandler
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
        $middleware = new \ahrefs\AhrefsSeoKit\Google\Auth\Middleware\AuthTokenMiddleware($credentials, $authHttpHandler, $tokenCallback);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'google_auth';
        $http = new \GuzzleHttp\Client($config);
        return $http;
    }
    public function attachToken(\GuzzleHttp\ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use($token) {
            return $token['access_token'];
        };
        $middleware = new \ahrefs\AhrefsSeoKit\Google\Auth\Middleware\ScopedAccessTokenMiddleware($tokenFunc, $scopes, $this->cacheConfig, $this->cache);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'scoped';
        $http = new \GuzzleHttp\Client($config);
        return $http;
    }
    public function attachKey(\GuzzleHttp\ClientInterface $http, $key)
    {
        $middleware = new \ahrefs\AhrefsSeoKit\Google\Auth\Middleware\SimpleMiddleware(['key' => $key]);
        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'simple';
        $http = new \GuzzleHttp\Client($config);
        return $http;
    }
    private function createAuthHttp(\GuzzleHttp\ClientInterface $http)
    {
        return new \GuzzleHttp\Client(['base_uri' => $http->getConfig('base_uri'), 'http_errors' => \true, 'verify' => $http->getConfig('verify'), 'proxy' => $http->getConfig('proxy')]);
    }
}
