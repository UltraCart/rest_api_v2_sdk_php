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

ini_set('display_errors', 1);

/*

deletes a webhook

You will need the webhook_oid to call this method.  Call getWebhooks() if you don't know your oid.
Returns status code 204 (No Content) on success

*/


use ultracart\v2\api\WebhookApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);
$webhook_oid = 123456789; // call getWebhooks if you don't know this.
$webhook_api->deleteWebhook($webhook_oid);
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

ini_set('display_errors', 1);

/*

This method can be confusing due to its payload.  The method does indeed delete a webhook by url, but you need to
pass a webhook object in as the payload.  However, only the url is used.  UltraCart does this to avoid any confusion
with the rest url versus the webhook url.

To use:
Get your webhook url.
Create a Webhook object.
Set the Webhook url property.
Pass the webhook to deleteWebhookByUrl()

Returns status code 204 (No Content) on success

*/


use ultracart\v2\api\WebhookApi;
use ultracart\v2\models\Webhook;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);

$webhook_url = "https://www.mywebiste.com/page/to/call/when/this/webhook/fires.php";
$webhook = new Webhook();
$webhook->setWebhookUrl($webhook_url);

$webhook_api->deleteWebhookByUrl($webhook);
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

ini_set('display_errors', 1);

/*

getWebhookLog() provides a detail log of a webhook event.  It is used in tandem with getWebhookLogSummaries to audit
webhook events.  This method call will require the webhook_oid and the request_id.  The webhook_oid can be discerned
from the results of getWebhooks() and the request_id can be found from getWebhookLogSummaries().  see those examples
if needed.

*/


use ultracart\v2\api\WebhookApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);

$webhook_oid = 123456789; // call getWebhooks if you don't know this.
$request_id = '987654321';  // call getWebhookLogSummaries if you don't know this.

$api_response = $webhook_api->getWebhookLog($webhook_oid, $request_id);
$webhook_log = $api_response->getWebhookLog();

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

echo '<html lang="en"><body><pre>';
var_dump($webhook_log);
echo '</pre></body></html>';
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

set_time_limit(3000); // pulling all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve webhook log summaries.
 */

use ultracart\v2\api\WebhookApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);


/**
 * @throws ApiException
 */
function getSummaryChunk(WebhookApi $webhook_api, int $offset, int $limit): array
{
    $webhook_oid = 123456789; // if you don't know this, use getWebhooks to find your webhook, then get its oid.
    $_since = date('Y-m-d', strtotime('-10 days')) . "T00:00:00+00:00"; // get the last 10 days
    // Pay attention to whether limit or offset comes first in the method signature.  UltraCart is not consistent with their ordering.
    $api_response = $webhook_api->getWebhookLogSummaries($webhook_oid, $limit, $offset, $_since);

    if ($api_response->getWebhookLogSummaries() != null) {
        return $api_response->getWebhookLogSummaries();
    }
    return [];
}

$summaries = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_summaries = getSummaryChunk($webhook_api, $offset, $limit);
        $orders = array_merge($summaries, $chunk_of_summaries);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_summaries) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($summaries);
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

set_time_limit(3000); // pulling all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve all webhooks.
 */

use ultracart\v2\api\WebhookApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);


/**
 * @throws ApiException
 */
function getWebhookChunk(WebhookApi $webhook_api, int $offset, int $limit): array
{

    $_sort = null; // default sorting is webhook_url, disabled, and those are also the two choices for sorting.
    $_placeholders = null;  // useful for UI displays, but not needed here.
    // Pay attention to whether limit or offset comes first in the method signature.  UltraCart is not consistent with their ordering.
    $api_response = $webhook_api->getWebhooks($limit, $offset, $_sort, $_placeholders);

    if ($api_response->getWebhooks() != null) {
        return $api_response->getWebhooks();
    }
    return [];
}

$webhooks = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_webhooks = getWebhookChunk($webhook_api, $offset, $limit);
        $orders = array_merge($webhooks, $chunk_of_webhooks);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_webhooks) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($webhooks);
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

ini_set('display_errors', 1);

