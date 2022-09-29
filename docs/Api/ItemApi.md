# ultracart\v2\ItemApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDigitalItem**](ItemApi.md#deleteDigitalItem) | **DELETE** /item/digital_library/{digital_item_oid} | Delete a digital item, which is a file within the digital library, not an actual merchant item
[**deleteItem**](ItemApi.md#deleteItem) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
[**getDigitalItem**](ItemApi.md#getDigitalItem) | **GET** /item/digital_library/{digital_item_oid} | Retrieve a digital item from the digital library, which are digital files that may be attached to normal items
[**getDigitalItems**](ItemApi.md#getDigitalItems) | **GET** /item/digital_library | Retrieve digital items from the digital library which are digital files that may be attached to normal items
[**getDigitalItemsByExternalId**](ItemApi.md#getDigitalItemsByExternalId) | **GET** /item/digital_library/by_external/{external_id} | Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id
[**getItem**](ItemApi.md#getItem) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
[**getItemByMerchantItemId**](ItemApi.md#getItemByMerchantItemId) | **GET** /item/items/merchant_item_id/{merchant_item_id} | Retrieve an item by item id
[**getItems**](ItemApi.md#getItems) | **GET** /item/items | Retrieve items
[**getPricingTiers**](ItemApi.md#getPricingTiers) | **GET** /item/pricing_tiers | Retrieve pricing tiers
[**getUnassociatedDigitalItems**](ItemApi.md#getUnassociatedDigitalItems) | **GET** /item/digital_library/unassociated | Retrieve digital items from the digital library (which are digital files that may be attached to normal items) not yet associated with actual items
[**insertDigitalItem**](ItemApi.md#insertDigitalItem) | **POST** /item/digital_library | Create a file within the digital library
[**insertItem**](ItemApi.md#insertItem) | **POST** /item/items | Create an item
[**updateDigitalItem**](ItemApi.md#updateDigitalItem) | **PUT** /item/digital_library/{digital_item_oid} | Updates a file within the digital library
[**updateItem**](ItemApi.md#updateItem) | **PUT** /item/items/{merchant_item_oid} | Update an item
[**updateItems**](ItemApi.md#updateItems) | **PUT** /item/items/batch | Update multiple items
[**uploadTemporaryMultimedia**](ItemApi.md#uploadTemporaryMultimedia) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.


# **deleteDigitalItem**
> deleteDigitalItem($digital_item_oid)

Delete a digital item, which is a file within the digital library, not an actual merchant item

Delete a digital item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$digital_item_oid = 56; // int | The digital item oid to delete.

try {
    $apiInstance->deleteDigitalItem($digital_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteDigitalItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_item_oid** | **int**| The digital item oid to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItem**
> deleteItem($merchant_item_oid)

Delete an item

Delete an item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$merchant_item_oid = 56; // int | The item oid to delete.

try {
    $apiInstance->deleteItem($merchant_item_oid);
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

# **getDigitalItem**
> \ultracart\v2\models\ItemDigitalItemResponse getDigitalItem($digital_item_oid)

Retrieve a digital item from the digital library, which are digital files that may be attached to normal items

Retrieves a digital item (file information) from the account.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$digital_item_oid = 56; // int | The digital item oid to retrieve.

try {
    $result = $apiInstance->getDigitalItem($digital_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getDigitalItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_item_oid** | **int**| The digital item oid to retrieve. |

### Return type

[**\ultracart\v2\models\ItemDigitalItemResponse**](../Model/ItemDigitalItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalItems**
> \ultracart\v2\models\ItemDigitalItemsResponse getDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders)

Retrieve digital items from the digital library which are digital files that may be attached to normal items

Retrieves a group of digital items (file information) from the account.  If no parameters are specified, all digital items will be returned.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 2000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getDigitalItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 2000) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch items that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemDigitalItemsResponse**](../Model/ItemDigitalItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDigitalItemsByExternalId**
> \ultracart\v2\models\ItemDigitalItemsResponse getDigitalItemsByExternalId($external_id)

Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id

Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$external_id = "external_id_example"; // string | The external id to match against.

try {
    $result = $apiInstance->getDigitalItemsByExternalId($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getDigitalItemsByExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**| The external id to match against. |

### Return type

[**\ultracart\v2\models\ItemDigitalItemsResponse**](../Model/ItemDigitalItemsResponse.md)

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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$merchant_item_oid = 56; // int | The item oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getItem($merchant_item_oid, $_expand, $_placeholders);
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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$merchant_item_id = "merchant_item_id_example"; // string | The item id to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getItemByMerchantItemId($merchant_item_id, $_expand, $_placeholders);
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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$parent_category_id = 56; // int | The parent category object id to retrieve items for.  Unspecified means all items on the account.  0 = root
$parent_category_path = "parent_category_path_example"; // string | The parent category path to retrieve items for.  Unspecified means all items on the account.  / = root
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 2000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getItems($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
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

# **getPricingTiers**
> \ultracart\v2\models\PricingTiersResponse getPricingTiers($_expand)

Retrieve pricing tiers

Retrieves the pricing tiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getPricingTiers($_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getPricingTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\PricingTiersResponse**](../Model/PricingTiersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnassociatedDigitalItems**
> \ultracart\v2\models\ItemDigitalItemsResponse getUnassociatedDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders)

Retrieve digital items from the digital library (which are digital files that may be attached to normal items) not yet associated with actual items

Retrieves a group of digital items (file information) from the account that are not yet associated with any actual items.  If no parameters are specified, all digital items will be returned.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 2000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = "_since_example"; // string | Fetch items that have been created/modified since this date/time.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->getUnassociatedDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getUnassociatedDigitalItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 2000) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch items that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemDigitalItemsResponse**](../Model/ItemDigitalItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertDigitalItem**
> \ultracart\v2\models\ItemDigitalItemResponse insertDigitalItem($digital_item)

Create a file within the digital library

Create a file within the digital library.  This does not create an item, but makes this digital file available and selectable as part (or all) of an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$digital_item = new \ultracart\v2\models\ItemDigitalItem(); // \ultracart\v2\models\ItemDigitalItem | Digital item to create

try {
    $result = $apiInstance->insertDigitalItem($digital_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->insertDigitalItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_item** | [**\ultracart\v2\models\ItemDigitalItem**](../Model/ItemDigitalItem.md)| Digital item to create |

### Return type

[**\ultracart\v2\models\ItemDigitalItemResponse**](../Model/ItemDigitalItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$item = new \ultracart\v2\models\Item(); // \ultracart\v2\models\Item | Item to create
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->insertItem($item, $_expand, $_placeholders);
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

# **updateDigitalItem**
> \ultracart\v2\models\ItemDigitalItemResponse updateDigitalItem($digital_item_oid, $digital_item)

Updates a file within the digital library

Updates a file within the digital library.  This does not update an item, but updates a digital file available and selectable as part (or all) of an item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$digital_item_oid = 56; // int | The digital item oid to update.
$digital_item = new \ultracart\v2\models\ItemDigitalItem(); // \ultracart\v2\models\ItemDigitalItem | Digital item to update

try {
    $result = $apiInstance->updateDigitalItem($digital_item_oid, $digital_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateDigitalItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_item_oid** | **int**| The digital item oid to update. |
 **digital_item** | [**\ultracart\v2\models\ItemDigitalItem**](../Model/ItemDigitalItem.md)| Digital item to update |

### Return type

[**\ultracart\v2\models\ItemDigitalItemResponse**](../Model/ItemDigitalItemResponse.md)

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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$item = new \ultracart\v2\models\Item(); // \ultracart\v2\models\Item | Item to update
$merchant_item_oid = 56; // int | The item oid to update.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->updateItem($item, $merchant_item_oid, $_expand, $_placeholders);
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

# **updateItems**
> \ultracart\v2\models\ItemsResponse updateItems($items_request, $_expand, $_placeholders, $_async)

Update multiple items

Update multiple item on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$items_request = new \ultracart\v2\models\ItemsRequest(); // \ultracart\v2\models\ItemsRequest | Items to update (synchronous maximum 20 / asynchronous maximum 100)
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.
$_async = true; // bool | True if the operation should be run async.  No result returned

try {
    $result = $apiInstance->updateItems($items_request, $_expand, $_placeholders, $_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_request** | [**\ultracart\v2\models\ItemsRequest**](../Model/ItemsRequest.md)| Items to update (synchronous maximum 20 / asynchronous maximum 100) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]
 **_async** | **bool**| True if the operation should be run async.  No result returned | [optional]

### Return type

[**\ultracart\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

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

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ItemApi::usingApiKey($simple_key);

$file = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $apiInstance->uploadTemporaryMultimedia($file);
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

