# ultracart\v2\ItemApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteItem**](ItemApi.md#deleteItem) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
[**getItem**](ItemApi.md#getItem) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
[**getItemByMerchantItemId**](ItemApi.md#getItemByMerchantItemId) | **GET** /item/items/merchant_item_id/{merchant_item_id} | Retrieve an item by item id
[**getItems**](ItemApi.md#getItems) | **GET** /item/items | Retrieve items
[**insertItem**](ItemApi.md#insertItem) | **POST** /item/items | Create an item
[**updateItem**](ItemApi.md#updateItem) | **PUT** /item/items/{merchant_item_oid} | Update an item
[**uploadTemporaryMultimedia**](ItemApi.md#uploadTemporaryMultimedia) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.


# **deleteItem**
> deleteItem($merchant_item_oid)

Delete an item

Delete an item on the UltraCart account.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$merchant_item_oid = 56; // int | The item oid to delete.

try {
    $api_instance->deleteItem($merchant_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteItem: ', $e->getMessage(), PHP_EOL;
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

# **getItem**
> \ultracart\v2\models\ItemResponse getItem($merchant_item_oid, $_expand, $_placeholders)

Retrieve an item

Retrieves a single item using the specified item oid.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$merchant_item_oid = 56; // int | The item oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->getItem($merchant_item_oid, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItem: ', $e->getMessage(), PHP_EOL;
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

[**\ultracart\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemByMerchantItemId**
> \ultracart\v2\models\ItemResponse getItemByMerchantItemId($merchant_item_id, $_expand, $_placeholders)

Retrieve an item by item id

Retrieves a single item using the specified item id.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$merchant_item_id = "merchant_item_id_example"; // string | The item id to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->getItemByMerchantItemId($merchant_item_id, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemByMerchantItemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_id** | **string**| The item id to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItems**
> \ultracart\v2\models\ItemsResponse getItems($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders)

Retrieve items

Retrieves a group of items from the account.  If no parameters are specified, all items will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$parent_category_id = 56; // int | The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 = root
$parent_category_path = "parent_category_path_example"; // string | The parent category path to retrieve items for.  Unspecified means all items on the account.  / = root
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 2000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->getItems($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItems: ', $e->getMessage(), PHP_EOL;
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

[**\ultracart\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertItem**
> \ultracart\v2\models\ItemResponse insertItem($item, $_expand, $_placeholders)

Create an item

Create a new item on the UltraCart account.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$item = new \ultracart\v2\models\Item(); // \ultracart\v2\models\Item | Item to create
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->insertItem($item, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->insertItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\ultracart\v2\models\Item**](../Model/Item.md)| Item to create |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItem**
> \ultracart\v2\models\ItemResponse updateItem($item, $merchant_item_oid, $_expand, $_placeholders)

Update an item

Update a new item on the UltraCart account.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$item = new \ultracart\v2\models\Item(); // \ultracart\v2\models\Item | Item to update
$merchant_item_oid = 56; // int | The item oid to update.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $api_instance->updateItem($item, $merchant_item_oid, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\ultracart\v2\models\Item**](../Model/Item.md)| Item to update |
 **merchant_item_oid** | **int**| The item oid to update. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadTemporaryMultimedia**
> \ultracart\v2\models\TempMultimediaResponse uploadTemporaryMultimedia($file)

Upload an image to the temporary multimedia.

Uploads an image and returns back meta information about the image as well as the identifier needed for the item update.

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

$api_instance = new ultracart\v2\Api\ItemApi(new \Http\Adapter\Guzzle6\Client());
$file = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $api_instance->uploadTemporaryMultimedia($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->uploadTemporaryMultimedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |

### Return type

[**\ultracart\v2\models\TempMultimediaResponse**](../Model/TempMultimediaResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

