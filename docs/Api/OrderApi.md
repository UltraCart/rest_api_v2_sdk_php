# ultracart\v2\OrderApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderOrdersGet**](OrderApi.md#orderOrdersGet) | **GET** /order/orders | Retrieve orders
[**orderOrdersOrderIdCancelPost**](OrderApi.md#orderOrdersOrderIdCancelPost) | **POST** /order/orders/{order_id}/cancel | Cancel an order
[**orderOrdersOrderIdDelete**](OrderApi.md#orderOrdersOrderIdDelete) | **DELETE** /order/orders/{order_id} | Delete an order
[**orderOrdersOrderIdGet**](OrderApi.md#orderOrdersOrderIdGet) | **GET** /order/orders/{order_id} | Retrieve an order
[**orderOrdersOrderIdPut**](OrderApi.md#orderOrdersOrderIdPut) | **PUT** /order/orders/{order_id} | Update an order
[**orderOrdersOrderIdResendReceiptPost**](OrderApi.md#orderOrdersOrderIdResendReceiptPost) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
[**orderOrdersOrderIdResendShipmentConfirmationPost**](OrderApi.md#orderOrdersOrderIdResendShipmentConfirmationPost) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation


# **orderOrdersGet**
> \ultracart\v2\models\OrdersResponse orderOrdersGet($order_id, $payment_method, $company, $first_name, $last_name, $city, $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code, $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end, $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage, $channel_partner_code, $channel_partner_order_id, $_limit, $_offset, $_sort, $_expand)

Retrieve orders

Retrieves a group of orders from the account.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the orders returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | Order Id
$payment_method = "payment_method_example"; // string | Payment Method
$company = "company_example"; // string | Company
$first_name = "first_name_example"; // string | First Name
$last_name = "last_name_example"; // string | Last Name
$city = "city_example"; // string | City
$state_region = "state_region_example"; // string | State/Region
$postal_code = "postal_code_example"; // string | Postal Code
$country_code = "country_code_example"; // string | Country Code (ISO-3166 two letter)
$phone = "phone_example"; // string | Phone
$email = "email_example"; // string | Email
$cc_email = "cc_email_example"; // string | CC Email
$total = 3.4; // float | Total
$screen_branding_theme_code = "screen_branding_theme_code_example"; // string | Screen Branding Theme Code
$storefront_host_name = "storefront_host_name_example"; // string | StoreFront Host Name
$creation_date_begin = "creation_date_begin_example"; // string | Creation Date Begin
$creation_date_end = "creation_date_end_example"; // string | Creation Date End
$payment_date_begin = "payment_date_begin_example"; // string | Payment Date Begin
$payment_date_end = "payment_date_end_example"; // string | Payment Date End
$shipment_date_begin = "shipment_date_begin_example"; // string | Shipment Date Begin
$shipment_date_end = "shipment_date_end_example"; // string | Shipment Date End
$rma = "rma_example"; // string | RMA
$purchase_order_number = "purchase_order_number_example"; // string | Purchase Order Number
$item_id = "item_id_example"; // string | Item Id
$current_stage = "current_stage_example"; // string | Current Stage
$channel_partner_code = "channel_partner_code_example"; // string | Channel Partner Code
$channel_partner_order_id = "channel_partner_order_id_example"; // string | Channel Partner Order ID
$_limit = 100; // int | The maximum number of records to return on this one API call. (Maximum 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $api_instance->orderOrdersGet($order_id, $payment_method, $company, $first_name, $last_name, $city, $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code, $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end, $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage, $channel_partner_code, $channel_partner_order_id, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order Id | [optional]
 **payment_method** | **string**| Payment Method | [optional]
 **company** | **string**| Company | [optional]
 **first_name** | **string**| First Name | [optional]
 **last_name** | **string**| Last Name | [optional]
 **city** | **string**| City | [optional]
 **state_region** | **string**| State/Region | [optional]
 **postal_code** | **string**| Postal Code | [optional]
 **country_code** | **string**| Country Code (ISO-3166 two letter) | [optional]
 **phone** | **string**| Phone | [optional]
 **email** | **string**| Email | [optional]
 **cc_email** | **string**| CC Email | [optional]
 **total** | **float**| Total | [optional]
 **screen_branding_theme_code** | **string**| Screen Branding Theme Code | [optional]
 **storefront_host_name** | **string**| StoreFront Host Name | [optional]
 **creation_date_begin** | **string**| Creation Date Begin | [optional]
 **creation_date_end** | **string**| Creation Date End | [optional]
 **payment_date_begin** | **string**| Payment Date Begin | [optional]
 **payment_date_end** | **string**| Payment Date End | [optional]
 **shipment_date_begin** | **string**| Shipment Date Begin | [optional]
 **shipment_date_end** | **string**| Shipment Date End | [optional]
 **rma** | **string**| RMA | [optional]
 **purchase_order_number** | **string**| Purchase Order Number | [optional]
 **item_id** | **string**| Item Id | [optional]
 **current_stage** | **string**| Current Stage | [optional]
 **channel_partner_code** | **string**| Channel Partner Code | [optional]
 **channel_partner_order_id** | **string**| Channel Partner Order ID | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdCancelPost**
> \ultracart\v2\models\BaseResponse orderOrdersOrderIdCancelPost($order_id)

Cancel an order

Cancel an order on the UltraCart account.  If the success flag is false, then consult the error message for why it failed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | The order id to cancel.

try {
    $result = $api_instance->orderOrdersOrderIdCancelPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to cancel. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdDelete**
> orderOrdersOrderIdDelete($order_id)

Delete an order

Delete an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | The order id to delete.

try {
    $api_instance->orderOrdersOrderIdDelete($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdGet**
> \ultracart\v2\models\OrderResponse orderOrdersOrderIdGet($order_id, $_expand)

Retrieve an order

Retrieves a single order using the specified order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | The order id to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->orderOrdersOrderIdGet($order_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdPut**
> \ultracart\v2\models\OrderResponse orderOrdersOrderIdPut($order, $order_id)

Update an order

Update a new order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order = new \ultracart\v2\models\Order(); // \ultracart\v2\models\Order | Order to update
$order_id = "order_id_example"; // string | The order id to update.

try {
    $result = $api_instance->orderOrdersOrderIdPut($order, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\ultracart\v2\models\Order**](../Model/\ultracart\v2\models\Order.md)| Order to update |
 **order_id** | **string**| The order id to update. |

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdResendReceiptPost**
> \ultracart\v2\models\BaseResponse orderOrdersOrderIdResendReceiptPost($order_id)

Resend receipt

Resend the receipt for an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | The order id to resend the receipt for.

try {
    $result = $api_instance->orderOrdersOrderIdResendReceiptPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdResendReceiptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to resend the receipt for. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrdersOrderIdResendShipmentConfirmationPost**
> \ultracart\v2\models\BaseResponse orderOrdersOrderIdResendShipmentConfirmationPost($order_id)

Resend shipment confirmation

Resend shipment confirmation for an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OrderApi();
$order_id = "order_id_example"; // string | The order id to resend the shipment notification for.

try {
    $result = $api_instance->orderOrdersOrderIdResendShipmentConfirmationPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrdersOrderIdResendShipmentConfirmationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to resend the shipment notification for. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

