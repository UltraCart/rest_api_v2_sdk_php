# ultracart\v2\WebhookApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook()**](WebhookApi.md#deleteWebhook) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
[**deleteWebhookByUrl()**](WebhookApi.md#deleteWebhookByUrl) | **DELETE** /webhook/webhooks | Delete a webhook by URL
[**getWebhookLog()**](WebhookApi.md#getWebhookLog) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
[**getWebhookLogSummaries()**](WebhookApi.md#getWebhookLogSummaries) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
[**getWebhooks()**](WebhookApi.md#getWebhooks) | **GET** /webhook/webhooks | Retrieve webhooks
[**insertWebhook()**](WebhookApi.md#insertWebhook) | **POST** /webhook/webhooks | Add a webhook
[**resendEvent()**](WebhookApi.md#resendEvent) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
[**updateWebhook()**](WebhookApi.md#updateWebhook) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook


## `deleteWebhook()`

```php
deleteWebhook($webhook_oid)
```

Delete a webhook

Delete a webhook on the UltraCart account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_oid = 56; // int | The webhook oid to delete.

try {
    $apiInstance->deleteWebhook($webhook_oid);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookByUrl()`

```php
deleteWebhookByUrl($webhook): \ultracart\v2\models\WebhookResponse
```

Delete a webhook by URL

Delete a webhook based upon the URL on the webhook_url matching an existing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to delete

try {
    $result = $apiInstance->deleteWebhookByUrl($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhookByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\ultracart\v2\models\Webhook**](../Model/Webhook.md)| Webhook to delete |

### Return type

[**\ultracart\v2\models\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookLog()`

```php
getWebhookLog($webhook_oid, $request_id): \ultracart\v2\models\WebhookLogResponse
```

Retrieve an individual log

Retrieves an individual log for a webhook given the webhook oid the request id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_oid = 56; // int | The webhook oid that owns the log.
$request_id = 'request_id_example'; // string | The request id associated with the log to view.

try {
    $result = $apiInstance->getWebhookLog($webhook_oid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid that owns the log. |
 **request_id** | **string**| The request id associated with the log to view. |

### Return type

[**\ultracart\v2\models\WebhookLogResponse**](../Model/WebhookLogResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookLogSummaries()`

```php
getWebhookLogSummaries($webhook_oid, $_limit, $_offset, $_since): \ultracart\v2\models\WebhookLogSummariesResponse
```

Retrieve the log summaries

Retrieves the log summary information for a given webhook.  This is useful for displaying all the various logs that can be viewed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_oid = 56; // int | The webhook oid to retrieve log summaries for.
$_limit = 100; // int | The maximum number of records to return on this one API call.
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = '_since_example'; // string | Fetch log summaries that have been delivered since this date/time.

try {
    $result = $apiInstance->getWebhookLogSummaries($webhook_oid, $_limit, $_offset, $_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookLogSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid to retrieve log summaries for. |
 **_limit** | **int**| The maximum number of records to return on this one API call. | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch log summaries that have been delivered since this date/time. | [optional]

### Return type

[**\ultracart\v2\models\WebhookLogSummariesResponse**](../Model/WebhookLogSummariesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($_limit, $_offset, $_sort, $_placeholders): \ultracart\v2\models\WebhooksResponse
```

Retrieve webhooks

Retrieves the webhooks associated with this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_limit = 100; // int | The maximum number of records to return on this one API call.
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = '_sort_example'; // string | The sort order of the webhooks.  See documentation for examples
$_placeholders = True; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getWebhooks($_limit, $_offset, $_sort, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the webhooks.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\WebhooksResponse**](../Model/WebhooksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertWebhook()`

```php
insertWebhook($webhook, $_placeholders): \ultracart\v2\models\WebhookResponse
```

Add a webhook

Adds a new webhook on the account.  If you add a new webhook with the authentication_type set to basic, but do not specify the basic_username and basic_password, UltraCart will automatically generate random ones and return them.  This allows your application to have simpler logic on the setup of a secure webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to create
$_placeholders = True; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->insertWebhook($webhook, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->insertWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\ultracart\v2\models\Webhook**](../Model/Webhook.md)| Webhook to create |
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendEvent()`

```php
resendEvent($webhook_oid, $event_name): \ultracart\v2\models\WebhookSampleRequestResponse
```

Resend events to the webhook endpoint.

This method will resend events to the webhook endpoint.  This method can be used for example to send all the existing items on an account to a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_oid = 56; // int | The webhook oid that is receiving the reflowed events.
$event_name = 'event_name_example'; // string | The event to reflow.

try {
    $result = $apiInstance->resendEvent($webhook_oid, $event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->resendEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid that is receiving the reflowed events. |
 **event_name** | **string**| The event to reflow. |

### Return type

[**\ultracart\v2\models\WebhookSampleRequestResponse**](../Model/WebhookSampleRequestResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($webhook_oid, $webhook, $_placeholders): \ultracart\v2\models\WebhookResponse
```

Update a webhook

Update a webhook on the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_oid = 56; // int | The webhook oid to update.
$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to update
$_placeholders = True; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->updateWebhook($webhook_oid, $webhook, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid to update. |
 **webhook** | [**\ultracart\v2\models\Webhook**](../Model/Webhook.md)| Webhook to update |
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
