# ultracart\admin\v2\ItemApi

All URIs are relative to *https://secure.ultracart.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminV2AutoOrderAutoOrdersAutoOrderOidGet**](ItemApi.md#adminV2AutoOrderAutoOrdersAutoOrderOidGet) | **GET** /admin/v2/auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order
[**adminV2AutoOrderAutoOrdersAutoOrderOidPut**](ItemApi.md#adminV2AutoOrderAutoOrdersAutoOrderOidPut) | **PUT** /admin/v2/auto_order/auto_orders/{auto_order_oid} | Update an auto order
[**adminV2AutoOrderAutoOrdersGet**](ItemApi.md#adminV2AutoOrderAutoOrdersGet) | **GET** /admin/v2/auto_order/auto_orders | Retrieve auto orders
[**adminV2ItemItemsGet**](ItemApi.md#adminV2ItemItemsGet) | **GET** /admin/v2/item/items | Retrieve items
[**adminV2ItemItemsMerchantItemOidDelete**](ItemApi.md#adminV2ItemItemsMerchantItemOidDelete) | **DELETE** /admin/v2/item/items/{merchant_item_oid} | Delete an item
[**adminV2ItemItemsMerchantItemOidGet**](ItemApi.md#adminV2ItemItemsMerchantItemOidGet) | **GET** /admin/v2/item/items/{merchant_item_oid} | Retrieve an item
[**adminV2ItemItemsMerchantItemOidPut**](ItemApi.md#adminV2ItemItemsMerchantItemOidPut) | **PUT** /admin/v2/item/items/{merchant_item_oid} | Update an item
[**adminV2ItemItemsPost**](ItemApi.md#adminV2ItemItemsPost) | **POST** /admin/v2/item/items | Create an item
[**adminV2ItemTempMultimediaPost**](ItemApi.md#adminV2ItemTempMultimediaPost) | **POST** /admin/v2/item/temp_multimedia | Upload an image to the temporary multimedia.


# **adminV2AutoOrderAutoOrdersAutoOrderOidGet**
> \ultracart\admin\v2\models\AutoOrderResponse adminV2AutoOrderAutoOrdersAutoOrderOidGet($auto_order_oid, $_expand)

Retrieve an auto order

Retrieves a single auto order using the specified auto order oid.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$auto_order_oid = 56; // int | The auto order oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->adminV2AutoOrderAutoOrdersAutoOrderOidGet($auto_order_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2AutoOrderAutoOrdersAutoOrderOidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2AutoOrderAutoOrdersAutoOrderOidPut**
> \ultracart\admin\v2\models\AutoOrderResponse adminV2AutoOrderAutoOrdersAutoOrderOidPut($auto_order, $auto_order_oid)

Update an auto order

Update an auto order on the UltraCart account.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$auto_order = new \ultracart\admin\v2\models\AutoOrder(); // \ultracart\admin\v2\models\AutoOrder | Auto order to update
$auto_order_oid = 56; // int | The auto order oid to update.

try {
    $result = $api_instance->adminV2AutoOrderAutoOrdersAutoOrderOidPut($auto_order, $auto_order_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2AutoOrderAutoOrdersAutoOrderOidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order** | [**\ultracart\admin\v2\models\AutoOrder**](../Model/\ultracart\admin\v2\models\AutoOrder.md)| Auto order to update |
 **auto_order_oid** | **int**| The auto order oid to update. |

### Return type

[**\ultracart\admin\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2AutoOrderAutoOrdersGet**
> \ultracart\admin\v2\models\AutoOrdersResponse adminV2AutoOrderAutoOrdersGet($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand)

Retrieve auto orders

Retrieves auto orders from the account.  If no parameters are specified, all auto orders will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
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
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->adminV2AutoOrderAutoOrdersGet($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2AutoOrderAutoOrdersGet: ', $e->getMessage(), PHP_EOL;
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
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemItemsGet**
> \ultracart\admin\v2\models\ItemsResponse adminV2ItemItemsGet($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders)

Retrieve items

Retrieves a group of items from the account.  If no parameters are specified, all items will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$parent_category_id = 56; // int | The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 = root
$parent_category_path = "parent_category_path_example"; // string | The parent category path to retrieve items for.  Unspecified means all items on the account.  / = root
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 2000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->adminV2ItemItemsGet($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_category_id** | **int**| The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root | [optional]
 **parent_category_path** | **string**| The parent category path to retrieve items for.  Unspecified means all items on the account.  / &#x3D; root | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 2000) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch items that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\admin\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemItemsMerchantItemOidDelete**
> adminV2ItemItemsMerchantItemOidDelete($merchant_item_oid)

Delete an item

Delete an item on the UltraCart account.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$merchant_item_oid = 56; // int | The item oid to delete.

try {
    $api_instance->adminV2ItemItemsMerchantItemOidDelete($merchant_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemItemsMerchantItemOidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemItemsMerchantItemOidGet**
> \ultracart\admin\v2\models\ItemResponse adminV2ItemItemsMerchantItemOidGet($merchant_item_oid, $_expand, $_placeholders)

Retrieve an item

Retrieves a single item using the specified item oid.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$merchant_item_oid = 56; // int | The item oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->adminV2ItemItemsMerchantItemOidGet($merchant_item_oid, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemItemsMerchantItemOidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemItemsMerchantItemOidPut**
> \ultracart\admin\v2\models\ItemResponse adminV2ItemItemsMerchantItemOidPut($item, $merchant_item_oid)

Update an item

Update a new item on the UltraCart account.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$item = new \ultracart\admin\v2\models\Item(); // \ultracart\admin\v2\models\Item | Item to update
$merchant_item_oid = 56; // int | The item oid to update.

try {
    $result = $api_instance->adminV2ItemItemsMerchantItemOidPut($item, $merchant_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemItemsMerchantItemOidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\ultracart\admin\v2\models\Item**](../Model/\ultracart\admin\v2\models\Item.md)| Item to update |
 **merchant_item_oid** | **int**| The item oid to update. |

### Return type

[**\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemItemsPost**
> \ultracart\admin\v2\models\ItemResponse adminV2ItemItemsPost($item)

Create an item

Create a new item on the UltraCart account.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$item = new \ultracart\admin\v2\models\Item(); // \ultracart\admin\v2\models\Item | Item to create

try {
    $result = $api_instance->adminV2ItemItemsPost($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\ultracart\admin\v2\models\Item**](../Model/\ultracart\admin\v2\models\Item.md)| Item to create |

### Return type

[**\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adminV2ItemTempMultimediaPost**
> \ultracart\admin\v2\models\TempMultimediaResponse adminV2ItemTempMultimediaPost($file)

Upload an image to the temporary multimedia.

Uploads an image and returns back meta information about the image as well as the identifier needed for the item update.

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

$api_instance = new ultracart\admin\v2\Api\ItemApi();
$file = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $api_instance->adminV2ItemTempMultimediaPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->adminV2ItemTempMultimediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |

### Return type

[**\ultracart\admin\v2\models\TempMultimediaResponse**](../Model/TempMultimediaResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

