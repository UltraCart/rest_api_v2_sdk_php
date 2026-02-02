# ultracart\v2\FulfillmentApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgeOrders()**](FulfillmentApi.md#acknowledgeOrders) | **PUT** /fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
[**generatePackingSlip()**](FulfillmentApi.md#generatePackingSlip) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders/{order_id} | Generate a packing slip for this order for the given distribution center.
[**getDistributionCenterOrders()**](FulfillmentApi.md#getDistributionCenterOrders) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
[**getDistributionCenters()**](FulfillmentApi.md#getDistributionCenters) | **GET** /fulfillment/distribution_centers | Retrieve distribution centers
[**shipOrders()**](FulfillmentApi.md#shipOrders) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
[**updateInventory()**](FulfillmentApi.md#updateInventory) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory


## `acknowledgeOrders()`

```php
acknowledgeOrders($distribution_center_code, $order_ids)
```

Acknowledge receipt of orders.

Acknowledge receipt of orders so that they are removed from the fulfillment queue.  This method must be called after receiving and order (via webhook) or retrieving (via retrieve orders method).


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    acknowledgeOrders informs UltraCart that you (the fulfillment center) have received an order and have queued it for
    shipping.  This method is NOT used to notify an order has shipped, only that it is going to be shipped at some
    point in the future.

    This method should be called by a fulfillment center after receiving an order either by 1) getDistributionCenterOrders
    or 2) webhook.  Webhooks are the most efficient means for receiving orders, but if your fulfillment center lacks
    the ability to consume webhooks, polling by getDistributionCenterOrders is an alternate means.

    This method is important for notifying UltraCart that a fulfillment center has the action on an order.  Until this
    call is made, UltraCart will continue to notify a fulfillment center of an order either by 1) subsequent webhooks or
    2) continue to include an order in subsequent getDistributionCenterOrders.

    You will need the distribution center (DC) code.  UltraCart allows for multiple DC and the code is a
    unique short string you assign to a DC as an easy mnemonic.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

    If you do not know your DC code, query a list of all DC and print them out.
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

    A successful call will receive back a status code 204 (No Content).

    Possible Errors:
    More than 100 order ids provided -> "order_ids can not contain more than 100 records at a time"
 */


use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';

$distribution_center_code = 'RAMI';
$fulfillment_api = Samples::getFulfillmentApi();

$orders_ids = ['DEMO-12345', 'DEMO-12346', 'DEMO-12347', 'DEMO-12348', 'DEMO-12349'];

echo '<pre>';

try {
    // limit is 100 acknowledgements at a time.
    $fulfillment_api->acknowledgeOrders($distribution_center_code, $orders_ids);
    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->acknowledgeOrders: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **order_ids** | [**string[]**](../Model/string.md)| Orders to acknowledge receipt of (limit 100) |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePackingSlip()`

```php
generatePackingSlip($distribution_center_code, $order_id): \ultracart\v2\models\OrderPackingSlipResponse
```

Generate a packing slip for this order for the given distribution center.

The packing slip PDF that is returned is base 64 encoded


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    generatePackingSlip accepts a distribution center code and order_id and returns back a base64 encoded byte array pdf.
    Both the dc code and order_id are needed because an order may have multiple items shipping via different DCs.

    You will need the distribution center (DC) code.  UltraCart allows for multiple DC and the code is a
    unique short string you assign to a DC as an easy mnemonic.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

    If you do not know your DC code, query a list of all DC and print them out.
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

 */


use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';

$fulfillment_api = Samples::getFulfillmentApi();

$distribution_center_code = 'RAMI';
$orders_id = 'DEMO-12345';

echo '<pre>';

try {
    // limit is 500 inventory updates at a time.  batch them if you're going large.
    $api_response = $fulfillment_api->generatePackingSlip($distribution_center_code, $orders_id);
    $base64_pdf = $api_response->getPdfBase64();
    $decoded_pdf = base64_decode($base64_pdf);
    file_put_contents('packing_slip.pdf', $decoded_pdf);

    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->generatePackingSlip: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrderPackingSlipResponse**](../Model/OrderPackingSlipResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistributionCenterOrders()`

```php
getDistributionCenterOrders($distribution_center_code): \ultracart\v2\models\OrdersResponse
```

Retrieve orders queued up for this distribution center.

Retrieves up to 100 orders that are queued up in this distribution center.  You must acknowledge them before additional new orders will be returned.  There is NO record chunking.  You'll get the same 100 records again and again until you acknowledge orders.  The orders that are returned contain only items for this distribution center and are by default completely expanded with billing, channel_partner, checkout, coupons, customer_profile, edi, gift, gift_certificate, internal, items, payment, shipping, summary, taxes.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    getDistributionCenterOrders accepts a distribution center code and returns back up to 100 orders that need shipping.
    There is NO pagination with this method call.  Once you receive the orders, you should insert them into your
    system, and acknowledge them via the acknowledgeOrders call.  After you acknowledge the orders, subsequent calls
    to getDistributionCenterOrders will return another batch of 100 orders.

    The orders that are returned contain only items for THIS distribution center and are by default completely expanded
    with billing, channel_partner, checkout, coupons, customer_profile, edi, gift, gift_certificate, internal,
    items, payment, shipping, summary, taxes

    You will need the distribution center (DC) code.  UltraCart allows for multiple DC and the code is a
    unique short string you assign to a DC as an easy mnemonic.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

    If you do not know your DC code, query a list of all DC and print them out.
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

 */


use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';

$fulfillment_api = Samples::getFulfillmentApi();

echo '<pre>';

try {

    $acknowledged_orders = [];
    $distribution_center_code = 'RAMI';
    $result = $fulfillment_api->getDistributionCenterOrders($distribution_center_code);
    $orders = $result->getOrders();
    foreach ($orders as $order) {
        print_r($order);
        // TODO: do something useful with this order, like adding it to your shipping queue.
        $acknowledged_orders[] = $order->getOrderId();
    }

    // TODO: once you've securely and completely received it into your system, acknowledge the order.
    $fulfillment_api->acknowledgeOrders($distribution_center_code, $acknowledged_orders);

    // After acknowledging orders, you should call getDistributionCenterOrders again until you receive zero orders to ship.

    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->getDistributionCenterOrders: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistributionCenters()`

```php
getDistributionCenters(): \ultracart\v2\models\DistributionCentersResponse
```

Retrieve distribution centers

Retrieves the distribution centers that this user has access to.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    This method returns back a list of all distribution centers configured for a merchant.

    You will need the distribution center (DC) code for most operations.
    UltraCart allows for multiple DC and the code is a unique short string you assign to a DC as an easy mnemonic.
    This method call is an easy way to determine what a DC code is for a particular distribution center.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

 */


use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';

$fulfillment_api = Samples::getFulfillmentApi();

echo '<pre>';

try {
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->getDistributionCenters: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\DistributionCentersResponse**](../Model/DistributionCentersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipOrders()`

```php
shipOrders($distribution_center_code, $shipments)
```

Mark orders as shipped

Store the tracking information and mark the order shipped for this distribution center.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    shipOrders informs UltraCart that you (the fulfillment center) have shipped an order and allows you to provide
    UltraCart with tracking information.

    You will need the distribution center (DC) code.  UltraCart allows for multiple DC and the code is a
    unique short string you assign to a DC as an easy mnemonic.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

    If you do not know your DC code, query a list of all DC and print them out.
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

    A successful call will receive back a status code 204 (No Content).

    Possible Errors:
    More than 100 order ids provided -> "shipments can not contain more than 100 records at a time"
 */


use ultracart\v2\ApiException;
use ultracart\v2\models\FulfillmentShipment;

require_once '../vendor/autoload.php';

$distribution_center_code = 'RAMI';
$fulfillment_api = Samples::getFulfillmentApi();

$shipment = new FulfillmentShipment();
$shipment->setOrderId('DEMO-12345');
$shipment->setTrackingNumbers(['UPS-1234567890', 'USPS-BLAH-BLAH-BLAH']); // this order had two boxes.
$shipment->setShippingCost(16.99); // the actual cost to ship this order
$shipment->setFulfillmentFee(8.99); // this fulfillment center is kinda pricey.
$shipment->setPackageCost(11.99); // 11.99?  we use only the finest packaging.

$shipments = [$shipment]; // up to 100 shipments per call

echo '<pre>';

try {
    // limit is 100 shipments updates at a time.
    $fulfillment_api->shipOrders($distribution_center_code, $shipments);
    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->shipOrders: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **shipments** | [**\ultracart\v2\models\FulfillmentShipment[]**](../Model/FulfillmentShipment.md)| Orders to mark shipped |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInventory()`

```php
updateInventory($distribution_center_code, $inventories)
```

Update inventory

Update the inventory for items associated with this distribution center


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    updateInventory is a simple means of updating UltraCart inventory for one or more items (500 max per call)
    You will need the distribution center (DC) code.  UltraCart allows for multiple DC and the code is a
    unique short string you assign to a DC as an easy mnemonic.

    For more information about UltraCart distribution centers, please see:
    https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center

    If you do not know your DC code, query a list of all DC and print them out.
    $result = $fulfillment_api->getDistributionCenters();
    print_r($result);

    Possible Errors:
    More than 500 items provided -> "inventories can not contain more than 500 records at a time"
 */


use ultracart\v2\ApiException;
use ultracart\v2\models\FulfillmentInventory;

require_once '../vendor/autoload.php';

$distribution_center_code = 'RAMI';
$fulfillment_api = Samples::getFulfillmentApi();

$sku = '9780982021361';
$quantity = 9;
$first_inventory = new FulfillmentInventory();
$first_inventory->setItemId($sku);
$first_inventory->setQuantity($quantity);
$inventory_updates = [ $first_inventory ]; // for this example, we're only updating one item.

echo '<pre>';
print_r($inventory_updates);

try {
    // limit is 500 inventory updates at a time.  batch them if you're going large.
    $fulfillment_api->updateInventory($distribution_center_code, $inventory_updates);
    echo "done";
} catch (ApiException $e) {
    // update inventory failed.  examine the reason.
    echo 'Exception when calling FulfillmentApi->updateInventory: ', $e->getMessage(), PHP_EOL;
    exit;
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **inventories** | [**\ultracart\v2\models\FulfillmentInventory[]**](../Model/FulfillmentInventory.md)| Inventory updates (limit 500) |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
