# ultracart\v2\CustomerApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomerStoreCredit()**](CustomerApi.md#addCustomerStoreCredit) | **POST** /customer/customers/{customer_profile_oid}/store_credit | Adds store credit to a customer
[**adjustInternalCertificate()**](CustomerApi.md#adjustInternalCertificate) | **POST** /customer/customers/{customer_profile_oid}/adjust_cashback_balance | Updates the cashback balance for a customer by updating the internal gift certificate used, creating the gift certificate if needed.
[**deleteCustomer()**](CustomerApi.md#deleteCustomer) | **DELETE** /customer/customers/{customer_profile_oid} | Delete a customer
[**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /customer/customers/{customer_profile_oid} | Retrieve a customer
[**getCustomerByEmail()**](CustomerApi.md#getCustomerByEmail) | **GET** /customer/customers/by_email/{email} | Retrieve a customer by Email
[**getCustomerEditorValues()**](CustomerApi.md#getCustomerEditorValues) | **GET** /customer/editor_values | Retrieve values needed for a customer profile editor
[**getCustomerEmailLists()**](CustomerApi.md#getCustomerEmailLists) | **GET** /customer/email_lists | Retrieve all email lists across all storefronts
[**getCustomerStoreCredit()**](CustomerApi.md#getCustomerStoreCredit) | **GET** /customer/customers/{customer_profile_oid}/store_credit | Retrieve the customer store credit accumulated through loyalty programs
[**getCustomers()**](CustomerApi.md#getCustomers) | **GET** /customer/customers | Retrieve customers
[**getCustomersByQuery()**](CustomerApi.md#getCustomersByQuery) | **POST** /customer/customers/query | Retrieve customers by query
[**getCustomersForDataTables()**](CustomerApi.md#getCustomersForDataTables) | **POST** /customer/customers/dataTables | Retrieve customers for DataTables plugin
[**getEmailVerificationToken()**](CustomerApi.md#getEmailVerificationToken) | **POST** /customer/customers/email_verify/get_token | Create a token that can be used to verify a customer email address
[**insertCustomer()**](CustomerApi.md#insertCustomer) | **POST** /customer/customers | Insert a customer
[**searchCustomerProfileValues()**](CustomerApi.md#searchCustomerProfileValues) | **POST** /customer/search | Searches for all matching values (using POST)
[**updateCustomer()**](CustomerApi.md#updateCustomer) | **PUT** /customer/customers/{customer_profile_oid} | Update a customer
[**updateCustomerEmailLists()**](CustomerApi.md#updateCustomerEmailLists) | **POST** /customer/customers/{customer_profile_oid}/email_lists | Update email list subscriptions for a customer
[**validateEmailVerificationToken()**](CustomerApi.md#validateEmailVerificationToken) | **POST** /customer/customers/email_verify/validate_token | Validate a token that can be used to verify a customer email address


## `addCustomerStoreCredit()`

```php
addCustomerStoreCredit($customer_profile_oid, $store_credit_request): \ultracart\v2\models\BaseResponse
```

Adds store credit to a customer

Adds store credit to a customer

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer oid to credit.
$store_credit_request = new \ultracart\v2\models\CustomerStoreCreditAddRequest(); // \ultracart\v2\models\CustomerStoreCreditAddRequest | Store credit to add

try {
    $result = $apiInstance->addCustomerStoreCredit($customer_profile_oid, $store_credit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->addCustomerStoreCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid to credit. |
 **store_credit_request** | [**\ultracart\v2\models\CustomerStoreCreditAddRequest**](../Model/CustomerStoreCreditAddRequest.md)| Store credit to add |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustInternalCertificate()`

```php
adjustInternalCertificate($customer_profile_oid, $adjust_internal_certificate_request): \ultracart\v2\models\AdjustInternalCertificateResponse
```

Updates the cashback balance for a customer by updating the internal gift certificate used, creating the gift certificate if needed.

Updates the cashback balance for a customer by updating the internal gift certificate used, creating the gift certificate if needed.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer profile oid
$adjust_internal_certificate_request = new \ultracart\v2\models\AdjustInternalCertificateRequest(); // \ultracart\v2\models\AdjustInternalCertificateRequest | adjustInternalCertificateRequest

try {
    $result = $apiInstance->adjustInternalCertificate($customer_profile_oid, $adjust_internal_certificate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->adjustInternalCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer profile oid |
 **adjust_internal_certificate_request** | [**\ultracart\v2\models\AdjustInternalCertificateRequest**](../Model/AdjustInternalCertificateRequest.md)| adjustInternalCertificateRequest |

### Return type

[**\ultracart\v2\models\AdjustInternalCertificateResponse**](../Model/AdjustInternalCertificateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($customer_profile_oid)
```

Delete a customer

Delete a customer on the UltraCart account.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer_profile_oid to delete.

try {
    $apiInstance->deleteCustomer($customer_profile_oid);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer_profile_oid to delete. |

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

## `getCustomer()`

```php
getCustomer($customer_profile_oid, $_expand): \ultracart\v2\models\CustomerResponse
```

Retrieve a customer

Retrieves a single customer using the specified customer profile oid.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer oid to retrieve.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCustomer($customer_profile_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerByEmail()`

```php
getCustomerByEmail($email, $_expand): \ultracart\v2\models\CustomerResponse
```

Retrieve a customer by Email

Retrieves a single customer using the specified customer email address.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | The email address of the customer to retrieve.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCustomerByEmail($email, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| The email address of the customer to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerEditorValues()`

```php
getCustomerEditorValues(): \ultracart\v2\models\CustomerEditorValues
```

Retrieve values needed for a customer profile editor

Retrieve values needed for a customer profile editor.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomerEditorValues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerEditorValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomerEditorValues**](../Model/CustomerEditorValues.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerEmailLists()`

```php
getCustomerEmailLists(): \ultracart\v2\models\EmailListsResponse
```

Retrieve all email lists across all storefronts

Retrieve all email lists across all storefronts

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomerEmailLists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerEmailLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\EmailListsResponse**](../Model/EmailListsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerStoreCredit()`

```php
getCustomerStoreCredit($customer_profile_oid): \ultracart\v2\models\CustomerStoreCreditResponse
```

Retrieve the customer store credit accumulated through loyalty programs

Retrieve the customer store credit accumulated through loyalty programs

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer oid to retrieve.

try {
    $result = $apiInstance->getCustomerStoreCredit($customer_profile_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerStoreCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid to retrieve. |

### Return type

[**\ultracart\v2\models\CustomerStoreCreditResponse**](../Model/CustomerStoreCreditResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomers()`

```php
getCustomers($email, $qb_class, $quickbooks_code, $last_modified_dts_start, $last_modified_dts_end, $signup_dts_start, $signup_dts_end, $billing_first_name, $billing_last_name, $billing_company, $billing_city, $billing_state, $billing_postal_code, $billing_country_code, $billing_day_phone, $billing_evening_phone, $shipping_first_name, $shipping_last_name, $shipping_company, $shipping_city, $shipping_state, $shipping_postal_code, $shipping_country_code, $shipping_day_phone, $shipping_evening_phone, $pricing_tier_oid, $pricing_tier_name, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\CustomersResponse
```

Retrieve customers

Retrieves customers from the account.  If no parameters are specified, all customers will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email
$qb_class = 'qb_class_example'; // string | Quickbooks class
$quickbooks_code = 'quickbooks_code_example'; // string | Quickbooks code
$last_modified_dts_start = 'last_modified_dts_start_example'; // string | Last modified date start
$last_modified_dts_end = 'last_modified_dts_end_example'; // string | Last modified date end
$signup_dts_start = 'signup_dts_start_example'; // string | Signup date start
$signup_dts_end = 'signup_dts_end_example'; // string | Signup date end
$billing_first_name = 'billing_first_name_example'; // string | Billing first name
$billing_last_name = 'billing_last_name_example'; // string | Billing last name
$billing_company = 'billing_company_example'; // string | Billing company
$billing_city = 'billing_city_example'; // string | Billing city
$billing_state = 'billing_state_example'; // string | Billing state
$billing_postal_code = 'billing_postal_code_example'; // string | Billing postal code
$billing_country_code = 'billing_country_code_example'; // string | Billing country code
$billing_day_phone = 'billing_day_phone_example'; // string | Billing day phone
$billing_evening_phone = 'billing_evening_phone_example'; // string | Billing evening phone
$shipping_first_name = 'shipping_first_name_example'; // string | Shipping first name
$shipping_last_name = 'shipping_last_name_example'; // string | Shipping last name
$shipping_company = 'shipping_company_example'; // string | Shipping company
$shipping_city = 'shipping_city_example'; // string | Shipping city
$shipping_state = 'shipping_state_example'; // string | Shipping state
$shipping_postal_code = 'shipping_postal_code_example'; // string | Shipping postal code
$shipping_country_code = 'shipping_country_code_example'; // string | Shipping country code
$shipping_day_phone = 'shipping_day_phone_example'; // string | Shipping day phone
$shipping_evening_phone = 'shipping_evening_phone_example'; // string | Shipping evening phone
$pricing_tier_oid = 56; // int | Pricing tier oid
$pricing_tier_name = 'pricing_tier_name_example'; // string | Pricing tier name
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = '_since_example'; // string | Fetch customers that have been created/modified since this date/time.
$_sort = '_sort_example'; // string | The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCustomers($email, $qb_class, $quickbooks_code, $last_modified_dts_start, $last_modified_dts_end, $signup_dts_start, $signup_dts_end, $billing_first_name, $billing_last_name, $billing_company, $billing_city, $billing_state, $billing_postal_code, $billing_country_code, $billing_day_phone, $billing_evening_phone, $shipping_first_name, $shipping_last_name, $shipping_company, $shipping_city, $shipping_state, $shipping_postal_code, $shipping_country_code, $shipping_day_phone, $shipping_evening_phone, $pricing_tier_oid, $pricing_tier_name, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email | [optional]
 **qb_class** | **string**| Quickbooks class | [optional]
 **quickbooks_code** | **string**| Quickbooks code | [optional]
 **last_modified_dts_start** | **string**| Last modified date start | [optional]
 **last_modified_dts_end** | **string**| Last modified date end | [optional]
 **signup_dts_start** | **string**| Signup date start | [optional]
 **signup_dts_end** | **string**| Signup date end | [optional]
 **billing_first_name** | **string**| Billing first name | [optional]
 **billing_last_name** | **string**| Billing last name | [optional]
 **billing_company** | **string**| Billing company | [optional]
 **billing_city** | **string**| Billing city | [optional]
 **billing_state** | **string**| Billing state | [optional]
 **billing_postal_code** | **string**| Billing postal code | [optional]
 **billing_country_code** | **string**| Billing country code | [optional]
 **billing_day_phone** | **string**| Billing day phone | [optional]
 **billing_evening_phone** | **string**| Billing evening phone | [optional]
 **shipping_first_name** | **string**| Shipping first name | [optional]
 **shipping_last_name** | **string**| Shipping last name | [optional]
 **shipping_company** | **string**| Shipping company | [optional]
 **shipping_city** | **string**| Shipping city | [optional]
 **shipping_state** | **string**| Shipping state | [optional]
 **shipping_postal_code** | **string**| Shipping postal code | [optional]
 **shipping_country_code** | **string**| Shipping country code | [optional]
 **shipping_day_phone** | **string**| Shipping day phone | [optional]
 **shipping_evening_phone** | **string**| Shipping evening phone | [optional]
 **pricing_tier_oid** | **int**| Pricing tier oid | [optional]
 **pricing_tier_name** | **string**| Pricing tier name | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch customers that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomersResponse**](../Model/CustomersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomersByQuery()`

```php
getCustomersByQuery($customer_query, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\CustomersResponse
```

Retrieve customers by query

Retrieves customers from the account.  If no parameters are specified, all customers will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_query = new \ultracart\v2\models\CustomerQuery(); // \ultracart\v2\models\CustomerQuery | Customer query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_since = '_since_example'; // string | Fetch customers that have been created/modified since this date/time.
$_sort = '_sort_example'; // string | The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCustomersByQuery($customer_query, $_limit, $_offset, $_since, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_query** | [**\ultracart\v2\models\CustomerQuery**](../Model/CustomerQuery.md)| Customer query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch customers that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the customers.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomersResponse**](../Model/CustomersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomersForDataTables()`

```php
getCustomersForDataTables($_expand): \ultracart\v2\models\DataTablesServerSideResponse
```

Retrieve customers for DataTables plugin

Retrieves customers from the account.  If no searches are specified, all customers will be returned.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCustomersForDataTables($_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomersForDataTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\DataTablesServerSideResponse**](../Model/DataTablesServerSideResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailVerificationToken()`

```php
getEmailVerificationToken($token_request): \ultracart\v2\models\EmailVerifyTokenResponse
```

Create a token that can be used to verify a customer email address

Create a token that can be used to verify a customer email address.  The implementation of how a customer interacts with this token is left to the merchant.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = new \ultracart\v2\models\EmailVerifyTokenRequest(); // \ultracart\v2\models\EmailVerifyTokenRequest | Token request

try {
    $result = $apiInstance->getEmailVerificationToken($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getEmailVerificationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\ultracart\v2\models\EmailVerifyTokenRequest**](../Model/EmailVerifyTokenRequest.md)| Token request |

### Return type

[**\ultracart\v2\models\EmailVerifyTokenResponse**](../Model/EmailVerifyTokenResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertCustomer()`

```php
insertCustomer($customer, $_expand): \ultracart\v2\models\CustomerResponse
```

Insert a customer

Insert a customer on the UltraCart account.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = new \ultracart\v2\models\Customer(); // \ultracart\v2\models\Customer | Customer to insert
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->insertCustomer($customer, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->insertCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | [**\ultracart\v2\models\Customer**](../Model/Customer.md)| Customer to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomerProfileValues()`

```php
searchCustomerProfileValues($lookup_request): \ultracart\v2\models\LookupResponse
```

Searches for all matching values (using POST)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ultraCartBrowserApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');

// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lookup_request = new \ultracart\v2\models\LookupRequest(); // \ultracart\v2\models\LookupRequest | LookupRequest

try {
    $result = $apiInstance->searchCustomerProfileValues($lookup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->searchCustomerProfileValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookup_request** | [**\ultracart\v2\models\LookupRequest**](../Model/LookupRequest.md)| LookupRequest |

### Return type

[**\ultracart\v2\models\LookupResponse**](../Model/LookupResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($customer_profile_oid, $customer, $_expand): \ultracart\v2\models\CustomerResponse
```

Update a customer

Update a customer on the UltraCart account.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer_profile_oid to update.
$customer = new \ultracart\v2\models\Customer(); // \ultracart\v2\models\Customer | Customer to update
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->updateCustomer($customer_profile_oid, $customer, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer_profile_oid to update. |
 **customer** | [**\ultracart\v2\models\Customer**](../Model/Customer.md)| Customer to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerEmailLists()`

```php
updateCustomerEmailLists($customer_profile_oid, $list_changes): \ultracart\v2\models\CustomerEmailListChanges
```

Update email list subscriptions for a customer

Update email list subscriptions for a customer

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_profile_oid = 56; // int | The customer profile oid
$list_changes = new \ultracart\v2\models\CustomerEmailListChanges(); // \ultracart\v2\models\CustomerEmailListChanges | List changes

try {
    $result = $apiInstance->updateCustomerEmailLists($customer_profile_oid, $list_changes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomerEmailLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer profile oid |
 **list_changes** | [**\ultracart\v2\models\CustomerEmailListChanges**](../Model/CustomerEmailListChanges.md)| List changes |

### Return type

[**\ultracart\v2\models\CustomerEmailListChanges**](../Model/CustomerEmailListChanges.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateEmailVerificationToken()`

```php
validateEmailVerificationToken($validation_request): \ultracart\v2\models\EmailVerifyTokenValidateResponse
```

Validate a token that can be used to verify a customer email address

Validate a token that can be used to verify a customer email address.  The implementation of how a customer interacts with this token is left to the merchant.

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


$apiInstance = new ultracart\v2\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_request = new \ultracart\v2\models\EmailVerifyTokenValidateRequest(); // \ultracart\v2\models\EmailVerifyTokenValidateRequest | Token validation request

try {
    $result = $apiInstance->validateEmailVerificationToken($validation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->validateEmailVerificationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validation_request** | [**\ultracart\v2\models\EmailVerifyTokenValidateRequest**](../Model/EmailVerifyTokenValidateRequest.md)| Token validation request |

### Return type

[**\ultracart\v2\models\EmailVerifyTokenValidateResponse**](../Model/EmailVerifyTokenValidateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
