# ultracartv2\AutoOrderApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAutoOrder**](AutoOrderApi.md#getAutoOrder) | **GET** /auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order
[**getAutoOrderByCode**](AutoOrderApi.md#getAutoOrderByCode) | **GET** /auto_order/auto_orders/code/{auto_order_code} | Retrieve an auto order
[**getAutoOrderByReferenceOrderId**](AutoOrderApi.md#getAutoOrderByReferenceOrderId) | **GET** /auto_order/auto_orders/reference_order_id/{reference_order_id} | Retrieve an auto order
[**getAutoOrders**](AutoOrderApi.md#getAutoOrders) | **GET** /auto_order/auto_orders | Retrieve auto orders
[**getAutoOrdersBatch**](AutoOrderApi.md#getAutoOrdersBatch) | **POST** /auto_order/auto_orders/batch | Retrieve auto order batch
[**getAutoOrdersByQuery**](AutoOrderApi.md#getAutoOrdersByQuery) | **POST** /auto_order/auto_orders/query | Retrieve auto orders
[**updateAutoOrder**](AutoOrderApi.md#updateAutoOrder) | **PUT** /auto_order/auto_orders/{auto_order_oid} | Update an auto order
[**updateAutoOrdersBatch**](AutoOrderApi.md#updateAutoOrdersBatch) | **PUT** /auto_order/auto_orders/batch | Update multiple auto orders


# **getAutoOrder**
> \ultracartv2\models\AutoOrderResponse getAutoOrder($auto_order_oid, $_expand)

Retrieve an auto order

Retrieves a single auto order using the specified auto order oid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order_oid = 56; // int | The auto order oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getAutoOrder($auto_order_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracartv2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoOrderByCode**
> \ultracartv2\models\AutoOrderResponse getAutoOrderByCode($auto_order_code, $_expand)

Retrieve an auto order

Retrieves a single auto order using the specified reference (original) order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order_code = "auto_order_code_example"; // string | The auto order oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getAutoOrderByCode($auto_order_code, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrderByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_code** | **string**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracartv2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoOrderByReferenceOrderId**
> \ultracartv2\models\AutoOrderResponse getAutoOrderByReferenceOrderId($reference_order_id, $_expand)

Retrieve an auto order

Retrieves a single auto order using the specified reference (original) order id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$reference_order_id = "reference_order_id_example"; // string | The auto order oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getAutoOrderByReferenceOrderId($reference_order_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrderByReferenceOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_order_id** | **string**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracartv2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoOrders**
> \ultracartv2\models\AutoOrdersResponse getAutoOrders($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand)

Retrieve auto orders

Retrieves auto orders from the account.  If no parameters are specified, all auto orders will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order_code = "auto_order_code_example"; // string | Auto order code
$original_order_id = "original_order_id_example"; // string | Original order id
$first_name = "first_name_example"; // string | First name
$last_name = "last_name_example"; // string | Last name
$company = "company_example"; // string | Company
$city = "city_example"; // string | City
$state = "state_example"; // string | State
$postal_code = "postal_code_example"; // string | Postal code
$country_code = "country_code_example"; // string | Country code (ISO-3166 two letter)
$phone = "phone_example"; // string | Phone
$email = "email_example"; // string | Email
$original_order_date_begin = "original_order_date_begin_example"; // string | Original order date begin
$original_order_date_end = "original_order_date_end_example"; // string | Original order date end
$next_shipment_date_begin = "next_shipment_date_begin_example"; // string | Next shipment date begin
$next_shipment_date_end = "next_shipment_date_end_example"; // string | Next shipment date end
$card_type = "card_type_example"; // string | Card type
$item_id = "item_id_example"; // string | Item ID
$status = "status_example"; // string | Status
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch auto orders that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getAutoOrders($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_code** | **string**| Auto order code | [optional]
 **original_order_id** | **string**| Original order id | [optional]
 **first_name** | **string**| First name | [optional]
 **last_name** | **string**| Last name | [optional]
 **company** | **string**| Company | [optional]
 **city** | **string**| City | [optional]
 **state** | **string**| State | [optional]
 **postal_code** | **string**| Postal code | [optional]
 **country_code** | **string**| Country code (ISO-3166 two letter) | [optional]
 **phone** | **string**| Phone | [optional]
 **email** | **string**| Email | [optional]
 **original_order_date_begin** | **string**| Original order date begin | [optional]
 **original_order_date_end** | **string**| Original order date end | [optional]
 **next_shipment_date_begin** | **string**| Next shipment date begin | [optional]
 **next_shipment_date_end** | **string**| Next shipment date end | [optional]
 **card_type** | **string**| Card type | [optional]
 **item_id** | **string**| Item ID | [optional]
 **status** | **string**| Status | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch auto orders that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracartv2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoOrdersBatch**
> \ultracartv2\models\AutoOrdersResponse getAutoOrdersBatch($auto_order_batch, $_expand)

Retrieve auto order batch

Retrieves a group of auto orders from the account based on an array of auto order oids.  If more than 200 auto order ids are specified, the API call will fail with a bad request error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order_batch = new \ultracartv2\models\AutoOrderQueryBatch(); // \ultracartv2\models\AutoOrderQueryBatch | Auto order batch
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $apiInstance->getAutoOrdersBatch($auto_order_batch, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrdersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_batch** | [**\ultracartv2\models\AutoOrderQueryBatch**](../Model/AutoOrderQueryBatch.md)| Auto order batch |
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracartv2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoOrdersByQuery**
> \ultracartv2\models\AutoOrdersResponse getAutoOrdersByQuery($auto_order_query, $_limit, $_offset, $_sort, $_expand)

Retrieve auto orders

Retrieves a group of auto orders from the account based on a query object.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order_query = new \ultracartv2\models\AutoOrderQuery(); // \ultracartv2\models\AutoOrderQuery | Auto order query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Maximum 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.

try {
    $result = $apiInstance->getAutoOrdersByQuery($auto_order_query, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->getAutoOrdersByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_query** | [**\ultracartv2\models\AutoOrderQuery**](../Model/AutoOrderQuery.md)| Auto order query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracartv2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAutoOrder**
> \ultracartv2\models\AutoOrderResponse updateAutoOrder($auto_order, $auto_order_oid, $_expand)

Update an auto order

Update an auto order on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_order = new \ultracartv2\models\AutoOrder(); // \ultracartv2\models\AutoOrder | Auto order to update
$auto_order_oid = 56; // int | The auto order oid to update.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->updateAutoOrder($auto_order, $auto_order_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->updateAutoOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order** | [**\ultracartv2\models\AutoOrder**](../Model/AutoOrder.md)| Auto order to update |
 **auto_order_oid** | **int**| The auto order oid to update. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracartv2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAutoOrdersBatch**
> \ultracartv2\models\AutoOrdersResponse updateAutoOrdersBatch($auto_orders_request, $_expand, $_placeholders, $_async)

Update multiple auto orders

Update multiple auto orders on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracartv2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracartv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracartv2\api\AutoOrderApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracartv2\api\AutoOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$auto_orders_request = new \ultracartv2\models\AutoOrdersRequest(); // \ultracartv2\models\AutoOrdersRequest | Auto orders to update (synchronous maximum 20 / asynchronous maximum 100)
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.
$_async = true; // bool | True if the operation should be run async.  No result returned

try {
    $result = $apiInstance->updateAutoOrdersBatch($auto_orders_request, $_expand, $_placeholders, $_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoOrderApi->updateAutoOrdersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_orders_request** | [**\ultracartv2\models\AutoOrdersRequest**](../Model/AutoOrdersRequest.md)| Auto orders to update (synchronous maximum 20 / asynchronous maximum 100) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]
 **_async** | **bool**| True if the operation should be run async.  No result returned | [optional]

### Return type

[**\ultracartv2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

