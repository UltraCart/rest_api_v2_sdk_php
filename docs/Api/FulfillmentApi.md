# ultracart\v2\FulfillmentApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acknowledgeOrders**](FulfillmentApi.md#acknowledgeOrders) | **PUT** /fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
[**generatePackingSlip**](FulfillmentApi.md#generatePackingSlip) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders/{order_id} | Generate a packing slip for this order for the given distribution center.
[**getDistributionCenterOrders**](FulfillmentApi.md#getDistributionCenterOrders) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
[**getDistributionCenters**](FulfillmentApi.md#getDistributionCenters) | **GET** /fulfillment/distribution_centers | Retrieve distribution centers
[**shipOrders**](FulfillmentApi.md#shipOrders) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
[**updateInventory**](FulfillmentApi.md#updateInventory) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory


# **acknowledgeOrders**
> acknowledgeOrders($distribution_center_code, $order_ids)

Acknowledge receipt of orders.

Acknowledge receipt of orders so that they are removed from the fulfillment queue.  This method must be called after receiving and order (via webhook) or retrieving (via retrieve orders method).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$order_ids = array(new \ultracart\v2\models\string[]()); // string[] | Orders to acknowledge receipt of (limit 100)

try {
    $apiInstance->acknowledgeOrders($distribution_center_code, $order_ids);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->acknowledgeOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **order_ids** | **string[]**| Orders to acknowledge receipt of (limit 100) |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePackingSlip**
> \ultracart\v2\models\OrdersResponse generatePackingSlip($distribution_center_code, $order_id)

Generate a packing slip for this order for the given distribution center.

The packing slip PDF that is returned is base 64 encoded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$order_id = "order_id_example"; // string | Order ID

try {
    $result = $apiInstance->generatePackingSlip($distribution_center_code, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->generatePackingSlip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistributionCenterOrders**
> \ultracart\v2\models\OrdersResponse getDistributionCenterOrders($distribution_center_code)

Retrieve orders queued up for this distribution center.

Retrieves up to 100 orders that are queued up in this distribution center.  You must acknowledge them before additional new orders will be returned.  There is NO record chunking.  You'll get the same 100 records again and again until you acknowledge orders.  The orders that are returned contain only items for this distribution center and are by default completely expanded with billing, buysafe, channel_partner, checkout, coupons, customer_profile, edi, gift, gift_certificate, internal, items, payment, shipping, summary, taxes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code

try {
    $result = $apiInstance->getDistributionCenterOrders($distribution_center_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->getDistributionCenterOrders: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistributionCenters**
> \ultracart\v2\models\DistributionCentersResponse getDistributionCenters()

Retrieve distribution centers

Retrieves the distribution centers that this user has access to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getDistributionCenters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->getDistributionCenters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\DistributionCentersResponse**](../Model/DistributionCentersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrders**
> shipOrders($distribution_center_code, $shipments)

Mark orders as shipped

Store the tracking information and mark the order shipped for this distribution center.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$shipments = array(new \ultracart\v2\models\FulfillmentShipment()); // \ultracart\v2\models\FulfillmentShipment[] | Orders to mark shipped

try {
    $apiInstance->shipOrders($distribution_center_code, $shipments);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->shipOrders: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventory**
> updateInventory($distribution_center_code, $inventories)

Update inventory

Update the inventory for items associated with this distribution center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\FulfillmentApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$inventories = array(new \ultracart\v2\models\FulfillmentInventory()); // \ultracart\v2\models\FulfillmentInventory[] | Inventory updates (limit 500)

try {
    $apiInstance->updateInventory($distribution_center_code, $inventories);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->updateInventory: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

