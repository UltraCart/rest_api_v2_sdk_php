# ultracart\v2\IntegrationLogApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntegrationLog()**](IntegrationLogApi.md#getIntegrationLog) | **GET** /integration_log/query/{pk}/{sk} | Retrieve an integration log
[**getIntegrationLogFile()**](IntegrationLogApi.md#getIntegrationLogFile) | **GET** /integration_log/query/{pk}/{sk}/{uuid} | Retrieve an integration log file
[**getIntegrationLogFilePdf()**](IntegrationLogApi.md#getIntegrationLogFilePdf) | **GET** /integration_log/query/{pk}/{sk}/{uuid}/pdf | Retrieve an integration log file converted to PDF
[**getIntegrationLogSummariesQuery()**](IntegrationLogApi.md#getIntegrationLogSummariesQuery) | **POST** /integration_log/summary/query | Retrieve integration log summaries
[**getIntegrationLogsQuery()**](IntegrationLogApi.md#getIntegrationLogsQuery) | **POST** /integration_log/query | Retrieve integration logs


## `getIntegrationLog()`

```php
getIntegrationLog($pk, $sk): \ultracart\v2\models\IntegrationLogResponse
```

Retrieve an integration log

Retrieve an integration logs from the account based identifiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\IntegrationLogApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$pk = 'pk_example'; // string
$sk = 'sk_example'; // string

try {
    $result = $apiInstance->getIntegrationLog($pk, $sk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLog: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationLogFile()`

```php
getIntegrationLogFile($pk, $sk, $uuid): \SplFileObject
```

Retrieve an integration log file

Retrieve an integration log file from the account based identifiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\IntegrationLogApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$pk = 'pk_example'; // string
$sk = 'sk_example'; // string
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getIntegrationLogFile($pk, $sk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLogFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pk** | **string**|  |
 **sk** | **string**|  |
 **uuid** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationLogFilePdf()`

```php
getIntegrationLogFilePdf($pk, $sk, $uuid): \SplFileObject
```

Retrieve an integration log file converted to PDF

Retrieve an integration log file from the account based identifiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\IntegrationLogApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$pk = 'pk_example'; // string
$sk = 'sk_example'; // string
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getIntegrationLogFilePdf($pk, $sk, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLogFilePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pk** | **string**|  |
 **sk** | **string**|  |
 **uuid** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationLogSummariesQuery()`

```php
getIntegrationLogSummariesQuery($integration_log_summaries_query): \ultracart\v2\models\IntegrationLogSummaryQueryResponse
```

Retrieve integration log summaries

Retrieves a set of integration log summaries from the account based on a query object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\IntegrationLogApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$integration_log_summaries_query = new \ultracart\v2\models\IntegrationLogSummaryQueryRequest(); // \ultracart\v2\models\IntegrationLogSummaryQueryRequest | Integration log summaries query

try {
    $result = $apiInstance->getIntegrationLogSummariesQuery($integration_log_summaries_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLogSummariesQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_log_summaries_query** | [**\ultracart\v2\models\IntegrationLogSummaryQueryRequest**](../Model/IntegrationLogSummaryQueryRequest.md)| Integration log summaries query |

### Return type

[**\ultracart\v2\models\IntegrationLogSummaryQueryResponse**](../Model/IntegrationLogSummaryQueryResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationLogsQuery()`

```php
getIntegrationLogsQuery($integration_log_query, $_limit, $_offset, $_sort): \ultracart\v2\models\IntegrationLogQueryResponse
```

Retrieve integration logs

Retrieves a set of integration logs from the account based on a query object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\IntegrationLogApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$integration_log_query = new \ultracart\v2\models\IntegrationLogQueryRequest(); // \ultracart\v2\models\IntegrationLogQueryRequest | Integration log query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 500)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = '_sort_example'; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->getIntegrationLogsQuery($integration_log_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationLogApi->getIntegrationLogsQuery: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