/*

Adds a new webhook on the account.  If you add a new webhook with the authentication_type set to basic, but
do not specify the basic_username and basic_password, UltraCart will automatically generate random ones and
return them.  This allows your application to have simpler logic on the setup of a secure webhook.

Event Category      Event Name                      Description
auto_order	        auto_order_cancel	            Fired when an auto order is canceled
auto_order	        auto_order_create	            Fired when an auto order is created
auto_order	        auto_order_decline	            Fired when an auto order is declined
auto_order	        auto_order_disable	            Fired when an auto order is disabled
auto_order	        auto_order_preshipment          Fired when an auto order generates a new pre-shipment notice
auto_order	        auto_order_rebill	            Fired when an auto order is rebilled
auto_order	        auto_order_update	            Fired when an auto order is updated
chargeback	        chargeback_create	            Fired when a chargeback is created
chargeback	        chargeback_delete	            Fired when a chargeback is deleted
chargeback	        chargeback_update	            Fired when a chargeback is updated
checkout	        checkout_cart_abandon	        Fired when a cart is abandoned
checkout	        checkout_cart_send_return_email Fired when a return email should be sent to a customer
customer	        customer_create                 Fired when a customer profile is created.
customer	        customer_delete                 Fired when a customer profile is deleted.
customer	        customer_update                 Fired when a customer profile is updated.
fulfillment	        fulfillment_hold                Fired when an order is held for review
fulfillment	        fulfillment_transmit            Fired to transmit an order to the fulfillment house
item	            item_create                     Fired when a new item is created.
item	            item_delete                     Fired when an item is deleted.
item	            item_update                     Fired when an item is updated.
order	            order_abandon_recovery          Fired when a previously abandoned cart turns into an order
order	            order_create                    Fired when an order is placed
order	            order_delete                    Fired when an order is deleted
order	            order_payment_failed            Fired when a payment fails
order	            order_payment_process           Fired when a payment is processed
order	            order_refund                    Fired when an order is refunded
order	            order_reject                    Fired when an order is rejected
order	            order_s3_invoice                Fired when an invoice PDF is stored in S3 bucket
order	            order_s3_packing_slip           Fired when a packing slip PDF is stored in an S3 bucket
order	            order_ship                      Fired when an order is shipped
order	            order_ship_delivered            Fired when an order has a shipment delivered
order	            order_ship_expected             Fired when an order has an expected delivery date
order	            order_ship_out_for_delivery     Fired when an order has a shipment out for delivery
order	            order_stage_change              Fired when an order stage changes
order	            order_update                    Fired when an order is edited
storefront	        screen_recording                Fired when a screen recording is created
user	            user_create                     Fired when a user is created
user	            user_delete                     Fired when a user is deleted
user	            user_login                      Fired when a user logs in
user	            user_update                     Fired when a user is updated
workflow_task	    workflow_task_create            Fired when a workflow task is created
workflow_task	    workflow_task_delete            Fired when a workflow task is deleted
workflow_task	    workflow_task_update            Fired when a workflow task is updated

Note: Each event uses the same expansions as the event category.  To see a list of possible expansion values,
visit www.ultracart.com/api/. Order Expansions (https://www.ultracart.com/api/#resource_order.html) are listed
below because most webhooks are for order events.
Order Expansion:
affiliate	        auto_order          billing             checkout
affiliate.ledger	channel_partner	    coupon	            customer_profile
digital_order	    edi	                fraud_score	        gift
gift_certificate	internal	        item	            linked_shipment
marketing	        payment	            payment.transaction point_of_sale
quote	            salesforce	        shipping	        shipping.tracking_number_details
summary	            taxes	            utms

Note: The WebhookEventSubscription.event_ruler field is processed with the AWS Event Ruler library to filter down
events to just what you want.  If you wish to employ a ruler filter, see https://github.com/aws/event-ruler
for syntax examples.  You'll need to apply the aws syntax against the UltraCart object models.  Contact UltraCart
support if you need assistance creating the proper ruler expression.


Possible Errors:

 */


use ultracart\v2\api\WebhookApi;
use ultracart\v2\models\Webhook;
use ultracart\v2\models\WebhookEventCategory;
use ultracart\v2\models\WebhookEventSubscription;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);

$webhook = new Webhook();
$webhook->setWebhookUrl("https://www.mywebiste.com/page/to/call/when/this/webhook/fires.php");  // Must be HTTPS if customer related information is being delivered.
$webhook->setAuthenticationType("basic");  // "basic","none","api user","aws iam"
$webhook->setBasicUsername("george");
$webhook->setBasicPassword("LlamaLlamaRedPajama");
$webhook->setMaximumEvents(10);
$webhook->setMaximumSize( 5242880); // 5 MB is pretty chunky.
$webhook->setApiVersion("2017-03-01"); // this is our only API version so far.
$webhook->setCompressEvents(true); // compress events with gzip, then base64 encode them as a string.


