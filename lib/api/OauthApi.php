<?php
/**
 * OauthApi
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/**
 * UltraCart specific changes:
 * 1. added a helper method to automatically set the version header since that's a pain.
 * 2. added a helper method to use an API key painlessly as well.
 * 3. modified all calls to call a retry statement that will retry once if the UltraCart rate-limiter invokes.
 */

namespace ultracart\v2\api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ultracart\v2\ApiException;
use ultracart\v2\Configuration;
use ultracart\v2\HeaderSelector;
use ultracart\v2\ObjectSerializer;

/**
 * OauthApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OauthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    // -- UltraCart Specific Start --
    /**
     * @param string $simple_key api key
     * @param int $max_retry_seconds 0 to disable, else the maximum number of seconds to wait and automatically retry when rate limit is hit
     * @param string $verify passed to Guzzle to enable/disable ssl verify
     */
    public static function usingApiKey( $simple_key, $max_retry_seconds = 0, $verify = true, $debug = false) {
        $config = new Configuration();
        $config->setApiKey('x-ultracart-simple-key', $simple_key);
        $config->setMaxRetrySeconds($max_retry_seconds);

        $client = new Client(['debug' => $debug, 'verify' => $verify]);
        $headerSelector = new HeaderSelector(/* leave null for version tied to this sdk version */);
        $api = new OauthApi($client, $config, $headerSelector);
        return $api;
    }
    // -- UltraCart Specific End --

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation oauthAccessToken
     *
     * Exchange authorization code for access token.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ultracart\v2\models\OauthTokenResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse
     */
    public function oauthAccessToken($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        list($response) = $this->oauthAccessTokenWithHttpInfo($client_id, $grant_type, $code, $redirect_uri, $refresh_token);
        return $response;
    }

    /**
     * Operation oauthAccessTokenWithHttpInfo
     *
     * Exchange authorization code for access token.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ultracart\v2\models\OauthTokenResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthAccessTokenWithHttpInfo($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        return $this->oauthAccessTokenWithHttpInfoRetry(true ,   $client_id,   $grant_type,   $code,   $redirect_uri,   $refresh_token);
    }



    /**
     * Operation oauthAccessTokenWithHttpInfoRetry
     *
     * Exchange authorization code for access token.
     *
     * @param boolean $retry should this method retry the call if a rate limit is triggered (required)
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ultracart\v2\models\OauthTokenResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthAccessTokenWithHttpInfoRetry($retry , $client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        $returnType = '\ultracart\v2\models\OauthTokenResponse';
        $request = $this->oauthAccessTokenRequest($client_id, $grant_type, $code, $redirect_uri, $refresh_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {

                if($e->getResponse()) {
                    $response = $e->getResponse();
                    $statusCode = $response->getStatusCode();
                    $retryAfter = 0;
                    $headers = $response->getHeaders();
                    if (array_key_exists('Retry-After', $headers)) {
                        $retryAfter = intval($headers['Retry-After'][0]);
                    }

                    if ($statusCode == 429 && $retry && $retryAfter > 0 && $retryAfter <= $this->config->getMaxRetrySeconds()) {
                        sleep($retryAfter);
                        return $this->oauthAccessTokenWithHttpInfoRetry(false ,   $client_id,   $grant_type,   $code,   $redirect_uri,   $refresh_token);
                    }
                }


                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ultracart\v2\models\OauthTokenResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\OauthTokenResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\OauthTokenResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\ultracart\v2\models\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\ultracart\v2\models\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ultracart\v2\models\OauthTokenResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody()->getContents()(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\OauthTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }




    /**
     * Operation oauthAccessTokenAsync
     *
     * Exchange authorization code for access token.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthAccessTokenAsync($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        return $this->oauthAccessTokenAsyncWithHttpInfo($client_id, $grant_type, $code, $redirect_uri, $refresh_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauthAccessTokenAsyncWithHttpInfo
     *
     * Exchange authorization code for access token.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthAccessTokenAsyncWithHttpInfo($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        $returnType = '\ultracart\v2\models\OauthTokenResponse';
        $request = $this->oauthAccessTokenRequest($client_id, $grant_type, $code, $redirect_uri, $refresh_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'oauthAccessToken'
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $grant_type Type of grant (required)
     * @param  string $code Authorization code received back from the browser redirect (optional)
     * @param  string $redirect_uri The URI that you redirect the browser to start the authorization process (optional)
     * @param  string $refresh_token The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function oauthAccessTokenRequest($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling oauthAccessToken'
            );
        }
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null || (is_array($grant_type) && count($grant_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling oauthAccessToken'
            );
        }

        $resourcePath = '/oauth/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = ObjectSerializer::toFormValue($code);
        }
        // form params
        if ($redirect_uri !== null) {
            $formParams['redirect_uri'] = ObjectSerializer::toFormValue($redirect_uri);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = ObjectSerializer::toFormValue($refresh_token);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-ultracart-browser-key');
        if ($apiKey !== null) {
            $headers['x-ultracart-browser-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-ultracart-simple-key');
        if ($apiKey !== null) {
            $headers['x-ultracart-simple-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation oauthRevoke
     *
     * Revoke this OAuth application.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ultracart\v2\models\OauthRevokeSuccessResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse
     */
    public function oauthRevoke($client_id, $token)
    {
        list($response) = $this->oauthRevokeWithHttpInfo($client_id, $token);
        return $response;
    }

    /**
     * Operation oauthRevokeWithHttpInfo
     *
     * Revoke this OAuth application.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ultracart\v2\models\OauthRevokeSuccessResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthRevokeWithHttpInfo($client_id, $token)
    {
        return $this->oauthRevokeWithHttpInfoRetry(true ,   $client_id,   $token);
    }



    /**
     * Operation oauthRevokeWithHttpInfoRetry
     *
     * Revoke this OAuth application.
     *
     * @param boolean $retry should this method retry the call if a rate limit is triggered (required)
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \ultracart\v2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ultracart\v2\models\OauthRevokeSuccessResponse|\ultracart\v2\models\ErrorResponse|\ultracart\v2\models\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthRevokeWithHttpInfoRetry($retry , $client_id, $token)
    {
        $returnType = '\ultracart\v2\models\OauthRevokeSuccessResponse';
        $request = $this->oauthRevokeRequest($client_id, $token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {

                if($e->getResponse()) {
                    $response = $e->getResponse();
                    $statusCode = $response->getStatusCode();
                    $retryAfter = 0;
                    $headers = $response->getHeaders();
                    if (array_key_exists('Retry-After', $headers)) {
                        $retryAfter = intval($headers['Retry-After'][0]);
                    }

                    if ($statusCode == 429 && $retry && $retryAfter > 0 && $retryAfter <= $this->config->getMaxRetrySeconds()) {
                        sleep($retryAfter);
                        return $this->oauthRevokeWithHttpInfoRetry(false ,   $client_id,   $token);
                    }
                }


                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ultracart\v2\models\OauthRevokeSuccessResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\OauthRevokeSuccessResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\OauthRevokeSuccessResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\ultracart\v2\models\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\ultracart\v2\models\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ultracart\v2\models\ErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ultracart\v2\models\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ultracart\v2\models\OauthRevokeSuccessResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody()->getContents()(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\OauthRevokeSuccessResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ultracart\v2\models\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }




    /**
     * Operation oauthRevokeAsync
     *
     * Revoke this OAuth application.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthRevokeAsync($client_id, $token)
    {
        return $this->oauthRevokeAsyncWithHttpInfo($client_id, $token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauthRevokeAsyncWithHttpInfo
     *
     * Revoke this OAuth application.
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthRevokeAsyncWithHttpInfo($client_id, $token)
    {
        $returnType = '\ultracart\v2\models\OauthRevokeSuccessResponse';
        $request = $this->oauthRevokeRequest($client_id, $token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody()->getContents(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'oauthRevoke'
     *
     * @param  string $client_id The OAuth application client_id. (required)
     * @param  string $token The OAuth access token that is to be revoked.. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function oauthRevokeRequest($client_id, $token)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling oauthRevoke'
            );
        }
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling oauthRevoke'
            );
        }

        $resourcePath = '/oauth/revoke';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($token !== null) {
            $formParams['token'] = ObjectSerializer::toFormValue($token);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-ultracart-browser-key');
        if ($apiKey !== null) {
            $headers['x-ultracart-browser-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-ultracart-simple-key');
        if ($apiKey !== null) {
            $headers['x-ultracart-simple-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
