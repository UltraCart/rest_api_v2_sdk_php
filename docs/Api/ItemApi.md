# \ultracart\admin\v2\swagger\ItemApi

All URIs are relative to *https://localhost/rest/admin/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemItemsGet**](ItemApi.md#itemItemsGet) | **GET** /item/items | Retrieve items
[**itemItemsMerchantItemOidDelete**](ItemApi.md#itemItemsMerchantItemOidDelete) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
[**itemItemsMerchantItemOidGet**](ItemApi.md#itemItemsMerchantItemOidGet) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
[**itemItemsMerchantItemOidPut**](ItemApi.md#itemItemsMerchantItemOidPut) | **PUT** /item/items/{merchant_item_oid} | Update an item
[**itemItemsPost**](ItemApi.md#itemItemsPost) | **POST** /item/items | Create an item
[**itemTempMultimediaPost**](ItemApi.md#itemTempMultimediaPost) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.


# **itemItemsGet**
> \\ultracart\admin\v2\models\ItemsResponse itemItemsGet($parent_category_id)

Retrieve items

Retrieves a group of items from the account.  If no parameters are specified, all items will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$parent_category_id = 56; // int | The parent category to retrieve items for.  Unspecified means all items on the account.  0 = root

try {
    $result = $api_instance->itemItemsGet($parent_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_category_id** | **int**| The parent category to retrieve items for.  Unspecified means all items on the account.  0 &#x3D; root | [optional]

### Return type

[**\\ultracart\admin\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemItemsMerchantItemOidDelete**
> itemItemsMerchantItemOidDelete($merchant_item_oid)

Delete an item

Delete an item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$merchant_item_oid = 56; // int | The item oid to delete.

try {
    $api_instance->itemItemsMerchantItemOidDelete($merchant_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsMerchantItemOidDelete: ', $e->getMessage(), PHP_EOL;
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

# **itemItemsMerchantItemOidGet**
> \\ultracart\admin\v2\models\ItemResponse itemItemsMerchantItemOidGet($merchant_item_oid)

Retrieve an item

Retrieves a single item using the specified item oid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$merchant_item_oid = 56; // int | The item oid to retrieve.

try {
    $result = $api_instance->itemItemsMerchantItemOidGet($merchant_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsMerchantItemOidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to retrieve. |

### Return type

[**\\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemItemsMerchantItemOidPut**
> \\ultracart\admin\v2\models\ItemResponse itemItemsMerchantItemOidPut($item, $merchant_item_oid)

Update an item

Update a new item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$item = new \\ultracart\admin\v2\models\Item(); // \\ultracart\admin\v2\models\Item | Item to create
$merchant_item_oid = 56; // int | The item oid to update.

try {
    $result = $api_instance->itemItemsMerchantItemOidPut($item, $merchant_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsMerchantItemOidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\\ultracart\admin\v2\models\Item**](../Model/\\ultracart\admin\v2\models\Item.md)| Item to create |
 **merchant_item_oid** | **int**| The item oid to update. |

### Return type

[**\\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemItemsPost**
> \\ultracart\admin\v2\models\ItemResponse itemItemsPost($item)

Create an item

Create a new item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$item = new \\ultracart\admin\v2\models\Item(); // \\ultracart\admin\v2\models\Item | Item to create

try {
    $result = $api_instance->itemItemsPost($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item** | [**\\ultracart\admin\v2\models\Item**](../Model/\\ultracart\admin\v2\models\Item.md)| Item to create |

### Return type

[**\\ultracart\admin\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemTempMultimediaPost**
> \\ultracart\admin\v2\models\TempMultimediaResponse itemTempMultimediaPost($file)

Upload an image to the temporary multimedia.

Uploads an image and returns back meta information about the image as well as the identifier needed for the item update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
\ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// \ultracart\admin\v2\swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new \ultracart\admin\v2\swagger\Api\ItemApi();
$file = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $api_instance->itemTempMultimediaPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->itemTempMultimediaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |

### Return type

[**\\ultracart\admin\v2\models\TempMultimediaResponse**](../Model/TempMultimediaResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

