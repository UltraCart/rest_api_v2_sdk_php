# ultracart\v2\CustomerApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomerStoreCredit()**](CustomerApi.md#addCustomerStoreCredit) | **POST** /customer/customers/{customer_profile_oid}/store_credit | Adds store credit to a customer
[**adjustInternalCertificate()**](CustomerApi.md#adjustInternalCertificate) | **POST** /customer/customers/{customer_profile_oid}/adjust_cashback_balance | Updates the cashback balance for a customer by updating the internal gift certificate used, creating the gift certificate if needed.
[**deleteCustomer()**](CustomerApi.md#deleteCustomer) | **DELETE** /customer/customers/{customer_profile_oid} | Delete a customer
[**deleteWishListItem()**](CustomerApi.md#deleteWishListItem) | **DELETE** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Delete a customer wishlist item
[**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /customer/customers/{customer_profile_oid} | Retrieve a customer
[**getCustomerByEmail()**](CustomerApi.md#getCustomerByEmail) | **GET** /customer/customers/by_email/{email} | Retrieve a customer by Email
[**getCustomerEditorValues()**](CustomerApi.md#getCustomerEditorValues) | **GET** /customer/editor_values | Retrieve values needed for a customer profile editor
[**getCustomerEmailLists()**](CustomerApi.md#getCustomerEmailLists) | **GET** /customer/email_lists | Retrieve all email lists across all storefronts
[**getCustomerStoreCredit()**](CustomerApi.md#getCustomerStoreCredit) | **GET** /customer/customers/{customer_profile_oid}/store_credit | Retrieve the customer store credit accumulated through loyalty programs
[**getCustomerWishList()**](CustomerApi.md#getCustomerWishList) | **GET** /customer/customers/{customer_profile_oid}/wishlist | Retrieve wishlist items for customer
[**getCustomerWishListItem()**](CustomerApi.md#getCustomerWishListItem) | **GET** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Retrieve wishlist item for customer
[**getCustomers()**](CustomerApi.md#getCustomers) | **GET** /customer/customers | Retrieve customers
[**getCustomersByQuery()**](CustomerApi.md#getCustomersByQuery) | **POST** /customer/customers/query | Retrieve customers by query
[**getCustomersForDataTables()**](CustomerApi.md#getCustomersForDataTables) | **POST** /customer/customers/dataTables | Retrieve customers for DataTables plugin
[**getEmailVerificationToken()**](CustomerApi.md#getEmailVerificationToken) | **POST** /customer/customers/email_verify/get_token | Create a token that can be used to verify a customer email address
[**getMagicLink()**](CustomerApi.md#getMagicLink) | **PUT** /customer/customers/{customer_profile_oid}/magic_link/{storefront_host_name} | getMagicLink
[**insertCustomer()**](CustomerApi.md#insertCustomer) | **POST** /customer/customers | Insert a customer
[**insertWishListItem()**](CustomerApi.md#insertWishListItem) | **POST** /customer/customers/{customer_profile_oid}/wishlist | Insert a customer wishlist item
[**mergeCustomer()**](CustomerApi.md#mergeCustomer) | **PUT** /customer/customers/{customer_profile_oid}/merge | Merge customer into this customer
[**searchCustomerProfileValues()**](CustomerApi.md#searchCustomerProfileValues) | **POST** /customer/search | Searches for all matching values (using POST)
[**searchCustomers()**](CustomerApi.md#searchCustomers) | **GET** /customer/customers/search | Search for customers
[**updateCustomer()**](CustomerApi.md#updateCustomer) | **PUT** /customer/customers/{customer_profile_oid} | Update a customer
[**updateCustomerEmailLists()**](CustomerApi.md#updateCustomerEmailLists) | **POST** /customer/customers/{customer_profile_oid}/email_lists | Update email list subscriptions for a customer
[**updateWishListItem()**](CustomerApi.md#updateWishListItem) | **PUT** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Update a customer wishlist item
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

ini_set('display_errors', 1);

/*
    Adds store credit to a customer's account.

    This method requires a customer profile oid.  This is a unique number used by UltraCart to identify a customer.
    If you do not know a customer's oid, call getCustomerByEmail() to retrieve the customer and their oid.

    Possible Errors:
    Missing store credit -> "store_credit_request.amount is missing and is required."
    Zero or negative store credit -> "store_credit_request.amount must be a positive amount."

 */


use ultracart\v2\api\CustomerApi;
use ultracart\v2\models\CustomerStoreCreditAddRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$customer_api = CustomerApi::usingApiKey(Constants::API_KEY);


$email = "test@ultracart.com";
$customer = $customer_api->getCustomerByEmail($email)->getCustomer();
$customer_oid = $customer->getCustomerProfileOid();

$storeCreditRequest = new CustomerStoreCreditAddRequest();
$storeCreditRequest->setAmount(20.00);
$storeCreditRequest->setDescription("Customer is super cool and I wanted to give them store credit.");
$storeCreditRequest->setExpirationDays(365); // or leave null for no expiration
$storeCreditRequest->setVestingDays(45); // customer has to wait 45 days to use it.

$api_response = $customer_api->addCustomerStoreCredit($customer_oid, $storeCreditRequest);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

echo '<html lang="en"><body><pre>';
var_dump($api_response->getSuccess());
echo '</pre></body></html>';
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

ini_set('display_errors', 1);

/*
    Adjusts the cashback balance of a customer.  This method's name is adjustInternalCertificate, which
    is a poor choice of naming, but results from an underlying implementation of using an internal gift certificate
    to track cashback balance.  Sorry for the confusion.

    This method requires a customer profile oid.  This is a unique number used by UltraCart to identify a customer.
    If you do not know a customer's oid, call getCustomerByEmail() to retrieve the customer and their oid.

    Possible Errors:
    Missing adjustment amount -> "adjust_internal_certificate_request.adjustment_amount is required and was missing"

 */


use ultracart\v2\api\CustomerApi;
use ultracart\v2\models\AdjustInternalCertificateRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$customer_api = CustomerApi::usingApiKey(Constants::API_KEY);


$email = "test@ultracart.com";
$customer = $customer_api->getCustomerByEmail($email)->getCustomer();
$customer_oid = $customer->getCustomerProfileOid();

$adjustRequest = new AdjustInternalCertificateRequest();
$adjustRequest->setDescription("Adjusting customer cashback balance because they called and complained about product.");
$adjustRequest->setExpirationDays(365); // expires in 365 days
$adjustRequest->setVestingDays(45); // customer has to wait 45 days to use it.
$adjustRequest->setAdjustmentAmount(59); // add 59 to their balance.
$adjustRequest->setOrderId('DEMO-12345'); // or leave null.  this ties the adjustment to a particular order.
$adjustRequest->setEntryDts(null); // use current time.

$api_response = $customer_api->adjustInternalCertificate($customer_oid, $adjustRequest);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

echo '<html lang="en"><body><pre>';
echo 'Success: ' . $api_response->getSuccess() . "<br/>";
echo 'Adjustment Amount: ' . $api_response->getAdjustmentAmount() . '<br/>';
echo 'Balance Amount: ' . $api_response->getBalanceAmount() . '<br/>';

var_dump($api_response);
echo '</pre></body></html>';
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

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

try {

    $customer_oid = insertSampleCustomer();
    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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

## `deleteWishListItem()`

```php
deleteWishListItem($customer_profile_oid, $customer_wishlist_item_oid)
```

Delete a customer wishlist item

Delete a customer wishlist item


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerWishListItem;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details
require_once '../item/item_functions.php'; // <-- needed to create sample items to wish for

/*
    The wishlist methods allow management of a customer's wishlist.
    This includes:
        deleteWishListItem
        getCustomerWishList
        getCustomerWishListItem
        insertWishListItem
        updateWishListItem
    These methods provide a standard CRUD interface.  The example below uses all of them.

    You'll need merchant_item_oids to insert wishlist items.  If you don't know the oids,
    call ItemApi.getItemByMerchantItemId() to retrieve the item, then get $item->getMerchantItemOid()

    Note: Priority of wishlist item, 3 being low priority and 5 is high priority.

 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a few items first.
    $first_item_oid = insertSampleItemAndGetOid();
    $second_item_oid = insertSampleItemAndGetOid();

    // create a customer
    $customer_oid = insertSampleCustomer();

    // TODO: If you don't know the customer oid, use getCustomerByEmail() to retrieve the customer.

    // add some wish list items.
    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($first_item_oid);
    $addWishItem->setComments("I really want this for my birthday");
    $addWishItem->setPriority(3); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $firstCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($second_item_oid);
    $addWishItem->setComments("Christmas Idea!");
    $addWishItem->setPriority(5); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $secondCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    // retrieve one wishlist item again
    $firstCreatedWishItemCopy = $customer_api->getCustomerWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid())->getWishlistItem();
    // retrieve all wishlist items
    $allWishListItems = $customer_api->getCustomerWishList($customer_oid)->getWishlistItems();

    // update an item.
    $secondCreatedWishItem->setPriority(4);
    $updatedSecondWishItem = $customer_api->updateWishListItem($customer_oid, $secondCreatedWishItem->getCustomerWishlistItemOid(), $secondCreatedWishItem);

    // delete a wish list item
    $customer_api->deleteWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid());

    // Clean up
    deleteSampleCustomer($customer_oid);
    deleteSampleItemByOid($first_item_oid);
    deleteSampleItemByOid($second_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid for this wishlist. |
 **customer_wishlist_item_oid** | **int**| The wishlist oid for this wishlist item to delete. |

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
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

// Of the two getCustomer methods, you'll probably always use getCustomerByEmail instead of this one.
// Most customer logic revolves around the email, not the customer oid.   The latter is only meaningful as a primary
// key in the UltraCart databases.  But here is an example of using getCustomer().

try {

    $email = createRandomEmail();
    $customer_oid = insertSampleCustomer($email);
    $customer_api = Samples::getCustomerApi();

    // the _expand variable is set to return just the address fields.
    // see customer_functions.php for a list of expansions, or consult the source: https://www.ultracart.com/api/
    $api_response = $customer_api->getCustomer($customer_oid, "billing,shipping");
    $customer = $api_response->getCustomer(); // assuming this succeeded

    var_dump($customer);

    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

// Of the two getCustomer methods, you'll probably always use this one over getCustomer.
// Most customer logic revolves around the email, not the customer oid.   The latter is only meaningful as a primary
// key in the UltraCart databases.  But our sample functions return back the oid, so we'll ignore that and just
// use the email that we create.

try {

    $email = createRandomEmail();
    $customer_oid = insertSampleCustomer($email);
    $customer_api = Samples::getCustomerApi();

    // the _expand variable is set to return just the address fields.
    // see customer_functions.php for a list of expansions, or consult the source: https://www.ultracart.com/api/
    $api_response = $customer_api->getCustomerByEmail($email, "billing,shipping");
    $customer = $api_response->getCustomer(); // assuming this succeeded

    var_dump($customer);

    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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
// This is an internal method used by our Customer management screen.  It returns back all the static data needed
// for our dropdown lists, such as lists of state and countries.  You can call it if you like, but the data won't be
// of much use.
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
// This is an internal method used by our Email workflow engines.  It returns back all the email lists a customer
// is currently subscribed to.  It's geared towards our UI needs, so the data returned may appear cryptic.
//  We're not including a sample for it because we don't envision it being valuable to a merchant.
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

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerStoreCreditAddRequest;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

/*
    getCustomerStoreCredit returns back the store credit for a customer, which includes:
    total - lifetime credit
    available - currently available store credit
    vesting - amount of store credit vesting
    expiring - amount of store credit expiring within 30 days
    pastLedgers - transaction history
    futureLedgers - future transactions including expiring entries
 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a customer
    $customer_oid = insertSampleCustomer();

    // add some store credit.
    $addRequest = new CustomerStoreCreditAddRequest();
    $addRequest->setDescription('First credit add');
    $addRequest->setVestingDays(10);
    $addRequest->setExpirationDays(20); // that's not a lot of time!
    $addRequest->setAmount(20);
    $customer_api->addCustomerStoreCredit($customer_oid, $addRequest);

    // add more store credit.
    $addRequest = new CustomerStoreCreditAddRequest();
    $addRequest->setDescription('Second credit add');
    $addRequest->setVestingDays(0); // immediately available.
    $addRequest->setExpirationDays(90);
    $addRequest->setAmount(40);
    $customer_api->addCustomerStoreCredit($customer_oid, $addRequest);


    $api_response = $customer_api->getCustomerStoreCredit($customer_oid);
    $storeCredit = $api_response->getCustomerStoreCredit();

    var_dump($storeCredit); // <-- There's a lot of information inside this object.

    // clean up this sample.
    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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

## `getCustomerWishList()`

```php
getCustomerWishList($customer_profile_oid): \ultracart\v2\models\CustomerWishListItemsResponse
```

Retrieve wishlist items for customer

Retrieve wishlist items for customer.


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerWishListItem;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details
require_once '../item/item_functions.php'; // <-- needed to create sample items to wish for

/*
    The wishlist methods allow management of a customer's wishlist.
    This includes:
        deleteWishListItem
        getCustomerWishList
        getCustomerWishListItem
        insertWishListItem
        updateWishListItem
    These methods provide a standard CRUD interface.  The example below uses all of them.

    You'll need merchant_item_oids to insert wishlist items.  If you don't know the oids,
    call ItemApi.getItemByMerchantItemId() to retrieve the item, then get $item->getMerchantItemOid()

    Note: Priority of wishlist item, 3 being low priority and 5 is high priority.

 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a few items first.
    $first_item_oid = insertSampleItemAndGetOid();
    $second_item_oid = insertSampleItemAndGetOid();

    // create a customer
    $customer_oid = insertSampleCustomer();

    // TODO: If you don't know the customer oid, use getCustomerByEmail() to retrieve the customer.

    // add some wish list items.
    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($first_item_oid);
    $addWishItem->setComments("I really want this for my birthday");
    $addWishItem->setPriority(3); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $firstCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($second_item_oid);
    $addWishItem->setComments("Christmas Idea!");
    $addWishItem->setPriority(5); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $secondCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    // retrieve one wishlist item again
    $firstCreatedWishItemCopy = $customer_api->getCustomerWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid())->getWishlistItem();
    // retrieve all wishlist items
    $allWishListItems = $customer_api->getCustomerWishList($customer_oid)->getWishlistItems();

    // update an item.
    $secondCreatedWishItem->setPriority(4);
    $updatedSecondWishItem = $customer_api->updateWishListItem($customer_oid, $secondCreatedWishItem->getCustomerWishlistItemOid(), $secondCreatedWishItem);

    // delete a wish list item
    $customer_api->deleteWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid());

    // Clean up
    deleteSampleCustomer($customer_oid);
    deleteSampleItemByOid($first_item_oid);
    deleteSampleItemByOid($second_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid for this wishlist. |

### Return type

[**\ultracart\v2\models\CustomerWishListItemsResponse**](../Model/CustomerWishListItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerWishListItem()`

```php
getCustomerWishListItem($customer_profile_oid, $customer_wishlist_item_oid): \ultracart\v2\models\CustomerWishListItemResponse
```

Retrieve wishlist item for customer

Retrieve wishlist item for customer.


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerWishListItem;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details
require_once '../item/item_functions.php'; // <-- needed to create sample items to wish for

/*
    The wishlist methods allow management of a customer's wishlist.
    This includes:
        deleteWishListItem
        getCustomerWishList
        getCustomerWishListItem
        insertWishListItem
        updateWishListItem
    These methods provide a standard CRUD interface.  The example below uses all of them.

    You'll need merchant_item_oids to insert wishlist items.  If you don't know the oids,
    call ItemApi.getItemByMerchantItemId() to retrieve the item, then get $item->getMerchantItemOid()

    Note: Priority of wishlist item, 3 being low priority and 5 is high priority.

 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a few items first.
    $first_item_oid = insertSampleItemAndGetOid();
    $second_item_oid = insertSampleItemAndGetOid();

    // create a customer
    $customer_oid = insertSampleCustomer();

    // TODO: If you don't know the customer oid, use getCustomerByEmail() to retrieve the customer.

    // add some wish list items.
    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($first_item_oid);
    $addWishItem->setComments("I really want this for my birthday");
    $addWishItem->setPriority(3); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $firstCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($second_item_oid);
    $addWishItem->setComments("Christmas Idea!");
    $addWishItem->setPriority(5); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $secondCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    // retrieve one wishlist item again
    $firstCreatedWishItemCopy = $customer_api->getCustomerWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid())->getWishlistItem();
    // retrieve all wishlist items
    $allWishListItems = $customer_api->getCustomerWishList($customer_oid)->getWishlistItems();

    // update an item.
    $secondCreatedWishItem->setPriority(4);
    $updatedSecondWishItem = $customer_api->updateWishListItem($customer_oid, $secondCreatedWishItem->getCustomerWishlistItemOid(), $secondCreatedWishItem);

    // delete a wish list item
    $customer_api->deleteWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid());

    // Clean up
    deleteSampleCustomer($customer_oid);
    deleteSampleItemByOid($first_item_oid);
    deleteSampleItemByOid($second_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid for this wishlist. |
 **customer_wishlist_item_oid** | **int**| The wishlist oid for this wishlist item. |

### Return type

[**\ultracart\v2\models\CustomerWishListItemResponse**](../Model/CustomerWishListItemResponse.md)

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

set_time_limit(3000); // pulling all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve customers.  It uses the pagination logic necessary to query all customers.
 * This method was the first getCustomers and has parameters for all the search terms.  It's an ogre.  Using
 * getCustomersByQuery is much easier to use.
 */

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$customer_api = Samples::getCustomerApi();


/**
 * @throws ApiException
 */
function getCustomerChunk(CustomerApi $customer_api, int $offset, int $limit): array
{

    // The real devil in the getCustomers calls is the expansion, making sure you return everything you need without
    // returning everything since these objects are extremely large.  The customer object can be truly large with
    // all the order history.  These are the possible expansion values.
    /*
        attachments     billing     cards           cc_emails       loyalty     orders_summary          pricing_tiers
        privacy         properties  quotes_summary  reviewer        shipping    software_entitlements   tags
        tax_codes     
     */
    $_expand = "shipping,billing"; // just the address fields.  contact us if you're unsure
    
    // TODO: Seriously, use getCustomersByQuery -- it's so much better than this old method.
    $email = null; 
    $qb_class = null; 
    $quickbooks_code = null; 
    $last_modified_dts_start = null; 
    $last_modified_dts_end = null; 
    $signup_dts_start = null; 
    $signup_dts_end = null; 
    $billing_first_name = null; 
    $billing_last_name = null; 
    $billing_company = null; 
    $billing_city = null; 
    $billing_state = null; 
    $billing_postal_code = null; 
    $billing_country_code = null; 
    $billing_day_phone = null; 
    $billing_evening_phone = null; 
    $shipping_first_name = null; 
    $shipping_last_name = null; 
    $shipping_company = null; 
    $shipping_city = null; 
    $shipping_state = null; 
    $shipping_postal_code = null; 
    $shipping_country_code = null; 
    $shipping_day_phone = null; 
    $shipping_evening_phone = null; 
    $pricing_tier_oid = null; 
    $pricing_tier_name = null; 
    $_limit = $limit;
    $_offset = $offset;
    $_since = null; 
    $_sort = null;
    
    $api_response = $customer_api->getCustomers($email, $qb_class, $quickbooks_code, $last_modified_dts_start, $last_modified_dts_end, $signup_dts_start, $signup_dts_end, $billing_first_name, $billing_last_name, $billing_company, $billing_city, $billing_state, $billing_postal_code, $billing_country_code, $billing_day_phone, $billing_evening_phone, $shipping_first_name, $shipping_last_name, $shipping_company, $shipping_city, $shipping_state, $shipping_postal_code, $shipping_country_code, $shipping_day_phone, $shipping_evening_phone, $pricing_tier_oid, $pricing_tier_name, $_limit, $_offset, $_since, $_sort, $_expand);

    if ($api_response->getCustomers() != null) {
        return $api_response->getCustomers();
    }
    return [];
}

$customers = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_customers = getCustomerChunk($customer_api, $offset, $limit);
        $orders = array_merge($customers, $chunk_of_customers);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_customers) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($customers);
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

set_time_limit(3000); // pulling all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve customers.  It uses the pagination logic necessary to query all customers.
 */

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerQuery;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$customer_api = Samples::getCustomerApi();


/**
 * @throws ApiException
 */
function getCustomerChunk(CustomerApi $customer_api, int $offset, int $limit): array
{

    // The real devil in the getCustomers calls is the expansion, making sure you return everything you need without
    // returning everything since these objects are extremely large.  The customer object can be truly large with
    // all the order history.  These are the possible expansion values.
    /*
        attachments     billing     cards           cc_emails       loyalty     orders_summary          pricing_tiers
        privacy         properties  quotes_summary  reviewer        shipping    software_entitlements   tags
        tax_codes
     */
    $_expand = "shipping,billing"; // just the address fields.  contact us if you're unsure

    // TODO: This is just showing all the possibilities.  In reality, you'll just assign the filters you need.
    $query = new CustomerQuery();
//    $query->setEmail(null);
//    $query->setQbClass(null);
//    $query->setQuickbooksCode(null);
//    $query->setLastModifiedDtsStart(null);
//    $query->setLastModifiedDtsEnd(null);
//    $query->setSignupDtsStart(null);
//    $query->setSignupDtsEnd(null);
//    $query->setBillingFirstName(null);
//    $query->setBillingLastName(null);
//    $query->setBillingCompany(null);
//    $query->setBillingCity(null);
//    $query->setBillingState(null);
//    $query->setBillingPostalCode(null);
//    $query->setBillingCountryCode(null);
//    $query->setBillingDayPhone(null);
//    $query->setBillingEveningPhone(null);
//    $query->setShippingFirstName(null);
//    $query->setShippingLastName(null);
//    $query->setShippingCompany(null);
//    $query->setShippingCity(null);
//    $query->setShippingState(null);
//    $query->setShippingPostalCode(null);
//    $query->setShippingCountryCode(null);
//    $query->setShippingDayPhone(null);
//    $query->setShippingEveningPhone(null);
//    $query->setPricingTierOid(null);
//    $query->setPricingTierName(null);

    $_since = null;
    $_sort = "email";

    $api_response = $customer_api->getCustomersByQuery($query, $offset, $limit, $_since, $_sort, $_expand);

    if ($api_response->getCustomers() != null) {
        return $api_response->getCustomers();
    }
    return [];
}

$customers = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_customers = getCustomerChunk($customer_api, $offset, $limit);
        $orders = array_merge($customers, $chunk_of_customers);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_customers) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($customers);
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
// This is an internal method used by our Customer management screen.  It won't be of much use to you, so we're
// not including a sample.  getCustomer, getCustomerByEmail, getCustomers and getCustomersByQuery are more useful
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

ini_set('display_errors', 1);

/*
    getEmailVerificationToken and validateEmailVerificationToken are tandem functions that allow a merchant to verify
    a customer's email address. getEmailVerificationToken returns back a token that the merchant can use however
    they wish to present to a customer. Usually this will be emailed to the customer within instructions to enter
    it back into a website.  Once the customer enters the token back into a site (along with their email),
    validateEmailVerificationToken will validate the token.

    Notice that getEmailVerificationToken requires both the email and password.

 */


use ultracart\v2\api\CustomerApi;
use ultracart\v2\models\AdjustInternalCertificateRequest;
use ultracart\v2\models\EmailVerifyTokenRequest;
use ultracart\v2\models\EmailVerifyTokenValidateRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$customer_api = CustomerApi::usingApiKey(Constants::API_KEY);


$email = "test@ultracart.com";
$password = "squirrel";

$tokenRequest = new EmailVerifyTokenRequest();
$tokenRequest->setEmail($email);
$tokenRequest->setPassword($password);

$tokenResponse = $customer_api->getEmailVerificationToken($tokenRequest);
$token = $tokenResponse->getToken();

// TODO - email the token to the customer, have them enter it back into another page...
// TODO - verify the token with the following call

$verifyRequest = new EmailVerifyTokenValidateRequest();
$verifyRequest->setToken($token);
$verifyResponse = $customer_api->validateEmailVerificationToken($verifyRequest);

echo 'Was the correct token provided? ' . $verifyResponse->getSuccess();
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

## `getMagicLink()`

```php
getMagicLink($customer_profile_oid, $storefront_host_name): \ultracart\v2\models\CustomerMagicLinkResponse
```

getMagicLink

Retrieves a magic link to allow a merchant to login as a customer.  This method is a PUT call intentionally.


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

/*
    getMagicLink returns back a url whereby a merchant can log into their website as the customer.
    This may be useful to "see what the customer is seeing" and is the only method to do so since
    the customer's passwords are encrypted.  Note: A merchant may also do this using the UltraCart
    backend site within the Customer Management section.
 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a customer
    $customer_oid = insertSampleCustomer();
    $storefront = "www.website.com";  // required.  many merchants have dozens of storefronts. which one?

    $api_response = $customer_api->getMagicLink($customer_oid, $storefront);
    $url = $api_response->getUrl();


    echo "<html><body><script>window.location.href = " . json_encode($url) . ";</script></body></html>";

    // clean up this sample. - don't do this or the above magic link won't work.  But you'll want to clean up this
    // sample customer manually using the backend.
    // deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer_profile_oid of the customer. |
 **storefront_host_name** | **string**| The storefront to log into. |

### Return type

[**\ultracart\v2\models\CustomerMagicLinkResponse**](../Model/CustomerMagicLinkResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
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

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

try {

    $customer_oid = insertSampleCustomer();
    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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

## `insertWishListItem()`

```php
insertWishListItem($customer_profile_oid, $wishlist_item): \ultracart\v2\models\CustomerWishListItem
```

Insert a customer wishlist item

Insert a customer wishlist item


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerWishListItem;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details
require_once '../item/item_functions.php'; // <-- needed to create sample items to wish for

/*
    The wishlist methods allow management of a customer's wishlist.
    This includes:
        deleteWishListItem
        getCustomerWishList
        getCustomerWishListItem
        insertWishListItem
        updateWishListItem
    These methods provide a standard CRUD interface.  The example below uses all of them.

    You'll need merchant_item_oids to insert wishlist items.  If you don't know the oids,
    call ItemApi.getItemByMerchantItemId() to retrieve the item, then get $item->getMerchantItemOid()

    Note: Priority of wishlist item, 3 being low priority and 5 is high priority.

 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a few items first.
    $first_item_oid = insertSampleItemAndGetOid();
    $second_item_oid = insertSampleItemAndGetOid();

    // create a customer
    $customer_oid = insertSampleCustomer();

    // TODO: If you don't know the customer oid, use getCustomerByEmail() to retrieve the customer.

    // add some wish list items.
    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($first_item_oid);
    $addWishItem->setComments("I really want this for my birthday");
    $addWishItem->setPriority(3); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $firstCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($second_item_oid);
    $addWishItem->setComments("Christmas Idea!");
    $addWishItem->setPriority(5); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $secondCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    // retrieve one wishlist item again
    $firstCreatedWishItemCopy = $customer_api->getCustomerWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid())->getWishlistItem();
    // retrieve all wishlist items
    $allWishListItems = $customer_api->getCustomerWishList($customer_oid)->getWishlistItems();

    // update an item.
    $secondCreatedWishItem->setPriority(4);
    $updatedSecondWishItem = $customer_api->updateWishListItem($customer_oid, $secondCreatedWishItem->getCustomerWishlistItemOid(), $secondCreatedWishItem);

    // delete a wish list item
    $customer_api->deleteWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid());

    // Clean up
    deleteSampleCustomer($customer_oid);
    deleteSampleItemByOid($first_item_oid);
    deleteSampleItemByOid($second_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid for this wishlist. |
 **wishlist_item** | [**\ultracart\v2\models\CustomerWishListItem**](../Model/CustomerWishListItem.md)| Wishlist item to insert |

### Return type

[**\ultracart\v2\models\CustomerWishListItem**](../Model/CustomerWishListItem.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeCustomer()`

```php
mergeCustomer($customer_profile_oid, $customer, $_expand)
```

Merge customer into this customer

Merge customer into this customer.


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerMergeRequest;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

/*
    The merge function was requested by UltraCart merchants that sell software and manage activation keys.  Frequently,
    customers would purchase their software using one email address, and then accidentally re-subscribe using a
    different email address (for example, they purchased subsequent years using PayPal which was tied to their spouse's
    email).  However it happened, the customer now how software licenses spread across multiple emails and therefore
    multiple customer profiles.

    merge combine the customer profiles, merging order history and software entitlements.  Still, it may be used to
    combine any two customer profiles for any reason.

    Success returns back a status code 204 (No Content)
 */

try {

    // first customer
    $first_customer_oid = insertSampleCustomer();

    $second_email = createRandomEmail();
    $second_customer_oid = insertSampleCustomer($second_email);

    $mergeRequest = new CustomerMergeRequest();
    // Supply either the email or the customer oid.  Only need one.
    $mergeRequest->setEmail($second_email);
    // $mergeRequest->setCustomerProfileOid($customer_oid);

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);
    $customer_api->mergeCustomer($first_customer_oid, $mergeRequest);

    // clean up this sample.
    deleteSampleCustomer($first_customer_oid);
    // Notice: No need to delete the second sample.  The merge call deletes it.

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer_profile_oid to update. |
 **customer** | [**\ultracart\v2\models\CustomerMergeRequest**](../Model/CustomerMergeRequest.md)| Customer to merge into this profile. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

void (empty response body)

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
// This is an internal method used by our Customer management screen.  It only searches customer tags and is geared
// towards our UI needs, so it's inflexible.  We're not including a sample for it because we don't envision it
// being valuable to a merchant.
// getCustomersByQuery is the merchant's search method.  It is completely full-featured and easy to use.
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

## `searchCustomers()`

```php
searchCustomers($search_string, $signup_dts_start, $signup_dts_end, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\CustomersResponse
```

Search for customers

Retrieves customers from the account by matching the search value against most customer fields.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.  This search also goes against the cache so updates should not be performed with these result objects.  Always re-query the individual customer profile if you are going to make updates.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_string** | **string**| Search | [optional]
 **signup_dts_start** | **string**| Signup date start | [optional]
 **signup_dts_end** | **string**| Signup date end | [optional]
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

## `updateCustomer()`

```php
updateCustomer($customer_profile_oid, $customer, $_expand): \ultracart\v2\models\CustomerResponse
```

Update a customer

Update a customer on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details

try {


    $customer_oid = insertSampleCustomer();

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);
    // just want address fields.  see https://www.ultracart.com/api/#resource_customer.html for all expansion values
    $_expand = "billing,shipping";
    $customer = $customer_api->getCustomer($customer_oid, $_expand)->getCustomer();
    // TODO: do some edits to the customer.  Here we will change some billing fields.
    $customer->getBilling()[0]->setAddress2('Apartment 101');

    // notice expand is passed to update as well since it returns back an updated customer object.
    // we use the same expansion, so we get back the same fields and can do comparisons.
    $api_response = $customer_api->updateCustomer($customer_oid, $customer, $_expand);

    // verify the update
    var_dump($api_response->getCustomer());

    deleteSampleCustomer($customer_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
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
// This is an internal method used by our Email workflow engines.  It allows for updating the email lists a customer
// is currently subscribed to.  It's geared towards our UI needs, so its usage may appear cryptic.
//  We're not including a sample for it because we don't envision it being valuable to a merchant.
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

## `updateWishListItem()`

```php
updateWishListItem($customer_profile_oid, $customer_wishlist_item_oid, $wishlist_item): \ultracart\v2\models\CustomerWishListItem
```

Update a customer wishlist item

Update a customer wishlist item


### Example

```php
<?php

use ultracart\v2\api\CustomerApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\CustomerWishListItem;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './customer_functions.php'; // <-- see this file for details
require_once '../item/item_functions.php'; // <-- needed to create sample items to wish for

/*
    The wishlist methods allow management of a customer's wishlist.
    This includes:
        deleteWishListItem
        getCustomerWishList
        getCustomerWishListItem
        insertWishListItem
        updateWishListItem
    These methods provide a standard CRUD interface.  The example below uses all of them.

    You'll need merchant_item_oids to insert wishlist items.  If you don't know the oids,
    call ItemApi.getItemByMerchantItemId() to retrieve the item, then get $item->getMerchantItemOid()

    Note: Priority of wishlist item, 3 being low priority and 5 is high priority.

 */

try {

    $customer_api = CustomerApi::usingApiKey(Constants::API_KEY);

    // create a few items first.
    $first_item_oid = insertSampleItemAndGetOid();
    $second_item_oid = insertSampleItemAndGetOid();

    // create a customer
    $customer_oid = insertSampleCustomer();

    // TODO: If you don't know the customer oid, use getCustomerByEmail() to retrieve the customer.

    // add some wish list items.
    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($first_item_oid);
    $addWishItem->setComments("I really want this for my birthday");
    $addWishItem->setPriority(3); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $firstCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    $addWishItem = new CustomerWishListItem();
    $addWishItem->setCustomerProfileOid($customer_oid);
    $addWishItem->setMerchantItemOid($second_item_oid);
    $addWishItem->setComments("Christmas Idea!");
    $addWishItem->setPriority(5); // Priority of wishlist item, 3 being low priority and 5 is high priority.
    $secondCreatedWishItem = $customer_api->insertWishListItem($customer_oid, $addWishItem);

    // retrieve one wishlist item again
    $firstCreatedWishItemCopy = $customer_api->getCustomerWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid())->getWishlistItem();
    // retrieve all wishlist items
    $allWishListItems = $customer_api->getCustomerWishList($customer_oid)->getWishlistItems();

    // update an item.
    $secondCreatedWishItem->setPriority(4);
    $updatedSecondWishItem = $customer_api->updateWishListItem($customer_oid, $secondCreatedWishItem->getCustomerWishlistItemOid(), $secondCreatedWishItem);

    // delete a wish list item
    $customer_api->deleteWishListItem($customer_oid, $firstCreatedWishItem->getCustomerWishlistItemOid());

    // Clean up
    deleteSampleCustomer($customer_oid);
    deleteSampleItemByOid($first_item_oid);
    deleteSampleItemByOid($second_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_profile_oid** | **int**| The customer oid for this wishlist. |
 **customer_wishlist_item_oid** | **int**| The wishlist oid for this wishlist item. |
 **wishlist_item** | [**\ultracart\v2\models\CustomerWishListItem**](../Model/CustomerWishListItem.md)| Wishlist item to update |

### Return type

[**\ultracart\v2\models\CustomerWishListItem**](../Model/CustomerWishListItem.md)

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

ini_set('display_errors', 1);

/*
    getEmailVerificationToken and validateEmailVerificationToken are tandem functions that allow a merchant to verify
    a customer's email address. getEmailVerificationToken returns back a token that the merchant can use however
    they wish to present to a customer. Usually this will be emailed to the customer within instructions to enter
    it back into a website.  Once the customer enters the token back into a site (along with their email),
    validateEmailVerificationToken will validate the token.

    Notice that getEmailVerificationToken requires both the email and password.

 */


use ultracart\v2\api\CustomerApi;
use ultracart\v2\models\AdjustInternalCertificateRequest;
use ultracart\v2\models\EmailVerifyTokenRequest;
use ultracart\v2\models\EmailVerifyTokenValidateRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$customer_api = CustomerApi::usingApiKey(Constants::API_KEY);


$email = "test@ultracart.com";
$password = "squirrel";

$tokenRequest = new EmailVerifyTokenRequest();
$tokenRequest->setEmail($email);
$tokenRequest->setPassword($password);

$tokenResponse = $customer_api->getEmailVerificationToken($tokenRequest);
$token = $tokenResponse->getToken();

// TODO - email the token to the customer, have them enter it back into another page...
// TODO - verify the token with the following call

$verifyRequest = new EmailVerifyTokenValidateRequest();
$verifyRequest->setToken($token);
$verifyResponse = $customer_api->validateEmailVerificationToken($verifyRequest);

echo 'Was the correct token provided? ' . $verifyResponse->getSuccess();
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
