# ultracart\v2\AffiliateApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClicksByQuery()**](AffiliateApi.md#getClicksByQuery) | **POST** /affiliate/clicks/query | Retrieve clicks
[**getLedgersByQuery()**](AffiliateApi.md#getLedgersByQuery) | **POST** /affiliate/ledgers/query | Retrieve ledger entries


## `getClicksByQuery()`

```php
getClicksByQuery($click_query, $_limit, $_offset, $_expand): \ultracart\v2\models\AffiliateClicksResponse
```

Retrieve clicks

Retrieves a group of clicks from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the clicks returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\AffiliateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$click_query = new \ultracart\v2\models\AffiliateClickQuery(); // \ultracart\v2\models\AffiliateClickQuery | Click query
$_limit = 10000; // int | The maximum number of records to return on this one API call. (Maximum 10000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  Only option is link.

try {
    $result = $apiInstance->getClicksByQuery($click_query, $_limit, $_offset, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getClicksByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **click_query** | [**\ultracart\v2\models\AffiliateClickQuery**](../Model/AffiliateClickQuery.md)| Click query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 10000) | [optional] [default to 10000]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_expand** | **string**| The object expansion to perform on the result.  Only option is link. | [optional]

### Return type

[**\ultracart\v2\models\AffiliateClicksResponse**](../Model/AffiliateClicksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgersByQuery()`

```php
getLedgersByQuery($ledger_query, $_limit, $_offset, $_expand): \ultracart\v2\models\AffiliateLedgersResponse
```

Retrieve ledger entries

Retrieves a group of ledger entries from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the ledgers returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\AffiliateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$ledger_query = new \ultracart\v2\models\AffiliateLedgerQuery(); // \ultracart\v2\models\AffiliateLedgerQuery | Ledger query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Maximum 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  Only option is link.

try {
    $result = $apiInstance->getLedgersByQuery($ledger_query, $_limit, $_offset, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->getLedgersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger_query** | [**\ultracart\v2\models\AffiliateLedgerQuery**](../Model/AffiliateLedgerQuery.md)| Ledger query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_expand** | **string**| The object expansion to perform on the result.  Only option is link. | [optional]

### Return type

[**\ultracart\v2\models\AffiliateLedgersResponse**](../Model/AffiliateLedgersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
