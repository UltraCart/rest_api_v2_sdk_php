# ultracart\v2\ChannelPartnerApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderByChannelPartnerOrderId()**](ChannelPartnerApi.md#cancelOrderByChannelPartnerOrderId) | **DELETE** /channel_partner/cancel/by_channel_partner_order_id/{order_id} | Cancel channel partner order by channel partner order id
[**cancelOrderByUltraCartOrderId()**](ChannelPartnerApi.md#cancelOrderByUltraCartOrderId) | **DELETE** /channel_partner/cancel/by_ultracart_order_id/{order_id} | Cancel channel partner order by UltraCart order id
[**deleteChannelPartnerShipToPreference()**](ChannelPartnerApi.md#deleteChannelPartnerShipToPreference) | **DELETE** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Delete a ship to preference record for the channel partner.
[**estimateShippingForChannelPartnerOrder()**](ChannelPartnerApi.md#estimateShippingForChannelPartnerOrder) | **POST** /channel_partner/estimate_shipping | Estimate shipping for channel partner order
[**estimateTaxForChannelPartnerOrder()**](ChannelPartnerApi.md#estimateTaxForChannelPartnerOrder) | **POST** /channel_partner/estimate_tax | Estimate tax for channel partner order
[**getChannelPartnerOrder()**](ChannelPartnerApi.md#getChannelPartnerOrder) | **GET** /channel_partner/orders/{order_id} | Retrieve a channel partner order
[**getChannelPartnerOrderByChannelPartnerOrderId()**](ChannelPartnerApi.md#getChannelPartnerOrderByChannelPartnerOrderId) | **GET** /channel_partner/orders/by_channel_partner_order_id/{order_id} | Retrieve a channel partner order by the channel partner order id
[**getChannelPartnerReasonCodes()**](ChannelPartnerApi.md#getChannelPartnerReasonCodes) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/reason_codes | Retrieve reject and refund reason codes.
[**getChannelPartnerShipToPreference()**](ChannelPartnerApi.md#getChannelPartnerShipToPreference) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Retrieve the ship to preference associated with the channel partner and the specific id.
[**getChannelPartnerShipToPreferences()**](ChannelPartnerApi.md#getChannelPartnerShipToPreferences) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Retrieve the ship to preferences associated with the channel partner.
[**getChannelPartners()**](ChannelPartnerApi.md#getChannelPartners) | **GET** /channel_partner/channel_partners | Retrieve the channel partners configured on the account.
[**importChannelPartnerOrder()**](ChannelPartnerApi.md#importChannelPartnerOrder) | **POST** /channel_partner/import | Insert channel partner order
[**insertChannelPartnerShipToPreference()**](ChannelPartnerApi.md#insertChannelPartnerShipToPreference) | **POST** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Insert a ship to preference record for the channel partner.
[**refundChannelPartnerOrder()**](ChannelPartnerApi.md#refundChannelPartnerOrder) | **PUT** /channel_partner/orders/{order_id}/refund | Refund a channel partner order
[**updateChannelPartnerShipToPreference()**](ChannelPartnerApi.md#updateChannelPartnerShipToPreference) | **PUT** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Update a ship to preference record for the channel partner.


## `cancelOrderByChannelPartnerOrderId()`

```php
cancelOrderByChannelPartnerOrderId($order_id): \ultracart\v2\models\ChannelPartnerCancelResponse
```

Cancel channel partner order by channel partner order id

Cancel channel partner order by channel partner order id


### Example

```php
<?php

ini_set('display_errors', 1);

/*

cancelOrderByChannelPartnerOrderId takes a channel partner order id, which is the external order id, and attempts
to 'cancel' the order.  UltraCart doesn't have a cancel order state, so this needs some explanation of what happens.

Here is the logic of the cancel process:
If the Order stage is [this] then do [that]:
    'Completed Order'       -> Error: "Order has already been completed."
    'Rejected'              -> Error: "Order has already been rejected."
    'Accounts Receivable'   -> Success: order is rejected.
    'Preordered'            -> Success: order is rejected.
    'Quote Sent'            -> Success: order is rejected.
    'Quote Requested'       -> Success: order is rejected.

The remaining stages are Fraud Review and Shipping Department.  Orders in these stages have already completed payment.
From this point, complex logic determines if the order has already shipped, or is queued to ship in a way that cannot be canceled.
Here is the logic for those stages, but the gist of it all is this:  If you receive any of the errors below, the order has progressed past a point where it can be canceled.
SHIPPING LOGIC:
Iterate through each item and consider it's shipping status:
    Item has already been transmitted to fulfillment center (contains a transmitted dts) -> Error: "The order has already had an item that has been transmitted to the distribution center."
    Does item DC (distribution center) have a transmission mechanism configured?
        YES -> Does the transmission have schedules? If NO -> Error: "The distribution center does not have any schedules so it would be an immediate transmission."
        NO -> Error: "Cant tell if we can cancel because the DC doesnt have a transport configured."

If the above logic completes without errors, the following conditions must be met:
Order has DC activity records.  If NO -> Error: "There is no activity in the DC queue when there should be."
There must be at least 5 minutes before the next DC transmission. If NO -> Error: "Activity record is not at least 5 minutes away so we need to bail."

At this point, the order will be canceled with the following activity:
1) Distribution Center activity is cleared
2) The order is refunded.  If the order is less than 24 hours old, a void is attempted instead.


Other Possible Errors:
System errors -> "Internal error.  Please contact UltraCart Support."
Order does not exist -> "Invalid order ID specified."
During refunding, original transaction could not be found -> "Unable to find original transaction on the order."
During refunding, original transaction was found, but transaction id could not be found -> "Unable to locate original transaction reference number."
During refunding, PayPal was used by no longer configured -> "PayPal is no longer configured on your account to refund against."
Gateway does not support refunds -> [GatewayName] does not support refunds at this time.

 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);

$channel_partner_order_id = 'BLAH-BLAH-123';
try {
    $cancel_result = $channel_partner_api->cancelOrderByChannelPartnerOrderId($channel_partner_order_id);
    if(!$cancel_result->getSuccess()){
        $errors = $cancel_result->getCancelErrors();
        foreach ($errors as $error){
            echo $error . "\n";
        }
    }

} catch (ApiException $e) {
    var_dump($e);  // Dumps all exception information
}

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The channel partner order id to delete. |

### Return type

[**\ultracart\v2\models\ChannelPartnerCancelResponse**](../Model/ChannelPartnerCancelResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrderByUltraCartOrderId()`

```php
cancelOrderByUltraCartOrderId($order_id): \ultracart\v2\models\ChannelPartnerCancelResponse
```

Cancel channel partner order by UltraCart order id

Cancel channel partner order by UltraCart order id


### Example

```php
<?php

ini_set('display_errors', 1);

/*

cancelOrderByUltraCartOrderId takes an UltraCart order id and attempts to 'cancel' the order.
UltraCart doesn't have a cancel order state, so this needs some explanation of what happens.

Here is the logic of the cancel process:
If the Order stage is [this] then do [that]:
    'Completed Order'       -> Error: "Order has already been completed."
    'Rejected'              -> Error: "Order has already been rejected."
    'Accounts Receivable'   -> Success: order is rejected.
    'Preordered'            -> Success: order is rejected.
    'Quote Sent'            -> Success: order is rejected.
    'Quote Requested'       -> Success: order is rejected.

The remaining stages are Fraud Review and Shipping Department.  Orders in these stages have already completed payment.
From this point, complex logic determines if the order has already shipped, or is queued to ship in a way that cannot be canceled.
Here is the logic for those stages, but the gist of it all is this:  If you receive any of the errors below, the order has progressed past a point where it can be canceled.
SHIPPING LOGIC:
Iterate through each item and consider it's shipping status:
    Item has already been transmitted to fulfillment center (contains a transmitted dts) -> Error: "The order has already had an item that has been transmitted to the distribution center."
    Does item DC (distribution center) have a transmission mechanism configured?
        YES -> Does the transmission have schedules? If NO -> Error: "The distribution center does not have any schedules so it would be an immediate transmission."
        NO -> Error: "Cant tell if we can cancel because the DC doesnt have a transport configured."

If the above logic completes without errors, the following conditions must be met:
Order has DC activity records.  If NO -> Error: "There is no activity in the DC queue when there should be."
There must be at least 5 minutes before the next DC transmission. If NO -> Error: "Activity record is not at least 5 minutes away so we need to bail."

At this point, the order will be canceled with the following activity:
1) Distribution Center activity is cleared
2) The order is refunded.  If the order is less than 24 hours old, a void is attempted instead.


Other Possible Errors:
System errors -> "Internal error.  Please contact UltraCart Support."
Order does not exist -> "Invalid order ID specified."
During refunding, original transaction could not be found -> "Unable to find original transaction on the order."
During refunding, original transaction was found, but transaction id could not be found -> "Unable to locate original transaction reference number."
During refunding, PayPal was used by no longer configured -> "PayPal is no longer configured on your account to refund against."
Gateway does not support refunds -> [GatewayName] does not support refunds at this time.

 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);

$ultracart_order_id = 'DEMO-12345678980';
try {
    $cancel_result = $channel_partner_api->cancelOrderByUltraCartOrderId($ultracart_order_id);
    if(!$cancel_result->getSuccess()){
        $errors = $cancel_result->getCancelErrors();
        foreach ($errors as $error){
            echo $error . "\n";
        }
    }

} catch (ApiException $e) {
    var_dump($e);  // Dumps all exception information
}

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The UltraCart order id to delete. |

### Return type

[**\ultracart\v2\models\ChannelPartnerCancelResponse**](../Model/ChannelPartnerCancelResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannelPartnerShipToPreference()`

```php
deleteChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid)
```

Delete a ship to preference record for the channel partner.

Delete a ship to preference record for the channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 Deletes a ChannelPartnerShiptoPreference.  These preferences are used by EDI channel partners to automatically
 apply return policies and add additional free items to EDI orders based on the EDI code that is present.

 Success will return a status code 204 (No content)

 Possible Errors:
 Attempting to interact with a channel partner other than the one tied to your API Key:
    "Invalid channel_partner_oid specified.  Your REST API key may only interact with channel_partner_oid: 12345"
 Supply a bad preference oid: "Invalid channel_partner_ship_to_preference_oid specified."

 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$channel_partner_shipto_preference_oid = 67890; // you will usually get this by calling getChannelPartnerShipToPreferences()
$channel_partner_oid = 12345;

$channel_partner_api->deleteChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_shipto_preference_oid);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |

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

## `estimateShippingForChannelPartnerOrder()`

```php
estimateShippingForChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerEstimateShippingResponse
```

Estimate shipping for channel partner order

Estimate shipping for order from a channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 This is a helper function for call centers to calculate the shipping cost on an order.  In a typical flow, the call center
 will collect all the shipping information and items being purchased into a ChannelPartnerOrder object.
 They will then call this method, passing in the order object.  The response will contain the shipping estimates
 that the call center can present to the customer.  Once the customer selects a particulate estimate,
 they can then plug that cost into their call center application and complete the order.

 Possible Errors:
 Using an API key that is not tied to a channel partner: "This API Key does not have permission to interact with channel partner orders.  Please review your Channel Partner configuration."
 Order has invalid channel partner code: "Invalid channel partner code"
 Order has no items: "null order.items passed." or "order.items array contains a null entry."
 Order has no channel partner order id: "order.channelPartnerOrderId must be specified."
 Order channel partner order id is a duplicate:  "order.channelPartnerOrderId [XYZ] already used."
 Channel Partner is inactive: "partner is inactive."


 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\models\ChannelPartnerOrder;
use ultracart\v2\models\ChannelPartnerOrderItem;
use ultracart\v2\models\ChannelPartnerOrderItemOption;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);

$order = new ChannelPartnerOrder();
$order->setChannelPartnerOrderId("widget-1245-abc-1");
$order->setCoupons(["10OFF"]);
// DeliveryDate will impact shipping estimates if there is a delivery deadline.
// $order->setDeliveryDate(date('c', strtotime('+14 days')));

$item = new ChannelPartnerOrderItem();
// $item->setArbitraryUnitCost(9.99);
// $item->setAutoOrderLastRebillDts(date('c', strtotime('-30 days')));
// $item->setAutoOrderSchedule("Weekly");
$item->setMerchantItemId("shirt");

$sizeOption = new ChannelPartnerOrderItemOption();
$sizeOption->setName("Size");
$sizeOption->setValue("Small");

$colorOption = new ChannelPartnerOrderItemOption();
$colorOption->setName("Color");
$colorOption->setValue("Orange");

$item->setOptions([$sizeOption, $colorOption]);
$item->setQuantity(1);
$item->setUpsell(false);

$order->setItems([$item]);

// $order->setShipOnDate(date('c', strtotime('+7 days')));
$order->setShipToResidential(true);
$order->setShiptoAddress1("55 Main Street");
$order->setShiptoAddress2("Suite 202");
$order->setShiptoCity("Duluth");
$order->setShiptoCompany("Widgets Inc");
$order->setShiptoCountryCode("US");
$order->setShiptoDayPhone("6785552323");
$order->setShiptoEveningPhone("7703334444");
$order->setShiptoFirstName("Sally");
$order->setShiptoLastName("McGonkyDee");
$order->setShiptoPostalCode("30097");
$order->setShiptoStateRegion("GA");
$order->setShiptoTitle("Director");


$api_response = $channel_partner_api->estimateShippingForChannelPartnerOrder($order);
$estimates = $api_response->getEstimates();

// TODO: Apply one estimate shipping method (name) and cost to your channel partner order.

echo '<html lang="en"><body><pre>';
foreach ($estimates as $estimate) {
    var_dump($estimate);
}
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order needing shipping estimate |

### Return type

[**\ultracart\v2\models\ChannelPartnerEstimateShippingResponse**](../Model/ChannelPartnerEstimateShippingResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateTaxForChannelPartnerOrder()`

```php
estimateTaxForChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerEstimateTaxResponse
```

Estimate tax for channel partner order

Estimate tax for order from a channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 This is a helper function for call centers to calculate the tax on an order.  In a typical flow, the call center
 will collect all the shipping information and items being purchased into a ChannelPartnerOrder object.
 They will then call this method, passing in the order object.  The response will contain the tax that should be
 collected.  They can then plug that tax into their call center application and complete the order.

 Possible Errors:
 Using an API key that is not tied to a channel partner: "This API Key does not have permission to interact with channel partner orders.  Please review your Channel Partner configuration."
 Order has invalid channel partner code: "Invalid channel partner code"
 Order has no items: "null order.items passed." or "order.items array contains a null entry."
 Order has no channel partner order id: "order.channelPartnerOrderId must be specified."
 Order channel partner order id is a duplicate:  "order.channelPartnerOrderId [XYZ] already used."
 Channel Partner is inactive: "partner is inactive."


 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\models\ChannelPartnerOrder;
use ultracart\v2\models\ChannelPartnerOrderItem;
use ultracart\v2\models\ChannelPartnerOrderItemOption;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);

$order = new ChannelPartnerOrder();
$order->setChannelPartnerOrderId("widget-1245-abc-1");
$order->setCoupons(["10OFF"]);
// DeliveryDate will impact shipping estimates if there is a delivery deadline.
// $order->setDeliveryDate(date('c', strtotime('+14 days')));

$item = new ChannelPartnerOrderItem();
// $item->setArbitraryUnitCost(9.99);
// $item->setAutoOrderLastRebillDts(date('c', strtotime('-30 days')));
// $item->setAutoOrderSchedule("Weekly");
$item->setMerchantItemId("shirt");

$sizeOption = new ChannelPartnerOrderItemOption();
$sizeOption->setName("Size");
$sizeOption->setValue("Small");

$colorOption = new ChannelPartnerOrderItemOption();
$colorOption->setName("Color");
$colorOption->setValue("Orange");

$item->setOptions([$sizeOption, $colorOption]);
$item->setQuantity(1);
$item->setUpsell(false);

$order->setItems([$item]);

// $order->setShipOnDate(date('c', strtotime('+7 days')));
$order->setShipToResidential(true);
$order->setShiptoAddress1("55 Main Street");
$order->setShiptoAddress2("Suite 202");
$order->setShiptoCity("Duluth");
$order->setShiptoCompany("Widgets Inc");
$order->setShiptoCountryCode("US");
$order->setShiptoDayPhone("6785552323");
$order->setShiptoEveningPhone("7703334444");
$order->setShiptoFirstName("Sally");
$order->setShiptoLastName("McGonkyDee");
$order->setShiptoPostalCode("30097");
$order->setShiptoStateRegion("GA");
$order->setShiptoTitle("Director");


$api_response = $channel_partner_api->estimateTaxForChannelPartnerOrder($order);
$arbitraryTax = $api_response->getArbitraryTax();
// TODO: Apply this tax to your channel partner order.


echo '<html lang="en"><body><pre>';
var_dump($arbitraryTax);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order needing tax estimate |

### Return type

[**\ultracart\v2\models\ChannelPartnerEstimateTaxResponse**](../Model/ChannelPartnerEstimateTaxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartnerOrder()`

```php
getChannelPartnerOrder($order_id, $_expand): \ultracart\v2\models\OrderResponse
```

Retrieve a channel partner order

Retrieves a single order using the specified order id.  Only orders belonging to this channel partner may be retrieved.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * ChannelPartnerApi.getChannelPartnerOrder() retrieves a single order for a given order_id.  It is identical to the
 * OrderApi.getOrder() call, but allows for a restricted permission set.  The channel partner api assumes
 * a tie to a Channel Partner and only allows retrieval of orders created by that Channel Partner.
 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);


// The expansion variable instructs UltraCart how much information to return.  The order object is large and
// while it's easily manageable for a single order, when querying thousands of orders, is useful to reduce
// payload size.
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/

// A channel partner will almost always query an order for the purpose of turning around and submitting it to a refund call.
// As such, the expansion most likely needed is listed below.
$expansion = "item,summary,shipping";


// This order MUST be an order associated with this channel partner or you will receive a 400 Bad Request.
$order_id = 'DEMO-0009110366';
$api_response = $channel_partner_api->getChannelPartnerOrder($order_id, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$order = $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See OrderApi.getOrder documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartnerOrderByChannelPartnerOrderId()`

```php
getChannelPartnerOrderByChannelPartnerOrderId($order_id, $_expand): \ultracart\v2\models\OrderResponse
```

Retrieve a channel partner order by the channel partner order id

Retrieves a single order using the channel partner order id, not the ultracart order id.  Only orders belonging to this channel partner may be retrieved.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * ChannelPartnerApi.getChannelPartnerOrderByChannelPartnerOrderId() retrieves a single order for a given
 * channel partner order_id.  This might be useful for call centers which only have their order ids and not UltraCart's.
 * It is identical to the OrderApi.getOrder() call in functionality and result,
 * but allows for a restricted permission set.  The channel partner api assumes a tie to a Channel Partner and
 * only allows retrieval of orders created by that Channel Partner.
 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);


// The expansion variable instructs UltraCart how much information to return.  The order object is large and
// while it's easily manageable for a single order, when querying thousands of orders, is useful to reduce
// payload size.
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/

// A channel partner will almost always query an order for the purpose of turning around and submitting it to a refund call.
// As such, the expansion most likely needed is listed below.
$expansion = "item,summary,shipping";


// This order MUST be an order associated with this channel partner or you will receive a 400 Bad Request.
$channel_partner_order_id = 'MY-CALL-CENTER-BLAH-BLAH';
$api_response = $channel_partner_api->getChannelPartnerOrderByChannelPartnerOrderId($channel_partner_order_id, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$order = $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The channel partner order id to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See OrderApi.getOrder documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartnerReasonCodes()`

```php
getChannelPartnerReasonCodes($channel_partner_oid): \ultracart\v2\models\ChanelPartnerReasonCodesResponse
```

Retrieve reject and refund reason codes.

Retrieve reject and refund reason codes.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    Retrieves a list of all channel partner reason codes the merchant may or may not have configured.
 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$api_response = $channel_partner_api->getChannelPartnerReasonCodes(18413);


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
 **channel_partner_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ChanelPartnerReasonCodesResponse**](../Model/ChanelPartnerReasonCodesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartnerShipToPreference()`

```php
getChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid): \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse
```

Retrieve the ship to preference associated with the channel partner and the specific id.

Retrieve the ship to preference associated with the channel partner and the specific id.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 Retrieves a shipto preference for a channel partner.
 These preferences are used by EDI channel partners to automatically
 apply return policies and add additional free items to EDI orders based on the EDI code that is present.

 Possible Errors:
 Attempting to interact with a channel partner other than the one tied to your API Key:
    "Invalid channel_partner_oid specified.  Your REST API key may only interact with channel_partner_oid: 12345"
 Supplying a bad channel partner oid: "Invalid channel_partner_oid specified."
 Supplying a bad channel partner shipto preference oid: "Invalid channel_partner_ship_to_preference_oid specified."

 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$channel_partner_oid = 12345;
$channel_partner_shipto_preference_oid = 67890;
$api_response = $channel_partner_api->getChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_shipto_preference_oid);


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$preference = $api_response->getShipToPreference();

echo '<html lang="en"><body><pre>';
var_dump($preference);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartnerShipToPreferences()`

```php
getChannelPartnerShipToPreferences($channel_partner_oid): \ultracart\v2\models\ChannelPartnerShipToPreferencesResponse
```

Retrieve the ship to preferences associated with the channel partner.

Retrieve the ship to preferences associated with the channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 Retrieves all shipto preferences for a channel partner.
 These preferences are used by EDI channel partners to automatically
 apply return policies and add additional free items to EDI orders based on the EDI code that is present.

 Possible Errors:
 Attempting to interact with a channel partner other than the one tied to your API Key:
    "Invalid channel_partner_oid specified.  Your REST API key may only interact with channel_partner_oid: 12345"
 Supplying a bad channel partner oid: "Invalid channel_partner_oid specified."

 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$channel_partner_oid = 12345;
$api_response = $channel_partner_api->getChannelPartnerShipToPreferences($channel_partner_oid);


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$preferences = $api_response->getShipToPreferences();

echo '<html lang="en"><body><pre>';
foreach ($preferences as $preference) {
    var_dump($preference);
}
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferencesResponse**](../Model/ChannelPartnerShipToPreferencesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelPartners()`

```php
getChannelPartners(): \ultracart\v2\models\ChannelPartnersResponse
```

Retrieve the channel partners configured on the account.

Retrieve the channel partners configured on the account.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    Retrieves a list of all channel partners configured for this merchant.  If the API KEY used is tied to a specific
    Channel Partner, then the results will contain only that Channel Partner.
 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$api_response = $channel_partner_api->getChannelPartners();


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$channel_partners = $api_response->getChannelPartners();

echo '<html lang="en"><body><pre>';
foreach ($channel_partners as $channel_partner) {
    var_dump($channel_partner);
}
echo '</pre></body></html>';
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ChannelPartnersResponse**](../Model/ChannelPartnersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importChannelPartnerOrder()`

```php
importChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerImportResponse
```

Insert channel partner order

Insert order from a channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    To run channel partner examples, you will need:
    1) An API Key: https://secure.ultracart.com/merchant/configuration/apiManagementApp.do
    2) That API Key must be assigned to a channel partner: https://secure.ultracart.com/merchant/configuration/customChannelPartnerListLoad.do

    The spreadsheet import docs will serve you well here.  They describe many fields
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377246/Channel+Partner+API+-+Spreadsheet+Import

 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\models\ChannelPartnerOrder;
use ultracart\v2\models\ChannelPartnerOrderItem;
use ultracart\v2\models\ChannelPartnerOrderItemOption;
use ultracart\v2\models\ChannelPartnerOrderTransaction;
use ultracart\v2\models\ChannelPartnerOrderTransactionDetail;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);

// NOTICE:
// The real difficulty with using this API is the hosted fields requirement for credit card information.
// You will need to incorporate UltraCart hosted fields in your Customer Service UI and capture credit card
// information through the hosted fields and then provide the tokens here.  You CANNOT provide raw credit
// card information via this interface.
// The two fields in this API are hostedFieldsCardToken and hostedFieldsCvvToken
// Within this sdk_samples github project, review the /hosted_fields/hosted_fields.html file for an example

// There are TWO examples.  The first is an order that still needs the credit card charged.  This example uses
// the hosted fields to collect payment information and pass it to UltraCart for processing.  The second example
// already has payment processed and just passes in the authorization information.

// ---------------------------------------------
// ---------------------------------------------
// Example 1 - Order needs payment processing
// ---------------------------------------------
// ---------------------------------------------

$order = new ChannelPartnerOrder();

// $order->setAdvertisingSource("Friend"); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377001/Advertising+Sources
// $order->setAffiliateId(856234); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377727/Affiliates
// $order->setAffiliateSubId(1234); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376754/Allowing+Affiliates+to+use+Sub-IDs
// $order->setArbitraryShippingHandlingTotal(9.99);
// $order->setArbitraryTax(2.50);
// $order->setArbitraryTaxRate(7.0);
// $order->setArbitraryTaxableSubtotal(69.99);

$order->setAssociateWithCustomerProfileIfPresent(true);
$order->setAutoApprovePurchaseOrder(true);
$order->setBilltoAddress1("11460 Johns Creek Parkway");
$order->setBilltoAddress2("Suite 101");
$order->setBilltoCity("Duluth");
$order->setBilltoCompany("Widgets Inc");
$order->setBilltoCountryCode("US");
$order->setBilltoDayPhone("6784153823");
$order->setBilltoEveningPhone("6784154019");
$order->setBilltoFirstName("John");
$order->setBilltoLastName("Smith");
$order->setBilltoPostalCode("30097");
$order->setBilltoStateRegion("GA");
$order->setBilltoTitle("Sir");
$order->setCcEmail("orders@widgets.com");
$order->setChannelPartnerOrderId("widget-1245-abc");
$order->setConsiderRecurring(false);
$order->setCoupons(["10OFF", "BUY1GET1"]);

// $order->setCreditCardAuthorizationAmount( 69.99);
// $order->setCreditCardAuthorizationDts(date('Y-m-d', time()) . "T00:00:00+00:00"); // this will usually not be 'now'.  it will be the actual auth date
// $order->setCreditCardAuthorizationNumber("1234");

$order->setCreditCardExpirationMonth(5);
$order->setCreditCardExpirationYear(2032);
$order->setCreditCardType("VISA"); // see the hosted fields below for the card number and cvv tokens
$order->setCustomField1("Whatever");
$order->setCustomField2("You");
$order->setCustomField3("Want");
$order->setCustomField4("Can");
$order->setCustomField5("Go");
$order->setCustomField6("In");
$order->setCustomField7("CustomFields");
$order->setDeliveryDate(date('Y-m-d', time()) . "T00:00:00+00:00");
$order->setEmail("ceo@widgets.com");
$order->setGift(false);

$order->setGiftEmail("sally@aol.com");
$order->setGiftMessage("Congratulations on your promotion!");

$order->setHostedFieldsCardToken("7C97B0AAA26AB10180B4B29F00380101");
$order->setHostedFieldsCvvToken("C684AB4336787F0180B4B51971380101");

// $order->setInsuranceApplicationId(insuranceApplicationId); // these are used by only a handful of specialized merchants
// $order->setInsuranceClaimId(insuranceClaimId); // these are used by only a handful of specialized merchants

$order->setIpAddress("34.125.95.217");

// -- Items start ---
$item = new ChannelPartnerOrderItem();
// $item->setArbitraryUnitCost(9.99);
// $item->setAutoOrderLastRebillDts(date('Y-m-d', time()) . "T00:00:00+00:00");
// $item->setAutoOrderSchedule("Weekly");

$item->setMerchantItemId("shirt");
$item->setQuantity(1);
$item->setUpsell(false);

$item_option1 = new ChannelPartnerOrderItemOption();
$item_option1->setName("Size");
$item_option1->setValue("Small");

$item_option2 = new ChannelPartnerOrderItemOption();
$item_option2->setName("Color");
$item_option2->setValue("Orange");

$item->setOptions([$item_option1, $item_option2]);

$order->setItems([$item]);
// -- Items End ---


$order->setLeastCostRoute(true); // Give me the lowest cost shipping
$order->setLeastCostRouteShippingMethods(["FedEx: Ground", "UPS: Ground", "USPS: Priority"]);
$order->setMailingListOptIn(true); // Yes); I confirmed with the customer personally they wish to be on my mailing lists.
$order->setNoRealtimePaymentProcessing(false);
$order->setPaymentMethod(ChannelPartnerOrder::PAYMENT_METHOD_CREDIT_CARD);
// $order->setPurchaseOrderNumber("PO-12345");
$order->setRotatingTransactionGatewayCode("MyStripe"); // We wish this to be charged against our Stripe gateway
$order->setScreenBrandingThemeCode("SF1986"); // Theme codes predated StoreFronts.  Each StoreFront still has a theme code under the hood.  We need that here.  See this screen to find your code: https://secure.ultracart.com/merchant/configuration/customerServiceLoad.do
$order->setShipOnDate(date('Y-m-d', time()) . "T00:00:00+00:00");
$order->setShipToResidential(true);
// $order->setShippingMethod("FedEx: Ground"); // We're using LeastCostRoute); so we do not supply this value
$order->setShiptoAddress1("55 Main Street");
$order->setShiptoAddress2("Suite 202");
$order->setShiptoCity("Duluth");
$order->setShiptoCompany("Widgets Inc");
$order->setShiptoCountryCode("US");
$order->setShiptoDayPhone("6785552323");
$order->setShiptoEveningPhone("7703334444");
$order->setShiptoFirstName("Sally");
$order->setShiptoLastName("McGonkyDee");
$order->setShiptoPostalCode("30097");
$order->setShiptoStateRegion("GA");
$order->setShiptoTitle("Director");
$order->setSkipPaymentProcessing(false);
$order->setSpecialInstructions("Please wrap this in bubble wrap because my FedEx delivery guy is abusive to packages");
$order->setStoreCompleted(false); // this will bypass everything); including shipping.  useful only for importing old orders long completed
$order->setStorefrontHostName('store.mysite.com');
$order->setStoreIfPaymentDeclines(false); // if payment fails); this can send it to Accounts Receivable.  Do not want that.  Fail if payment fails.
$order->setTaxCounty("Gwinnett");
$order->setTaxExempt(false);

$orderTransaction = new ChannelPartnerOrderTransaction();
$orderTransaction->setSuccessful(false); // we haven't charged the card yet, so this is false.
$orderTransaction->setDetails([]); // we haven't charged the card yet, so this is empty.
$order->setTransaction($orderTransaction);
$order->setTreatWarningsAsErrors(true);


$api_response = $channel_partner_api->importChannelPartnerOrder($order);


// ---------------------------------------------
// ---------------------------------------------
// Example 2 - Order already processed
// ---------------------------------------------
// ---------------------------------------------

$order = new ChannelPartnerOrder();

// $order->setAdvertisingSource("Friend"); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377001/Advertising+Sources
// $order->setAffiliateId(856234); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377727/Affiliates
// $order->setAffiliateSubId(1234); // https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376754/Allowing+Affiliates+to+use+Sub-IDs
// $order->setArbitraryShippingHandlingTotal(9.99);
// $order->setArbitraryTax(2.50);
// $order->setArbitraryTaxRate(7.0);
// $order->setArbitraryTaxableSubtotal(69.99);

$order->setAssociateWithCustomerProfileIfPresent(true);
$order->setAutoApprovePurchaseOrder(true);
$order->setBilltoAddress1("11460 Johns Creek Parkway");
$order->setBilltoAddress2("Suite 101");
$order->setBilltoCity("Duluth");
$order->setBilltoCompany("Widgets Inc");
$order->setBilltoCountryCode("US");
$order->setBilltoDayPhone("6784153823");
$order->setBilltoEveningPhone("6784154019");
$order->setBilltoFirstName("John");
$order->setBilltoLastName("Smith");
$order->setBilltoPostalCode("30097");
$order->setBilltoStateRegion("GA");
$order->setBilltoTitle("Sir");
$order->setCcEmail("orders@widgets.com");
$order->setChannelPartnerOrderId("widget-1245-abc");
$order->setConsiderRecurring(false);
$order->setCoupons(["10OFF", "BUY1GET1"]);

// $order->setCreditCardAuthorizationAmount( 69.99);
// $order->setCreditCardAuthorizationDts(date('Y-m-d', time()) . "T00:00:00+00:00"); // this will usually not be 'now'.  it will be the actual auth date
// $order->setCreditCardAuthorizationNumber("1234");

$order->setCreditCardExpirationMonth(5);
$order->setCreditCardExpirationYear(2032);
$order->setCreditCardType("VISA"); // see the hosted fields below for the card number and cvv tokens
$order->setCustomField1("Whatever");
$order->setCustomField2("You");
$order->setCustomField3("Want");
$order->setCustomField4("Can");
$order->setCustomField5("Go");
$order->setCustomField6("In");
$order->setCustomField7("CustomFields");
$order->setDeliveryDate(date('Y-m-d', time()) . "T00:00:00+00:00");
$order->setEmail("ceo@widgets.com");
$order->setGift(false);

$order->setGiftEmail("sally@aol.com");
$order->setGiftMessage("Congratulations on your promotion!");

// $order->setInsuranceApplicationId(insuranceApplicationId); // these are used by only a handful of specialized merchants
// $order->setInsuranceClaimId(insuranceClaimId); // these are used by only a handful of specialized merchants

$order->setIpAddress("34.125.95.217");

// -- Items start ---
$item = new ChannelPartnerOrderItem();
// $item->setArbitraryUnitCost(9.99);
// $item->setAutoOrderLastRebillDts(date('Y-m-d', time()) . "T00:00:00+00:00");
// $item->setAutoOrderSchedule("Weekly");

$item->setMerchantItemId("shirt");
$item->setQuantity(1);
$item->setUpsell(false);

$item_option1 = new ChannelPartnerOrderItemOption();
$item_option1->setName("Size");
$item_option1->setValue("Small");

$item_option2 = new ChannelPartnerOrderItemOption();
$item_option2->setName("Color");
$item_option2->setValue("Orange");

$item->setOptions([$item_option1, $item_option2]);

$order->setItems([$item]);
// -- Items End ---


// We don't use least cost routing here.  We've already completed the order and should know what shipping method
// the customer was charged for.  So that is set in the $order->setShippingMethod() function.
// $order->setLeastCostRoute(true); // Give me the lowest cost shipping
// $order->setLeastCostRouteShippingMethods(["FedEx: Ground", "UPS: Ground", "USPS: Priority"]);
$order->setMailingListOptIn(true); // Yes); I confirmed with the customer personally they wish to be on my mailing lists.
$order->setNoRealtimePaymentProcessing(true); // nothing to charge, payment was already collected
$order->setPaymentMethod(ChannelPartnerOrder::PAYMENT_METHOD_CREDIT_CARD);
// $order->setPurchaseOrderNumber("PO-12345");
$order->setRotatingTransactionGatewayCode("MyStripe"); // We wish this to be charged against our Stripe gateway
$order->setScreenBrandingThemeCode("SF1986"); // Theme codes predated StoreFronts.  Each StoreFront still has a theme code under the hood.  We need that here.  See this screen to find your code: https://secure.ultracart.com/merchant/configuration/customerServiceLoad.do
$order->setShipOnDate(date('Y-m-d', time()) . "T00:00:00+00:00");
$order->setShipToResidential(true);
$order->setShippingMethod("FedEx: Ground");
$order->setShiptoAddress1("55 Main Street");
$order->setShiptoAddress2("Suite 202");
$order->setShiptoCity("Duluth");
$order->setShiptoCompany("Widgets Inc");
$order->setShiptoCountryCode("US");
$order->setShiptoDayPhone("6785552323");
$order->setShiptoEveningPhone("7703334444");
$order->setShiptoFirstName("Sally");
$order->setShiptoLastName("McGonkyDee");
$order->setShiptoPostalCode("30097");
$order->setShiptoStateRegion("GA");
$order->setShiptoTitle("Director");
$order->setSkipPaymentProcessing(true);  // bypass payment
$order->setSpecialInstructions("Please wrap this in bubble wrap because my FedEx delivery guy is abusive to packages");
$order->setStoreCompleted(true); // this is an old order or an order handled completely outside UltraCart, so do not do anything to it.  Just store it.
$order->setStorefrontHostName('store.mysite.com');
$order->setStoreIfPaymentDeclines(false); // if payment fails); this can send it to Accounts Receivable.  Do not want that.  Fail if payment fails.
$order->setTaxCounty("Gwinnett");
$order->setTaxExempt(false);

$orderTransaction = new ChannelPartnerOrderTransaction();
$orderTransaction->setSuccessful(true); // we haven't charged the card yet, so this is false.

$td1 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td1->setName("AVS Code");
$td1->setValue("X");

$td2 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td2->setName("Authorization Code");
$td2->setValue("123456");

$td3 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td3->setName("CVV Code");
$td3->setValue("M");

$td4 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td4->setName("Response Code");
$td4->setValue("Authorized");

$td5 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td5->setName("Reason Code");
$td5->setValue("1");

$td6 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td6->setName("Response Subcode");
$td6->setValue("1");

$td7 = new ChannelPartnerOrderTransactionDetail(); // 'td' is short for transaction detail
$td7->setName("Transaction ID");
$td7->setValue("1234567890");

$orderTransaction->setDetails([$td1, $td2, $td3, $td4, $td5, $td6, $td7]); //
$order->setTransaction($orderTransaction);
$order->setTreatWarningsAsErrors(true);


$api_response = $channel_partner_api->importChannelPartnerOrder($order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order to insert |

### Return type

[**\ultracart\v2\models\ChannelPartnerImportResponse**](../Model/ChannelPartnerImportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertChannelPartnerShipToPreference()`

```php
insertChannelPartnerShipToPreference($channel_partner_oid, $ship_to_preference): \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse
```

Insert a ship to preference record for the channel partner.

Insert a ship to preference record for the channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 Inserts a channel partner shipto preference for a channel partner.
 These preferences are used by EDI channel partners to automatically
 apply return policies and add additional free items to EDI orders based on the EDI code that is present.

 Possible Errors:
 Attempting to interact with a channel partner other than the one tied to your API Key:
    "Invalid channel_partner_oid specified.  Your REST API key may only interact with channel_partner_oid: 12345"
 Supplying a bad channel partner oid: "Invalid channel_partner_oid specified."

 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\models\ChannelPartnerShipToPreference;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$channel_partner_oid = 12345;

$preference = new ChannelPartnerShipToPreference();
$preference->setChannelPartnerOid($channel_partner_oid);
$preference->setShipToEdiCode('EDI_CODE_HERE');
$preference->setReturnPolicy("This is some return policy text that will be printed on the packing slip.");
$preference->setAdditionalKitComponentItemIds(['ITEM_ID1', 'ITEM_ID2', 'ITEM_ID3']);
$preference->setDescription("This is a merchant friendly description to help me remember what the above setting are.");

$api_response = $channel_partner_api->insertChannelPartnerShipToPreference($channel_partner_oid, $preference);


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$inserted_preference = $api_response->getShipToPreference();

echo '<html lang="en"><body><pre>';
// This should equal what you submitted.
var_dump($inserted_preference);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **ship_to_preference** | [**\ultracart\v2\models\ChannelPartnerShipToPreference**](../Model/ChannelPartnerShipToPreference.md)| Ship to preference to create |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundChannelPartnerOrder()`

```php
refundChannelPartnerOrder($order_id, $order, $reject_after_refund, $skip_customer_notification, $auto_order_cancel, $manual_refund, $reverse_affiliate_transactions, $issue_store_credit, $auto_order_cancel_reason, $_expand): \ultracart\v2\models\OrderResponse
```

Refund a channel partner order

Perform a refund operation on a channel partner order and then update the order if successful.  All of the object properties ending in _refunded should be the TOTAL amount that should end up being refunded.  UltraCart will calculate the actual amount to refund based upon the prior refunds.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * IMPORTANT: Do NOT construct the refunded order.  This method does a refund but also update the entire object, so start with an order query.
 * ALWAYS start with an order retrieved from the system.
 * 1. Call getChannelPartnerOrder or getChannelPartnerOrderByChannelPartnerOrderId to retrieve the order being refunded
 * 2. For a full refund, reverse the following:
 *    A. Set the refunded qty and refunded amount for each item.
 *    B. Set the refunded tax (if any)
 *    C. Set the refunded shipping
 * NOTE: refund amounts are positive numbers.  If any item total cost is $20.00, a full refunded amount would also be positive $20.00
 * See the ChannelPartnerApi.getChannelPartnerOrder() sample for details on that method.
 */


use ultracart\v2\api\ChannelPartnerApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
// for a comment on this expansion, see getChannelPartnerOrder sample.
$expansion = "item,summary,shipping";


// This order MUST be an order associated with this channel partner, or you will receive a 400 Bad Request.
$order_id = 'DEMO-0009106820';
$api_response = $channel_partner_api->getChannelPartnerOrder($order_id, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$order = $api_response->getOrder();

// RefundReason may be required, but is optional by default.
// RefundReason may be a set list, or may be freeform.  This is configured on the backend (secure.ultracart.com)
// by Navigating to Home -> Configuration -> Order Management -> Refund/Reject Reasons
// Warning: If this is a 2nd refund after an initial partial refund, be sure you account for the units and amount already refunded.
$order->setRefundReason('Damage Product');
$order->getSummary()->setTaxRefunded($order->getSummary()->getTaxRefunded());
$order->getSummary()->setShippingHandlingRefunded($order->getSummary()->getShippingHandlingTotal());
foreach ($order->getItems() as $item) {
    // item level refund reasons are optional, but may be required.  See the above breadcrumb trail for refund reason config.
    $item->setRefundReason('DifferentItem');
    $item->setQuantityRefunded($item->getQuantity());
    $item->setTotalRefunded($item->getTotalCostWithDiscount());
}

$reject_after_refund = false;
$skip_customer_notifications = true;
$auto_order_cancel = false; // if this was an auto order, and they wanted to cancel it, set this flag to true.
// set $manual_refund to true if the actual refund happened outside the system, and you just want a record of it.
// If UltraCart did not process this refund, $manual_refund should be true.
$manual_refund = false;
$reverse_affiliate_transactions = true; // for a full refund, the affiliate should not get credit, or should they?
$issue_store_credit = false;  // if true, the customer would receive store credit instead of a return on their credit card.
$auto_order_cancel_reason = null;

/** @noinspection PhpConditionAlreadyCheckedInspection */
$api_response = $channel_partner_api->refundChannelPartnerOrder($order_id, $order, $reject_after_refund,
    $skip_customer_notifications, $auto_order_cancel, $manual_refund, $reverse_affiliate_transactions,
    $issue_store_credit, $auto_order_cancel_reason, $expansion);

$error = $api_response->getError();
$updated_order = $api_response->getOrder();
// verify the updated order contains all the desired refunds.  verify that refunded total is equal to total.

// Note: The error 'Request to refund an invalid amount.' means you requested a total refund amount less than or equal to zero.
echo '<html lang="en"><body><pre>';
var_dump($error);
echo '<br/><br/><hr/><hr/><br/><br/>';
var_dump($updated_order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to refund. |
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to refund |
 **reject_after_refund** | **bool**| Reject order after refund | [optional] [default to false]
 **skip_customer_notification** | **bool**| Skip customer email notification | [optional] [default to false]
 **auto_order_cancel** | **bool**| Cancel associated auto orders | [optional] [default to false]
 **manual_refund** | **bool**| Consider a manual refund done externally | [optional] [default to false]
 **reverse_affiliate_transactions** | **bool**| Reverse affiliate transactions | [optional] [default to true]
 **issue_store_credit** | **bool**| Issue a store credit instead of refunding the original payment method, loyalty must be configured on merchant account | [optional] [default to false]
 **auto_order_cancel_reason** | **string**| Reason for auto orders cancellation | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See OrderApi.refundOrder documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelPartnerShipToPreference()`

```php
updateChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid, $ship_to_preference): \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse
```

Update a ship to preference record for the channel partner.

Update a ship to preference record for the channel partner.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 Updates a channel partner shipto preference for a channel partner.
 These preferences are used by EDI channel partners to automatically
 apply return policies and add additional free items to EDI orders based on the EDI code that is present.

 Possible Errors:
 Attempting to interact with a channel partner other than the one tied to your API Key:
    "Invalid channel_partner_oid specified.  Your REST API key may only interact with channel_partner_oid: 12345"
 Supplying a bad channel partner oid: "Invalid channel_partner_oid specified."

 */


use ultracart\v2\api\ChannelPartnerApi;
use ultracart\v2\models\ChannelPartnerShipToPreference;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$channel_partner_api = ChannelPartnerApi::usingApiKey(Constants::CHANNEL_PARTNER_API_KEY);
$channel_partner_oid = 12345;
$channel_partner_ship_to_preference_oid = 67890;

$api_response = $channel_partner_api->getChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid);

$preference = $api_response->getShipToPreference();
// Update some fields.
$preference->setShipToEdiCode('EDI_CODE_HERE');
$preference->setReturnPolicy("This is some return policy text that will be printed on the packing slip.");
$preference->setAdditionalKitComponentItemIds(['ITEM_ID1', 'ITEM_ID2', 'ITEM_ID3']);
$preference->setDescription("This is a merchant friendly description to help me remember what the above setting are.");

$api_response = $channel_partner_api->updateChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid, $preference);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$updated_preference = $api_response->getShipToPreference();

echo '<html lang="en"><body><pre>';
// This should equal what you submitted.
var_dump($updated_preference);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |
 **ship_to_preference** | [**\ultracart\v2\models\ChannelPartnerShipToPreference**](../Model/ChannelPartnerShipToPreference.md)| Ship to preference to create |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
