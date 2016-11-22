# ultracart\admin\v2\FulfillmentApi

All URIs are relative to *https://secure.ultracart.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut**](FulfillmentApi.md#adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut) | **PUT** /admin/v2/fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
[**adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost**](FulfillmentApi.md#adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost) | **POST** /admin/v2/fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory
[**adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet**](FulfillmentApi.md#adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet) | **GET** /admin/v2/fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
[**adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost**](FulfillmentApi.md#adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost) | **POST** /admin/v2/fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
[**adminV2FulfillmentDistributionCentersGet**](FulfillmentApi.md#adminV2FulfillmentDistributionCentersGet) | **GET** /admin/v2/fulfillment/distribution_centers | Retrieve distribution centers


# **adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut**
> adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut($distribution_center_code, $order_ids)

Acknowledge receipt of orders.

Acknowledge receipt of orders so that they are removed from the fulfillment queue.  This method must be called after receiving and order (via webhook) or retrieving (via retrieve orders method).

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

$api_instance = new ultracart\admin\v2\Api\FulfillmentApi();
$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$order_ids = array(new string[]()); // string[] | Orders to acknowledge receipt of (limit 100)

try {
    $api_instance->adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut($distribution_center_code, $order_ids);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->adminV2FulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut: ', $e->getMessage(), PHP_EOL;
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

# **adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost**
> adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost($distribution_center_code, $inventories)

Update inventory

Update the inventory for items associated with this distribution center

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

$api_instance = new ultracart\admin\v2\Api\FulfillmentApi();
$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$inventories = array(new FulfillmentInventory()); // \ultracart\admin\v2\models\FulfillmentInventory[] | Inventory updates (limit 500)

try {
    $api_instance->adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost($distribution_center_code, $inventories);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->adminV2FulfillmentDistributionCentersDistributionCenterCodeInventoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **inventories** | [**\ultracart\admin\v2\models\FulfillmentInventory[]**](../Model/FulfillmentInventory.md)| Inventory updates (limit 500) |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet**
> \ultracart\admin\v2\models\OrdersResponse adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet($distribution_center_code)

Retrieve orders queued up for this distribution center.

Retrieves up to 100 orders that are queued up in this distribution center.  You must acknowledge them before additional new orders will be returned.  The orders that are returned contain only items for this distribution center and are expanded with billing, buysafe, channel_partner, checkout, coupons, customer_profile, edi, gift, gift_certificate, internal, items, payment, shipping, summary, taxes.

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

$api_instance = new ultracart\admin\v2\Api\FulfillmentApi();
$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code

try {
    $result = $api_instance->adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet($distribution_center_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->adminV2FulfillmentDistributionCentersDistributionCenterCodeOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |

### Return type

[**\ultracart\admin\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost**
> adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost($distribution_center_code, $shipments)

Mark orders as shipped

Store the tracking information and mark the order shipped for this distribution center.

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

$api_instance = new ultracart\admin\v2\Api\FulfillmentApi();
$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$shipments = array(new FulfillmentShipment()); // \ultracart\admin\v2\models\FulfillmentShipment[] | Orders to mark shipped

try {
    $api_instance->adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost($distribution_center_code, $shipments);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->adminV2FulfillmentDistributionCentersDistributionCenterCodeShipmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **shipments** | [**\ultracart\admin\v2\models\FulfillmentShipment[]**](../Model/FulfillmentShipment.md)| Orders to mark shipped |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2FulfillmentDistributionCentersGet**
> \ultracart\admin\v2\models\DistributionCentersResponse adminV2FulfillmentDistributionCentersGet()

Retrieve distribution centers

Retrieves the distribution centers that this user has access to.

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

$api_instance = new ultracart\admin\v2\Api\FulfillmentApi();

try {
    $result = $api_instance->adminV2FulfillmentDistributionCentersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->adminV2FulfillmentDistributionCentersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\admin\v2\models\DistributionCentersResponse**](../Model/DistributionCentersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

