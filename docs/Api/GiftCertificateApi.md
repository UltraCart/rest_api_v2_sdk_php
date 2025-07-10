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

use ultracart\v2\models\GiftCertificateCreateRequest;

require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$gift_certificate_oid = 676813;

$entry_dts = new DateTime('now');

$ledger_entry = new \ultracart\v2\models\GiftCertificateLedgerEntry();
$ledger_entry->setAmount(-10.15); // this is the change amount in the gift certificate.  this is not a balance.  it will be subtracted from it.
$ledger_entry->setDescription("Customer bought something over the counter");
$ledger_entry->setReferenceOrderId('BLAH-12345'); // if this ledger entry is related to an order, add it here, else use null.
$ledger_entry->setEntryDts($entry_dts->format('c')); // Must be ISO8601 format
$ledger_entry->setGiftCertificateLedgerOid(0);  // the system will assign an oid.  do not assign one here.
$ledger_entry->setGiftCertificateOid($gift_certificate_oid);  // this is an existing gift certificate oid.  I created it using createGiftCertificate.ts


// ledger entry does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->addGiftCertificateLedgerEntry($gift_certificate_oid, $ledger_entry);

echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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

use ultracart\v2\models\GiftCertificateCreateRequest;

require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$expiration_dts = new DateTime('now');
$expiration_dts->modify('+3 month'); // or you can use '-90 day' for deduct


$gc_create_request = new GiftCertificateCreateRequest();
$gc_create_request->setAmount(150.75);
$gc_create_request->setInitialLedgerDescription("Issued instead of refund");
$gc_create_request->setMerchantNote('Problem Order: blah-12345\nIssued gift certificate due to stale product.\nIssued By: Customer Service Rep Joe Smith');
$gc_create_request->setEmail('support@ultracart.com');
$gc_create_request->setExpirationDts($expiration_dts->format('c'));
$gc_create_request->setMerchantNote("This is my merchant note.");


// create does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->createGiftCertificate($gc_create_request);

echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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
require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$gift_certificate_oid = 676713;

// by_oid does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->deleteGiftCertificate($gift_certificate_oid);


// if we re-query the gift certificate, an object will still return.  however, the deleted property will be true
// by_oid does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->getGiftCertificateByOid($gift_certificate_oid);


echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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
require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();
/** @noinspection SpellCheckingInspection */ $code = "93KHHXD6VH";

// by_code does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->getGiftCertificateByCode($code);


echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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
require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$gift_certificate_oid = 676713;

// by_oid does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->getGiftCertificateByOid($gift_certificate_oid);


echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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
require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$email = "support@ultracart.com";

// by_email does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->getGiftCertificatesByEmail($email);


echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificates());
echo '</pre></body></html>';


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

use ultracart\v2\api\GiftCertificateApi;
use ultracart\v2\models\GiftCertificateQuery;

require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();


function getGiftCertificateChunk(GiftCertificateApi $gift_certificate_api, int $offset, int $limit): array
{
    $expansion = "ledger";
    $query = new GiftCertificateQuery();  // leave this empty to retrieve all records.
    $api_response = $gift_certificate_api->getGiftCertificatesByQuery($query, $limit, $offset, null, null, $expansion);
    if($api_response->getGiftCertificates() != null){
        return $api_response->getGiftCertificates();
    }
    return [];
}

$gift_certificates = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

while( $more_records_to_fetch ){

    echo "executing iteration " . $iteration . '<br>';
    $chunk_of_certificates = getGiftCertificateChunk($gift_certificate_api, $offset, $limit);
    $gift_certificates = array_merge($gift_certificates, $chunk_of_certificates);
    $offset = $offset + $limit;
    $more_records_to_fetch = count($chunk_of_certificates) == $limit;
    $iteration++;

}

echo '<html lang="en"><body><pre>';
var_dump($gift_certificates);
echo '</pre></body></html>';

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
require_once '../vendor/autoload.php';
require_once '../samples.php';

$gift_certificate_api = Samples::getGiftCertificateApi();

$gift_certificate_oid = 676713;

// by_oid does not take an expansion variable.  it will return the entire object by default.
$api_response = $gift_certificate_api->getGiftCertificateByOid($gift_certificate_oid);
$gift_certificate = $api_response->getGiftCertificate();

$gift_certificate->setEmail("perry@ultracart.com");
$api_response = $gift_certificate_api->updateGiftCertificate($gift_certificate_oid, $gift_certificate);

echo '<html lang="en"><body><pre>';
var_dump($api_response);
var_dump($api_response->getGiftCertificate());
echo '</pre></body></html>';


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
