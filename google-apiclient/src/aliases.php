<?php

namespace ahrefs\AhrefsSeoKit;

if (\class_exists('ahrefs\\AhrefsSeoKit\\Google_Client', \false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}
$classMap = ['ahrefs\\AhrefsSeoKit\\Google\\Client' => 'Google_Client', 'ahrefs\\AhrefsSeoKit\\Google\\Service' => 'Google_Service', 'ahrefs\\AhrefsSeoKit\\Google\\AccessToken\\Revoke' => 'Google_AccessToken_Revoke', 'ahrefs\\AhrefsSeoKit\\Google\\AccessToken\\Verify' => 'Google_AccessToken_Verify', 'ahrefs\\AhrefsSeoKit\\Google\\Model' => 'Google_Model', 'ahrefs\\AhrefsSeoKit\\Google\\Utils\\UriTemplate' => 'Google_Utils_UriTemplate', 'ahrefs\\AhrefsSeoKit\\Google\\AuthHandler\\Guzzle6AuthHandler' => 'Google_AuthHandler_Guzzle6AuthHandler', 'ahrefs\\AhrefsSeoKit\\Google\\AuthHandler\\Guzzle7AuthHandler' => 'Google_AuthHandler_Guzzle7AuthHandler', 'ahrefs\\AhrefsSeoKit\\Google\\AuthHandler\\Guzzle5AuthHandler' => 'Google_AuthHandler_Guzzle5AuthHandler', 'ahrefs\\AhrefsSeoKit\\Google\\AuthHandler\\AuthHandlerFactory' => 'Google_AuthHandler_AuthHandlerFactory', 'ahrefs\\AhrefsSeoKit\\Google\\Http\\Batch' => 'Google_Http_Batch', 'ahrefs\\AhrefsSeoKit\\Google\\Http\\MediaFileUpload' => 'Google_Http_MediaFileUpload', 'ahrefs\\AhrefsSeoKit\\Google\\Http\\REST' => 'Google_Http_REST', 'ahrefs\\AhrefsSeoKit\\Google\\Task\\Retryable' => 'Google_Task_Retryable', 'ahrefs\\AhrefsSeoKit\\Google\\Task\\Exception' => 'Google_Task_Exception', 'ahrefs\\AhrefsSeoKit\\Google\\Task\\Runner' => 'Google_Task_Runner', 'ahrefs\\AhrefsSeoKit\\Google\\Collection' => 'Google_Collection', 'ahrefs\\AhrefsSeoKit\\Google\\Service\\Exception' => 'Google_Service_Exception', 'ahrefs\\AhrefsSeoKit\\Google\\Service\\Resource' => 'Google_Service_Resource', 'ahrefs\\AhrefsSeoKit\\Google\\Exception' => 'Google_Exception'];
foreach ($classMap as $class => $alias) {
    \class_alias($class, $alias);
}
/**
 * This class needs to be defined explicitly as scripts must be recognized by
 * the autoloader.
 */
/* Modified by Ahrefs. ahrefs\AhrefsSeoKit namespace applied. */
class Google_Task_Composer extends \ahrefs\AhrefsSeoKit\Google\Task\Composer
{
}
/**
 * This class needs to be defined explicitly as scripts must be recognized by
 * the autoloader.
 */
\class_alias('ahrefs\\AhrefsSeoKit\\Google_Task_Composer', 'Google_Task_Composer', \false);
if (\false) {
    class Google_AccessToken_Revoke extends \ahrefs\AhrefsSeoKit\Google\AccessToken\Revoke
    {
    }
    class Google_AccessToken_Verify extends \ahrefs\AhrefsSeoKit\Google\AccessToken\Verify
    {
    }
    class Google_AuthHandler_AuthHandlerFactory extends \ahrefs\AhrefsSeoKit\Google\AuthHandler\AuthHandlerFactory
    {
    }
    class Google_AuthHandler_Guzzle5AuthHandler extends \ahrefs\AhrefsSeoKit\Google\AuthHandler\Guzzle5AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle6AuthHandler extends \ahrefs\AhrefsSeoKit\Google\AuthHandler\Guzzle6AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle7AuthHandler extends \ahrefs\AhrefsSeoKit\Google\AuthHandler\Guzzle7AuthHandler
    {
    }
    class Google_Client extends \ahrefs\AhrefsSeoKit\Google\Client
    {
    }
    class Google_Collection extends \ahrefs\AhrefsSeoKit\Google\Collection
    {
    }
    class Google_Exception extends \ahrefs\AhrefsSeoKit\Google\Exception
    {
    }
    class Google_Http_Batch extends \ahrefs\AhrefsSeoKit\Google\Http\Batch
    {
    }
    class Google_Http_MediaFileUpload extends \ahrefs\AhrefsSeoKit\Google\Http\MediaFileUpload
    {
    }
    class Google_Http_REST extends \ahrefs\AhrefsSeoKit\Google\Http\REST
    {
    }
    class Google_Model extends \ahrefs\AhrefsSeoKit\Google\Model
    {
    }
    class Google_Service extends \ahrefs\AhrefsSeoKit\Google\Service
    {
    }
    class Google_Service_Exception extends \ahrefs\AhrefsSeoKit\Google\Service\Exception
    {
    }
    class Google_Service_Resource extends \ahrefs\AhrefsSeoKit\Google\Service\Resource
    {
    }
    class Google_Task_Exception extends \ahrefs\AhrefsSeoKit\Google\Task\Exception
    {
    }
    class Google_Task_Retryable extends \ahrefs\AhrefsSeoKit\Google\Task\Retryable
    {
    }
    class Google_Task_Runner extends \ahrefs\AhrefsSeoKit\Google\Task\Runner
    {
    }
    class Google_Utils_UriTemplate extends \ahrefs\AhrefsSeoKit\Google\Utils\UriTemplate
    {
    }
}