$event_sub1 = new WebhookEventSubscription();
$event_sub1->setEventName("order_create");
$event_sub1->setEventDescription("when an order is placed");
$event_sub1->setExpansion("shipping,billing,item,coupon,summary"); // whatever you need.
$event_sub1->setEventRuler(null); // no filtering.  we want all objects.
$event_sub1->setComments("Merchant specific comment, for example: Bobby needs this webhook for the Accounting department.");

$event_sub2 = new WebhookEventSubscription();
$event_sub2->setEventName("order_update");
$event_sub2->setEventDescription("when an order is modified");
$event_sub2->setExpansion("shipping,billing,item,coupon,summary"); // whatever you need.
$event_sub2->setEventRuler(null); // no filtering.  we want all objects.
$event_sub2->setComments("Merchant specific comment, for example: Bobby needs this webhook for the Accounting department.");

$event_sub3 = new WebhookEventSubscription();
$event_sub3->setEventName("order_delete");
$event_sub3->setEventDescription("when an order is modified");
$event_sub3->setExpansion(""); // don't need any expansion on delete.  only need to know the order_id
$event_sub3->setEventRuler(null); // no filtering.  we want all objects.
$event_sub3->setComments("Merchant specific comment, for example: Bobby needs this webhook for the Accounting department.");


$eventCategory1 = new WebhookEventCategory();
$eventCategory1->setEventCategory("order");
$eventCategory1->setEvents([$event_sub1, $event_sub2, $event_sub3]);

// api_response->getWebhook will return the newly created webhook.
$api_response = $webhook_api->insertWebhook($webhook, false);


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$created_webhook = $api_response->getWebhook();
// TODO - store the webhook oid in case you ever need to make changes.

echo '<html lang="en"><body><pre>';
// This should equal what you submitted, plus contain much new information
var_dump($created_webhook);
echo '</pre></body></html>';
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
resendEvent($webhook_oid, $event_name): \ultracart\v2\models\WebhookReflowResponse
```

Resend events to the webhook endpoint.

This method will resend events to the webhook endpoint.  This method can be used for example to send all the existing items on an account to a webhook.


### Example

```php
<?php

ini_set('display_errors', 1);

/*

resentEvent is used to reflow an event.  It will resend ALL events in history.  So it is essentially a way to
get all objects from an event.  Currently, there are only two events available for reflow: "item_update", and "order_create".
These two events provide the means to have a webhook receive all items or orders.  This method is usually called
at the beginning of a webhook's life to prepopulate a merchant's database with all items or orders.

You will need the webhook_oid to call this method.  Call getWebhooks() if you don't know your oid.

*/


use ultracart\v2\api\WebhookApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);

$webhook_oid = 123456789; // call getWebhooks if you don't know this.
$event_name = "item_update"; // or "order_create", but for this sample, we want all items.

$api_response = $webhook_api->resendEvent($webhook_oid, $event_name);
$reflow = $api_response->getReflow();
$success = $reflow->getQueued();

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_oid** | **int**| The webhook oid that is receiving the reflowed events. |
 **event_name** | **string**| The event to reflow. |

### Return type

[**\ultracart\v2\models\WebhookReflowResponse**](../Model/WebhookReflowResponse.md)

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

ini_set('display_errors', 1);

/*

Updates a webhook on the account.  See insertWebhook.php for a complete example with field usage.
For this example, we are just updating the basic password.

 */


use ultracart\v2\api\WebhookApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$webhook_api = WebhookApi::usingApiKey(Constants::API_KEY);

// you should have stored this when you created the webhook.  If you don't know it, call getWebhooks and iterate through
// them to find you target webhook (add useful comments to each webhook really helps in this endeavor) and get the
// webhook oid from that.  You'll want to call getWebhooks any way to get the object for updating. It is HIGHLY
// recommended to get the object from UltraCart for updating rather than constructing it yourself to avoid accidentally
// deleting a part of the object during the update.
$webhook_oid = 123456789;

$webhook_to_update = null;
$webhooks = $webhook_api->getWebhooks(100, 0, null, null)->getWebhooks();
foreach ($webhooks as $webhook) {
    if($webhook->getWebhookOid() == $webhook_oid){
        $webhook_to_update = $webhook;
        break;
    }
}

$webhook_to_update->setBasicPassword("new password here");
$api_response = $webhook_api->updateWebhook($webhook_oid, $webhook_to_update);
$updated_webhook = $api_response->getWebhook();

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$created_webhook = $api_response->getWebhook();

echo '<html lang="en"><body><pre>';
var_dump($updated_webhook);
echo '</pre></body></html>';
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
