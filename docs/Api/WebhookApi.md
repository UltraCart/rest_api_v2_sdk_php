# ultracart\admin\v2\WebhookApi

All URIs are relative to *https://secure.ultracart.com/rest/admin/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookWebhooksGet**](WebhookApi.md#webhookWebhooksGet) | **GET** /webhook/webhooks | Retrieve webhooks
[**webhookWebhooksPost**](WebhookApi.md#webhookWebhooksPost) | **POST** /webhook/webhooks | Add a webhook
[**webhookWebhooksWebhookOidDelete**](WebhookApi.md#webhookWebhooksWebhookOidDelete) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
[**webhookWebhooksWebhookOidLogsGet**](WebhookApi.md#webhookWebhooksWebhookOidLogsGet) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
[**webhookWebhooksWebhookOidLogsRequestIdGet**](WebhookApi.md#webhookWebhooksWebhookOidLogsRequestIdGet) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
[**webhookWebhooksWebhookOidPut**](WebhookApi.md#webhookWebhooksWebhookOidPut) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook
[**webhookWebhooksWebhookOidReflowEventNamePost**](WebhookApi.md#webhookWebhooksWebhookOidReflowEventNamePost) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
[**webhookWebhooksWebhookOidSamplesGet**](WebhookApi.md#webhookWebhooksWebhookOidSamplesGet) | **GET** /webhook/webhooks/{webhookOid}/samples | Retrieve a sample notification.
[**webhookWebhooksWebhookOidValidatePost**](WebhookApi.md#webhookWebhooksWebhookOidValidatePost) | **POST** /webhook/webhooks/{webhookOid}/validate | Send test message to an endpoint.


# **webhookWebhooksGet**
> \ultracart\admin\v2\models\WebhooksResponse webhookWebhooksGet()

Retrieve webhooks

Retrieves the webhooks associated with this application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();

try {
    $result = $api_instance->webhookWebhooksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\admin\v2\models\WebhooksResponse**](../Model/WebhooksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksPost**
> \ultracart\admin\v2\models\WebhooksResponse webhookWebhooksPost($webhook)

Add a webhook

Adds a new webhook on the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook = new \ultracart\admin\v2\models\Webhook(); // \ultracart\admin\v2\models\Webhook | Webhook to create

try {
    $result = $api_instance->webhookWebhooksPost($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\ultracart\admin\v2\models\Webhook**](../Model/\ultracart\admin\v2\models\Webhook.md)| Webhook to create |

### Return type

[**\ultracart\admin\v2\models\WebhooksResponse**](../Model/WebhooksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidDelete**
> webhookWebhooksWebhookOidDelete($webhook_oid)

Delete a webhook

Delete a webhook on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook_oid = 56; // int | The webhook oid to delete.

try {
    $api_instance->webhookWebhooksWebhookOidDelete($webhook_oid);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidLogsGet**
> \ultracart\admin\v2\models\WebhookLogSummariesResponse webhookWebhooksWebhookOidLogsGet($webhook_oid)

Retrieve the log summaries

Retrieves the log summary information for a given webhook.  This is useful for displaying all the various logs that can be viewed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook_oid = 56; // int | The webhook oid to retrieve log summaries for.

try {
    $result = $api_instance->webhookWebhooksWebhookOidLogsGet($webhook_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidLogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid to retrieve log summaries for. |

### Return type

[**\ultracart\admin\v2\models\WebhookLogSummariesResponse**](../Model/WebhookLogSummariesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidLogsRequestIdGet**
> \ultracart\admin\v2\models\WebhookLogResponse webhookWebhooksWebhookOidLogsRequestIdGet($webhook_oid, $request_id)

Retrieve an individual log

Retrieves an individual log for a webhook given the webhook oid the request id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook_oid = 56; // int | The webhook oid that owns the log.
$request_id = "request_id_example"; // string | The request id associated with the log to view.

try {
    $result = $api_instance->webhookWebhooksWebhookOidLogsRequestIdGet($webhook_oid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidLogsRequestIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid that owns the log. |
 **request_id** | **string**| The request id associated with the log to view. |

### Return type

[**\ultracart\admin\v2\models\WebhookLogResponse**](../Model/WebhookLogResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidPut**
> \ultracart\admin\v2\models\WebhooksResponse webhookWebhooksWebhookOidPut($webhook, $webhook_oid)

Update a webhook

Update a webhook on the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook = new \ultracart\admin\v2\models\Webhook(); // \ultracart\admin\v2\models\Webhook | Webhook to update
$webhook_oid = 56; // int | The webhook oid to update.

try {
    $result = $api_instance->webhookWebhooksWebhookOidPut($webhook, $webhook_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\ultracart\admin\v2\models\Webhook**](../Model/\ultracart\admin\v2\models\Webhook.md)| Webhook to update |
 **webhook_oid** | **int**| The webhook oid to update. |

### Return type

[**\ultracart\admin\v2\models\WebhooksResponse**](../Model/WebhooksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidReflowEventNamePost**
> \ultracart\admin\v2\models\WebhookSampleRequestResponse webhookWebhooksWebhookOidReflowEventNamePost($webhook_oid, $event_name)

Resend events to the webhook endpoint.

This method will resend events to the webhook endpoint.  This method can be used for example to send all the existing items on an account to a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook_oid = 56; // int | The webhook oid that is receiving the reflowed events.
$event_name = "event_name_example"; // string | The event to reflow.

try {
    $result = $api_instance->webhookWebhooksWebhookOidReflowEventNamePost($webhook_oid, $event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidReflowEventNamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid that is receiving the reflowed events. |
 **event_name** | **string**| The event to reflow. |

### Return type

[**\ultracart\admin\v2\models\WebhookSampleRequestResponse**](../Model/WebhookSampleRequestResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidSamplesGet**
> \ultracart\admin\v2\models\WebhookSampleRequestResponse webhookWebhooksWebhookOidSamplesGet($webhook_oid)

Retrieve a sample notification.

Retrieves a sample notification for the webhook.  This provides as example of what the notifications that can be delivered will look like.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$webhook_oid = 56; // int | The webhook oid to retrieve samples for.

try {
    $result = $api_instance->webhookWebhooksWebhookOidSamplesGet($webhook_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidSamplesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid to retrieve samples for. |

### Return type

[**\ultracart\admin\v2\models\WebhookSampleRequestResponse**](../Model/WebhookSampleRequestResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookWebhooksWebhookOidValidatePost**
> \ultracart\admin\v2\models\WebhookLogResponse webhookWebhooksWebhookOidValidatePost($samples, $webhook_oid)

Send test message to an endpoint.

Performs a test of the webhook endpoint given the specified sample request and returns the log associated with the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\WebhookApi();
$samples = new \ultracart\admin\v2\models\WebhookSampleRequest(); // \ultracart\admin\v2\models\WebhookSampleRequest | Samples to send in the test
$webhook_oid = 56; // int | The webhook oid that is being tested.

try {
    $result = $api_instance->webhookWebhooksWebhookOidValidatePost($samples, $webhook_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookWebhooksWebhookOidValidatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **samples** | [**\ultracart\admin\v2\models\WebhookSampleRequest**](../Model/\ultracart\admin\v2\models\WebhookSampleRequest.md)| Samples to send in the test |
 **webhook_oid** | **int**| The webhook oid that is being tested. |

### Return type

[**\ultracart\admin\v2\models\WebhookLogResponse**](../Model/WebhookLogResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

