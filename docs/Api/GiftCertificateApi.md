# ultracart\v2\GiftCertificateApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGiftCertificateLedgerEntry()**](GiftCertificateApi.md#addGiftCertificateLedgerEntry) | **POST** /gift_certificate/gift_certificates/{gift_certificate_oid}/ledger_entry | Add a gift certificate ledger entry
[**createGiftCertificate()**](GiftCertificateApi.md#createGiftCertificate) | **POST** /gift_certificate/gift_certificates | Create a gift certificate
[**deleteGiftCertificate()**](GiftCertificateApi.md#deleteGiftCertificate) | **DELETE** /gift_certificate/gift_certificates/{gift_certificate_oid} | Delete a gift certificate
[**getGiftCertificateByCode()**](GiftCertificateApi.md#getGiftCertificateByCode) | **POST** /gift_certificate/gift_certificates/by_code/{code} | Retrieve gift certificate by code
[**getGiftCertificateByOid()**](GiftCertificateApi.md#getGiftCertificateByOid) | **POST** /gift_certificate/gift_certificates/{gift_certificate_oid} | Retrieve gift certificate by oid
[**getGiftCertificatesByEmail()**](GiftCertificateApi.md#getGiftCertificatesByEmail) | **POST** /gift_certificate/gift_certificates/by_email/{email} | Retrieve gift certificate by email
[**getGiftCertificatesByQuery()**](GiftCertificateApi.md#getGiftCertificatesByQuery) | **POST** /gift_certificate/gift_certificates/query | Retrieve gift certificates by query
[**updateGiftCertificate()**](GiftCertificateApi.md#updateGiftCertificate) | **PUT** /gift_certificate/gift_certificates/{gift_certificate_oid} | Update a gift certificate


## `addGiftCertificateLedgerEntry()`

```php
addGiftCertificateLedgerEntry($gift_certificate_oid, $gift_certificate_ledger_entry): \ultracart\v2\models\GiftCertificateResponse
```

Add a gift certificate ledger entry

Adds a ledger entry for this gift certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_oid = 56; // int
$gift_certificate_ledger_entry = new \ultracart\v2\models\GiftCertificateLedgerEntry(); // \ultracart\v2\models\GiftCertificateLedgerEntry | Gift certificate ledger entry

try {
    $result = $apiInstance->addGiftCertificateLedgerEntry($gift_certificate_oid, $gift_certificate_ledger_entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->addGiftCertificateLedgerEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_oid** | **int**|  |
 **gift_certificate_ledger_entry** | [**\ultracart\v2\models\GiftCertificateLedgerEntry**](../Model/GiftCertificateLedgerEntry.md)| Gift certificate ledger entry |

### Return type

[**\ultracart\v2\models\GiftCertificateResponse**](../Model/GiftCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGiftCertificate()`

```php
createGiftCertificate($gift_certificate_create_request): \ultracart\v2\models\GiftCertificateResponse
```

Create a gift certificate

Creates a gift certificate for this merchant account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_create_request = new \ultracart\v2\models\GiftCertificateCreateRequest(); // \ultracart\v2\models\GiftCertificateCreateRequest | Gift certificate create request

try {
    $result = $apiInstance->createGiftCertificate($gift_certificate_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->createGiftCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_create_request** | [**\ultracart\v2\models\GiftCertificateCreateRequest**](../Model/GiftCertificateCreateRequest.md)| Gift certificate create request |

### Return type

[**\ultracart\v2\models\GiftCertificateResponse**](../Model/GiftCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGiftCertificate()`

```php
deleteGiftCertificate($gift_certificate_oid)
```

Delete a gift certificate

Deletes a gift certificate for this merchant account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_oid = 56; // int

try {
    $apiInstance->deleteGiftCertificate($gift_certificate_oid);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->deleteGiftCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftCertificateByCode()`

```php
getGiftCertificateByCode($code): \ultracart\v2\models\GiftCertificateResponse
```

Retrieve gift certificate by code

Retrieves a gift certificate from the account based on the code (the value the customer enters at checkout time).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$code = 'code_example'; // string

try {
    $result = $apiInstance->getGiftCertificateByCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->getGiftCertificateByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\ultracart\v2\models\GiftCertificateResponse**](../Model/GiftCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftCertificateByOid()`

```php
getGiftCertificateByOid($gift_certificate_oid): \ultracart\v2\models\GiftCertificateResponse
```

Retrieve gift certificate by oid

Retrieves a gift certificate from the account based on the internal primary key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_oid = 56; // int

try {
    $result = $apiInstance->getGiftCertificateByOid($gift_certificate_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->getGiftCertificateByOid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\GiftCertificateResponse**](../Model/GiftCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftCertificatesByEmail()`

```php
getGiftCertificatesByEmail($email): \ultracart\v2\models\GiftCertificatesResponse
```

Retrieve gift certificate by email

Retrieves all gift certificates from the account based on customer email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$email = 'email_example'; // string

try {
    $result = $apiInstance->getGiftCertificatesByEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->getGiftCertificatesByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\ultracart\v2\models\GiftCertificatesResponse**](../Model/GiftCertificatesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGiftCertificatesByQuery()`

```php
getGiftCertificatesByQuery($gift_certificate_query, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\GiftCertificatesResponse
```

Retrieve gift certificates by query

Retrieves gift certificates from the account.  If no parameters are specified, all gift certificates will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_query = new \ultracart\v2\models\GiftCertificateQuery(); // \ultracart\v2\models\GiftCertificateQuery | Gift certificates query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = '_since_example'; // string | Fetch customers that have been created/modified since this date/time.
$_sort = '_sort_example'; // string | The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getGiftCertificatesByQuery($gift_certificate_query, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->getGiftCertificatesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_query** | [**\ultracart\v2\models\GiftCertificateQuery**](../Model/GiftCertificateQuery.md)| Gift certificates query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch customers that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\GiftCertificatesResponse**](../Model/GiftCertificatesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGiftCertificate()`

```php
updateGiftCertificate($gift_certificate_oid, $gift_certificate): \ultracart\v2\models\GiftCertificateResponse
```

Update a gift certificate

Update a gift certificate for this merchant account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\GiftCertificateApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$gift_certificate_oid = 56; // int
$gift_certificate = new \ultracart\v2\models\GiftCertificate(); // \ultracart\v2\models\GiftCertificate | Gift certificate

try {
    $result = $apiInstance->updateGiftCertificate($gift_certificate_oid, $gift_certificate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCertificateApi->updateGiftCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_certificate_oid** | **int**|  |
 **gift_certificate** | [**\ultracart\v2\models\GiftCertificate**](../Model/GiftCertificate.md)| Gift certificate |

### Return type

[**\ultracart\v2\models\GiftCertificateResponse**](../Model/GiftCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
