# ultracart\v2\ChargebackApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteChargeback()**](ChargebackApi.md#deleteChargeback) | **DELETE** /chargeback/chargebacks/{chargeback_dispute_oid} | Delete a chargeback
[**getChargebackDispute()**](ChargebackApi.md#getChargebackDispute) | **GET** /chargeback/chargebacks/{chargeback_dispute_oid} | Retrieve a chargeback
[**getChargebackDisputes()**](ChargebackApi.md#getChargebackDisputes) | **GET** /chargeback/chargebacks | Retrieve chargebacks
[**insertChargeback()**](ChargebackApi.md#insertChargeback) | **POST** /chargeback/chargebacks | Insert a chargeback
[**updateChargeback()**](ChargebackApi.md#updateChargeback) | **PUT** /chargeback/chargebacks/{chargeback_dispute_oid} | Update a chargeback


## `deleteChargeback()`

```php
deleteChargeback($chargeback_dispute_oid): \ultracart\v2\models\ChargebackDisputeResponse
```

Delete a chargeback

Delete a chargeback on the UltraCart account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\ChargebackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeback_dispute_oid = 56; // int | The chargeback_dispute_oid to delete.

try {
    $result = $apiInstance->deleteChargeback($chargeback_dispute_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargebackApi->deleteChargeback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeback_dispute_oid** | **int**| The chargeback_dispute_oid to delete. |

### Return type

[**\ultracart\v2\models\ChargebackDisputeResponse**](../Model/ChargebackDisputeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChargebackDispute()`

```php
getChargebackDispute($chargeback_dispute_oid, $_expand): \ultracart\v2\models\ChargebackDisputeResponse
```

Retrieve a chargeback

Retrieves a single chargeback using the specified chargeback dispute oid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\ChargebackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeback_dispute_oid = 56; // int | The chargeback dispute oid to retrieve.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getChargebackDispute($chargeback_dispute_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargebackApi->getChargebackDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeback_dispute_oid** | **int**| The chargeback dispute oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ChargebackDisputeResponse**](../Model/ChargebackDisputeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChargebackDisputes()`

```php
getChargebackDisputes($order_id, $case_number, $status, $expiration_dts_start, $expiration_dts_end, $chargeback_dts_start, $chargeback_dts_end, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\ChargebackDisputesResponse
```

Retrieve chargebacks

Retrieves chargebacks from the account.  If no parameters are specified, all chargebacks will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\ChargebackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order Id
$case_number = 'case_number_example'; // string | Case number
$status = 'status_example'; // string | Status
$expiration_dts_start = 'expiration_dts_start_example'; // string | Expiration dts start
$expiration_dts_end = 'expiration_dts_end_example'; // string | Expiration dts end
$chargeback_dts_start = 'chargeback_dts_start_example'; // string | Chargeback dts start
$chargeback_dts_end = 'chargeback_dts_end_example'; // string | Chargeback dts end
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = '_since_example'; // string | Fetch chargebacks that have been created/modified since this date/time.
$_sort = '_sort_example'; // string | The sort order of the chargebacks.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getChargebackDisputes($order_id, $case_number, $status, $expiration_dts_start, $expiration_dts_end, $chargeback_dts_start, $chargeback_dts_end, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargebackApi->getChargebackDisputes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order Id | [optional]
 **case_number** | **string**| Case number | [optional]
 **status** | **string**| Status | [optional]
 **expiration_dts_start** | **string**| Expiration dts start | [optional]
 **expiration_dts_end** | **string**| Expiration dts end | [optional]
 **chargeback_dts_start** | **string**| Chargeback dts start | [optional]
 **chargeback_dts_end** | **string**| Chargeback dts end | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch chargebacks that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the chargebacks.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ChargebackDisputesResponse**](../Model/ChargebackDisputesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertChargeback()`

```php
insertChargeback($chargeback, $_expand): \ultracart\v2\models\ChargebackDisputeResponse
```

Insert a chargeback

Insert a chargeback on the UltraCart account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\ChargebackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeback = new \ultracart\v2\models\ChargebackDispute(); // \ultracart\v2\models\ChargebackDispute | Chargeback to insert
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->insertChargeback($chargeback, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargebackApi->insertChargeback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeback** | [**\ultracart\v2\models\ChargebackDispute**](../Model/ChargebackDispute.md)| Chargeback to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ChargebackDisputeResponse**](../Model/ChargebackDisputeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChargeback()`

```php
updateChargeback($chargeback_dispute_oid, $chargeback, $_expand): \ultracart\v2\models\ChargebackDisputeResponse
```

Update a chargeback

Update a chargeback on the UltraCart account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\ChargebackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chargeback_dispute_oid = 56; // int | The chargeback_dispute_oid to update.
$chargeback = new \ultracart\v2\models\ChargebackDispute(); // \ultracart\v2\models\ChargebackDispute | Chargeback to update
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->updateChargeback($chargeback_dispute_oid, $chargeback, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargebackApi->updateChargeback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chargeback_dispute_oid** | **int**| The chargeback_dispute_oid to update. |
 **chargeback** | [**\ultracart\v2\models\ChargebackDispute**](../Model/ChargebackDispute.md)| Chargeback to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ChargebackDisputeResponse**](../Model/ChargebackDisputeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
