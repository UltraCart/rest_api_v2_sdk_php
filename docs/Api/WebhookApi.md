# ultracart\v2\WebhookApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook**](WebhookApi.md#deleteWebhook) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
[**deleteWebhookByUrl**](WebhookApi.md#deleteWebhookByUrl) | **DELETE** /webhook/webhooks | Delete a webhook by URL
[**getWebhookLog**](WebhookApi.md#getWebhookLog) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
[**getWebhookLogSummaries**](WebhookApi.md#getWebhookLogSummaries) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
[**getWebhooks**](WebhookApi.md#getWebhooks) | **GET** /webhook/webhooks | Retrieve webhooks
[**insertWebhook**](WebhookApi.md#insertWebhook) | **POST** /webhook/webhooks | Add a webhook
[**resendEvent**](WebhookApi.md#resendEvent) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
[**updateWebhook**](WebhookApi.md#updateWebhook) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook


# **deleteWebhook**
> deleteWebhook($webhook_oid)

Delete a webhook

Delete a webhook on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook_oid = 56; // int | The webhook oid to delete.

try {
    $apiInstance->deleteWebhook($webhook_oid);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
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

# **deleteWebhookByUrl**
> \ultracart\v2\models\WebhookResponse deleteWebhookByUrl($webhook)

Delete a webhook by URL

Delete a webhook based upon the URL on the webhook_url matching an existing webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to delete

try {
    $result = $apiInstance->deleteWebhookByUrl($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhookByUrl: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookLog**
> \ultracart\v2\models\WebhookLogResponse getWebhookLog($webhook_oid, $request_id)

Retrieve an individual log

Retrieves an individual log for a webhook given the webhook oid the request id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook_oid = 56; // int | The webhook oid that owns the log.
$request_id = "request_id_example"; // string | The request id associated with the log to view.

try {
    $result = $apiInstance->getWebhookLog($webhook_oid, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookLog: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookLogSummaries**
> \ultracart\v2\models\WebhookLogSummariesResponse getWebhookLogSummaries($webhook_oid, $_limit, $_offset, $_since)

Retrieve the log summaries

Retrieves the log summary information for a given webhook.  This is useful for displaying all the various logs that can be viewed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook_oid = 56; // int | The webhook oid to retrieve log summaries for.
$_limit = 100; // int | The maximum number of records to return on this one API call.
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch log summaries that have been delivered since this date/time.

try {
    $result = $apiInstance->getWebhookLogSummaries($webhook_oid, $_limit, $_offset, $_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookLogSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \ultracart\v2\models\WebhooksResponse getWebhooks($_limit, $_offset, $_sort, $_placeholders)

Retrieve webhooks

Retrieves the webhooks associated with this application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$_limit = 100; // int | The maximum number of records to return on this one API call.
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the webhooks.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getWebhooks($_limit, $_offset, $_sort, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertWebhook**
> \ultracart\v2\models\WebhookResponse insertWebhook($webhook, $_placeholders)

Add a webhook

Adds a new webhook on the account.  If you add a new webhook with the authentication_type set to basic, but do not specify the basic_username and basic_password, UltraCart will automatically generate random ones and return them.  This allows your application to have simpler logic on the setup of a secure webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to create
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->insertWebhook($webhook, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->insertWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendEvent**
> \ultracart\v2\models\WebhookSampleRequestResponse resendEvent($webhook_oid, $event_name)

Resend events to the webhook endpoint.

This method will resend events to the webhook endpoint.  This method can be used for example to send all the existing items on an account to a webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook_oid = 56; // int | The webhook oid that is receiving the reflowed events.
$event_name = "event_name_example"; // string | The event to reflow.

try {
    $result = $apiInstance->resendEvent($webhook_oid, $event_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->resendEvent: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \ultracart\v2\models\WebhookResponse updateWebhook($webhook, $webhook_oid, $_placeholders)

Update a webhook

Update a webhook on the account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\WebhookApi::usingApiKey($simple_key);

$webhook = new \ultracart\v2\models\Webhook(); // \ultracart\v2\models\Webhook | Webhook to update
$webhook_oid = 56; // int | The webhook oid to update.
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->updateWebhook($webhook, $webhook_oid, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\ultracart\v2\models\Webhook**](../Model/Webhook.md)| Webhook to update |
 **webhook_oid** | **int**| The webhook oid to update. |
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

