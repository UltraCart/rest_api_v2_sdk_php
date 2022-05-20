# ultracart\v2\OrderApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustOrderTotal**](OrderApi.md#adjustOrderTotal) | **POST** /order/orders/{order_id}/adjust_order_total/{desired_total} | Adjusts an order total
[**cancelOrder**](OrderApi.md#cancelOrder) | **POST** /order/orders/{order_id}/cancel | Cancel an order
[**deleteOrder**](OrderApi.md#deleteOrder) | **DELETE** /order/orders/{order_id} | Delete an order
[**duplicateOrder**](OrderApi.md#duplicateOrder) | **POST** /order/orders/{order_id}/duplicate | Duplicate an order
[**format**](OrderApi.md#format) | **POST** /order/orders/{order_id}/format | Format order
[**generateOrderToken**](OrderApi.md#generateOrderToken) | **GET** /order/orders/token/{order_id} | Generate an order token for a given order id
[**generatePackingSlipAllDC**](OrderApi.md#generatePackingSlipAllDC) | **GET** /order/orders/{order_id}/packing_slip | Generate a packing slip for this order across all distribution centers.
[**generatePackingSlipSpecificDC**](OrderApi.md#generatePackingSlipSpecificDC) | **GET** /order/orders/{order_id}/packing_slip/{distribution_center_code} | Generate a packing slip for this order for the given distribution center.
[**getAccountsReceivableRetryConfig**](OrderApi.md#getAccountsReceivableRetryConfig) | **GET** /order/accountsReceivableRetryConfig | Retrieve A/R Retry Configuration
[**getAccountsReceivableRetryStats**](OrderApi.md#getAccountsReceivableRetryStats) | **GET** /order/accountsReceivableRetryConfig/stats | Retrieve A/R Retry Statistics
[**getOrder**](OrderApi.md#getOrder) | **GET** /order/orders/{order_id} | Retrieve an order
[**getOrderByToken**](OrderApi.md#getOrderByToken) | **POST** /order/orders/token | Retrieve an order using a token
[**getOrders**](OrderApi.md#getOrders) | **GET** /order/orders | Retrieve orders
[**getOrdersBatch**](OrderApi.md#getOrdersBatch) | **POST** /order/orders/batch | Retrieve order batch
[**getOrdersByQuery**](OrderApi.md#getOrdersByQuery) | **POST** /order/orders/query | Retrieve orders by query
[**insertOrder**](OrderApi.md#insertOrder) | **POST** /order/orders | Insert an order
[**processPayment**](OrderApi.md#processPayment) | **POST** /order/orders/{order_id}/process_payment | Process payment
[**refundOrder**](OrderApi.md#refundOrder) | **PUT** /order/orders/{order_id}/refund | Refund an order
[**replacement**](OrderApi.md#replacement) | **POST** /order/orders/{order_id}/replacement | Replacement order
[**resendReceipt**](OrderApi.md#resendReceipt) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
[**resendShipmentConfirmation**](OrderApi.md#resendShipmentConfirmation) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation
[**updateAccountsReceivableRetryConfig**](OrderApi.md#updateAccountsReceivableRetryConfig) | **POST** /order/accountsReceivableRetryConfig | Update A/R Retry Configuration
[**updateOrder**](OrderApi.md#updateOrder) | **PUT** /order/orders/{order_id} | Update an order


# **adjustOrderTotal**
> \ultracart\v2\models\BaseResponse adjustOrderTotal($order_id, $desired_total)

Adjusts an order total

Adjusts an order total.  Adjusts individual items appropriately and considers taxes.  Desired total should be provided in the same currency as the order and must be less than the current total and greater than zero.  This call will change the order total.  It returns true if the desired total is achieved.  If the goal seeking algorithm falls short (usually by pennies), this method returns back false.  View the merchant notes for the order for further details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to cancel.
$desired_total = "desired_total_example"; // string | The desired total with no formatting. example 123.45

try {
    $result = $apiInstance->adjustOrderTotal($order_id, $desired_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->adjustOrderTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to cancel. |
 **desired_total** | **string**| The desired total with no formatting. example 123.45 |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrder**
> \ultracart\v2\models\BaseResponse cancelOrder($order_id)

Cancel an order

Cancel an order on the UltraCart account.  If the success flag is false, then consult the error message for why it failed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to cancel.

try {
    $result = $apiInstance->cancelOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
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

# **deleteOrder**
> deleteOrder($order_id)

Delete an order

Delete an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to delete.

try {
    $apiInstance->deleteOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
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

# **duplicateOrder**
> \ultracart\v2\models\OrderResponse duplicateOrder($order_id, $_expand)

Duplicate an order

Perform a duplicate of the specified order_id and return a new order located in Accounts Receivable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to duplicate.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->duplicateOrder($order_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->duplicateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to duplicate. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **format**
> \ultracart\v2\models\OrderFormatResponse format($order_id, $format_options)

Format order

Format the order for display at text or html

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to format
$format_options = new \ultracart\v2\models\OrderFormat(); // \ultracart\v2\models\OrderFormat | Format options

try {
    $result = $apiInstance->format($order_id, $format_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->format: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to format |
 **format_options** | [**\ultracart\v2\models\OrderFormat**](../Model/OrderFormat.md)| Format options |

### Return type

[**\ultracart\v2\models\OrderFormatResponse**](../Model/OrderFormatResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateOrderToken**
> \ultracart\v2\models\OrderTokenResponse generateOrderToken($order_id)

Generate an order token for a given order id

Retrieves a single order token for a given order id.  The token can be used with the getOrderByToken API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to generate a token for.

try {
    $result = $apiInstance->generateOrderToken($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->generateOrderToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to generate a token for. |

### Return type

[**\ultracart\v2\models\OrderTokenResponse**](../Model/OrderTokenResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePackingSlipAllDC**
> \ultracart\v2\models\OrderPackingSlipResponse generatePackingSlipAllDC($order_id)

Generate a packing slip for this order across all distribution centers.

The packing slip PDF that is returned is base 64 encoded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | Order ID

try {
    $result = $apiInstance->generatePackingSlipAllDC($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->generatePackingSlipAllDC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrderPackingSlipResponse**](../Model/OrderPackingSlipResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePackingSlipSpecificDC**
> \ultracart\v2\models\OrderPackingSlipResponse generatePackingSlipSpecificDC($distribution_center_code, $order_id)

Generate a packing slip for this order for the given distribution center.

The packing slip PDF that is returned is base 64 encoded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$distribution_center_code = "distribution_center_code_example"; // string | Distribution center code
$order_id = "order_id_example"; // string | Order ID

try {
    $result = $apiInstance->generatePackingSlipSpecificDC($distribution_center_code, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->generatePackingSlipSpecificDC: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountsReceivableRetryConfig**
> \ultracart\v2\models\AccountsReceivableRetryConfigResponse getAccountsReceivableRetryConfig()

Retrieve A/R Retry Configuration

Retrieve A/R Retry Configuration. This is primarily an internal API call.  It is doubtful you would ever need to use it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getAccountsReceivableRetryConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getAccountsReceivableRetryConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\AccountsReceivableRetryConfigResponse**](../Model/AccountsReceivableRetryConfigResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountsReceivableRetryStats**
> \ultracart\v2\models\AccountsReceivableRetryStatsResponse getAccountsReceivableRetryStats($from, $to)

Retrieve A/R Retry Statistics

Retrieve A/R Retry Statistics. This is primarily an internal API call.  It is doubtful you would ever need to use it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$from = "from_example"; // string | 
$to = "to_example"; // string | 

try {
    $result = $apiInstance->getAccountsReceivableRetryStats($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getAccountsReceivableRetryStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\AccountsReceivableRetryStatsResponse**](../Model/AccountsReceivableRetryStatsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \ultracart\v2\models\OrderResponse getOrder($order_id, $_expand)

Retrieve an order

Retrieves a single order using the specified order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getOrder($order_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
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

# **getOrderByToken**
> \ultracart\v2\models\OrderResponse getOrderByToken($order_by_token_query, $_expand)

Retrieve an order using a token

Retrieves a single order using the specified order token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_by_token_query = new \ultracart\v2\models\OrderByTokenQuery(); // \ultracart\v2\models\OrderByTokenQuery | Order by token query
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getOrderByToken($order_by_token_query, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by_token_query** | [**\ultracart\v2\models\OrderByTokenQuery**](../Model/OrderByTokenQuery.md)| Order by token query |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \ultracart\v2\models\OrdersResponse getOrders($order_id, $payment_method, $company, $first_name, $last_name, $city, $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code, $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end, $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage, $channel_partner_code, $channel_partner_order_id, $customer_profile_oid, $refund_date_begin, $refund_date_end, $custom_field_1, $custom_field_2, $custom_field_3, $custom_field_4, $custom_field_5, $custom_field_6, $custom_field_7, $ship_on_date_begin, $ship_on_date_end, $_limit, $_offset, $_sort, $_expand)

Retrieve orders

Retrieves a group of orders from the account.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the orders returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

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
$total = 8.14; // float | Total
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
$customer_profile_oid = 56; // int | 
$refund_date_begin = "refund_date_begin_example"; // string | 
$refund_date_end = "refund_date_end_example"; // string | 
$custom_field_1 = "custom_field_1_example"; // string | 
$custom_field_2 = "custom_field_2_example"; // string | 
$custom_field_3 = "custom_field_3_example"; // string | 
$custom_field_4 = "custom_field_4_example"; // string | 
$custom_field_5 = "custom_field_5_example"; // string | 
$custom_field_6 = "custom_field_6_example"; // string | 
$custom_field_7 = "custom_field_7_example"; // string | 
$ship_on_date_begin = "ship_on_date_begin_example"; // string | 
$ship_on_date_end = "ship_on_date_end_example"; // string | 
$_limit = 100; // int | The maximum number of records to return on this one API call. (Maximum 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $apiInstance->getOrders($order_id, $payment_method, $company, $first_name, $last_name, $city, $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code, $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end, $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage, $channel_partner_code, $channel_partner_order_id, $customer_profile_oid, $refund_date_begin, $refund_date_end, $custom_field_1, $custom_field_2, $custom_field_3, $custom_field_4, $custom_field_5, $custom_field_6, $custom_field_7, $ship_on_date_begin, $ship_on_date_end, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
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
 **customer_profile_oid** | **int**|  | [optional]
 **refund_date_begin** | **string**|  | [optional]
 **refund_date_end** | **string**|  | [optional]
 **custom_field_1** | **string**|  | [optional]
 **custom_field_2** | **string**|  | [optional]
 **custom_field_3** | **string**|  | [optional]
 **custom_field_4** | **string**|  | [optional]
 **custom_field_5** | **string**|  | [optional]
 **custom_field_6** | **string**|  | [optional]
 **custom_field_7** | **string**|  | [optional]
 **ship_on_date_begin** | **string**|  | [optional]
 **ship_on_date_end** | **string**|  | [optional]
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

# **getOrdersBatch**
> \ultracart\v2\models\OrdersResponse getOrdersBatch($order_batch, $_expand)

Retrieve order batch

Retrieves a group of orders from the account based on an array of order ids.  If more than 500 order ids are specified, the API call will fail with a bad request error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_batch = new \ultracart\v2\models\OrderQueryBatch(); // \ultracart\v2\models\OrderQueryBatch | Order batch
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $apiInstance->getOrdersBatch($order_batch, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrdersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_batch** | [**\ultracart\v2\models\OrderQueryBatch**](../Model/OrderQueryBatch.md)| Order batch |
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersByQuery**
> \ultracart\v2\models\OrdersResponse getOrdersByQuery($order_query, $_limit, $_offset, $_sort, $_expand)

Retrieve orders by query

Retrieves a group of orders from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the orders returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_query = new \ultracart\v2\models\OrderQuery(); // \ultracart\v2\models\OrderQuery | Order query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Maximum 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $apiInstance->getOrdersByQuery($order_query, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrdersByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_query** | [**\ultracart\v2\models\OrderQuery**](../Model/OrderQuery.md)| Order query |
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

# **insertOrder**
> \ultracart\v2\models\OrderResponse insertOrder($order, $_expand)

Insert an order

Inserts a new order on the UltraCart account.  This is probably NOT the method you want.  This is for channel orders.  For regular orders the customer is entering, use the CheckoutApi.  It has many, many more features, checks, and validations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order = new \ultracart\v2\models\Order(); // \ultracart\v2\models\Order | Order to insert
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->insertOrder($order, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->insertOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processPayment**
> \ultracart\v2\models\OrderProcessPaymentResponse processPayment($order_id, $process_payment_request)

Process payment

Process payment on order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to process payment on
$process_payment_request = new \ultracart\v2\models\OrderProcessPaymentRequest(); // \ultracart\v2\models\OrderProcessPaymentRequest | Process payment parameters

try {
    $result = $apiInstance->processPayment($order_id, $process_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->processPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to process payment on |
 **process_payment_request** | [**\ultracart\v2\models\OrderProcessPaymentRequest**](../Model/OrderProcessPaymentRequest.md)| Process payment parameters |

### Return type

[**\ultracart\v2\models\OrderProcessPaymentResponse**](../Model/OrderProcessPaymentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundOrder**
> \ultracart\v2\models\OrderResponse refundOrder($order, $order_id, $reject_after_refund, $skip_customer_notification, $auto_order_cancel, $manual_refund, $reverse_affiliate_transactions, $_expand)

Refund an order

Perform a refund operation on an order and then update the order if successful

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order = new \ultracart\v2\models\Order(); // \ultracart\v2\models\Order | Order to refund
$order_id = "order_id_example"; // string | The order id to refund.
$reject_after_refund = false; // bool | Reject order after refund
$skip_customer_notification = false; // bool | Skip customer email notification
$auto_order_cancel = false; // bool | Cancel associated auto orders
$manual_refund = false; // bool | Consider a manual refund done externally
$reverse_affiliate_transactions = true; // bool | Reverse affiliate transactions
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->refundOrder($order, $order_id, $reject_after_refund, $skip_customer_notification, $auto_order_cancel, $manual_refund, $reverse_affiliate_transactions, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to refund |
 **order_id** | **string**| The order id to refund. |
 **reject_after_refund** | **bool**| Reject order after refund | [optional] [default to false]
 **skip_customer_notification** | **bool**| Skip customer email notification | [optional] [default to false]
 **auto_order_cancel** | **bool**| Cancel associated auto orders | [optional] [default to false]
 **manual_refund** | **bool**| Consider a manual refund done externally | [optional] [default to false]
 **reverse_affiliate_transactions** | **bool**| Reverse affiliate transactions | [optional] [default to true]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replacement**
> \ultracart\v2\models\OrderReplacementResponse replacement($order_id, $replacement)

Replacement order

Create a replacement order based upon a previous order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to generate a replacement for.
$replacement = new \ultracart\v2\models\OrderReplacement(); // \ultracart\v2\models\OrderReplacement | Replacement order details

try {
    $result = $apiInstance->replacement($order_id, $replacement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->replacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to generate a replacement for. |
 **replacement** | [**\ultracart\v2\models\OrderReplacement**](../Model/OrderReplacement.md)| Replacement order details |

### Return type

[**\ultracart\v2\models\OrderReplacementResponse**](../Model/OrderReplacementResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendReceipt**
> \ultracart\v2\models\BaseResponse resendReceipt($order_id)

Resend receipt

Resend the receipt for an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to resend the receipt for.

try {
    $result = $apiInstance->resendReceipt($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->resendReceipt: ', $e->getMessage(), PHP_EOL;
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

# **resendShipmentConfirmation**
> \ultracart\v2\models\BaseResponse resendShipmentConfirmation($order_id)

Resend shipment confirmation

Resend shipment confirmation for an order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The order id to resend the shipment notification for.

try {
    $result = $apiInstance->resendShipmentConfirmation($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->resendShipmentConfirmation: ', $e->getMessage(), PHP_EOL;
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

# **updateAccountsReceivableRetryConfig**
> \ultracart\v2\models\BaseResponse updateAccountsReceivableRetryConfig($retry_config)

Update A/R Retry Configuration

Update A/R Retry Configuration.  This is primarily an internal API call.  It is doubtful you would ever need to use it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$retry_config = new \ultracart\v2\models\AccountsReceivableRetryConfig(); // \ultracart\v2\models\AccountsReceivableRetryConfig | AccountsReceivableRetryConfig object

try {
    $result = $apiInstance->updateAccountsReceivableRetryConfig($retry_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateAccountsReceivableRetryConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retry_config** | [**\ultracart\v2\models\AccountsReceivableRetryConfig**](../Model/AccountsReceivableRetryConfig.md)| AccountsReceivableRetryConfig object |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> \ultracart\v2\models\OrderResponse updateOrder($order, $order_id, $_expand)

Update an order

Update a new order on the UltraCart account.  This is probably NOT the method you want.  It is rare to update a completed order.  This will not trigger charges, emails, or any other automation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OrderApi::usingApiKey($simple_key);

$order = new \ultracart\v2\models\Order(); // \ultracart\v2\models\Order | Order to update
$order_id = "order_id_example"; // string | The order id to update.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->updateOrder($order, $order_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to update |
 **order_id** | **string**| The order id to update. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

