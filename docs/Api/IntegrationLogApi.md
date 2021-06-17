# ultracart\v2\IntegrationLogApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntegrationLog**](IntegrationLogApi.md#getIntegrationLog) | **GET** /integration_log/query/{pk}/{sk} | Retrieve an integration log
[**getIntegrationLogsQuery**](IntegrationLogApi.md#getIntegrationLogsQuery) | **POST** /integration_log/query | Retrieve integration logs


# **getIntegrationLog**
> \ultracart\v2\models\IntegrationLogResponse getIntegrationLog($pk, $sk)

Retrieve an integration log

Retrieve an integration logs from the account based identifiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\IntegrationLogApi::usingApiKey($simple_key);

$pk = "pk_example"; // string | 
$sk = "sk_example"; // string | 

try {
    $result = $apiInstance->getIntegrationLog($pk, $sk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pk** | **string**|  |
 **sk** | **string**|  |

### Return type

[**\ultracart\v2\models\IntegrationLogResponse**](../Model/IntegrationLogResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationLogsQuery**
> \ultracart\v2\models\IntegrationLogQueryResponse getIntegrationLogsQuery($integration_log_query, $_limit, $_offset, $_sort)

Retrieve integration logs

Retrieves a set of integration logs from the account based on a query object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\IntegrationLogApi::usingApiKey($simple_key);

$integration_log_query = new \ultracart\v2\models\IntegrationLogQueryRequest(); // \ultracart\v2\models\IntegrationLogQueryRequest | Integration log query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 500)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->getIntegrationLogsQuery($integration_log_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLogsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_log_query** | [**\ultracart\v2\models\IntegrationLogQueryRequest**](../Model/IntegrationLogQueryRequest.md)| Integration log query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 500) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\IntegrationLogQueryResponse**](../Model/IntegrationLogQueryResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

