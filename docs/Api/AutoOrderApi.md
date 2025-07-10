# ultracart\v2\AutoOrderApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consolidateAutoOrders()**](AutoOrderApi.md#consolidateAutoOrders) | **PUT** /auto_order/auto_orders/{auto_order_oid}/consolidate | Consolidates multiple auto orders
[**establishAutoOrderByReferenceOrderId()**](AutoOrderApi.md#establishAutoOrderByReferenceOrderId) | **POST** /auto_order/auto_orders/reference_order_id/{reference_order_id} | Establish an auto order by referencing a regular order id
[**getAutoOrder()**](AutoOrderApi.md#getAutoOrder) | **GET** /auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order by oid
[**getAutoOrderByCode()**](AutoOrderApi.md#getAutoOrderByCode) | **GET** /auto_order/auto_orders/code/{auto_order_code} | Retrieve an auto order by code
[**getAutoOrderByReferenceOrderId()**](AutoOrderApi.md#getAutoOrderByReferenceOrderId) | **GET** /auto_order/auto_orders/reference_order_id/{reference_order_id} | Retrieve an auto order by order id
[**getAutoOrders()**](AutoOrderApi.md#getAutoOrders) | **GET** /auto_order/auto_orders | Retrieve auto orders
[**getAutoOrdersBatch()**](AutoOrderApi.md#getAutoOrdersBatch) | **POST** /auto_order/auto_orders/batch | Retrieve auto order batch
[**getAutoOrdersByQuery()**](AutoOrderApi.md#getAutoOrdersByQuery) | **POST** /auto_order/auto_orders/query | Retrieve auto orders by query
[**pauseAutoOrder()**](AutoOrderApi.md#pauseAutoOrder) | **PUT** /auto_order/auto_orders/{auto_order_oid}/pause | Pause auto order
[**updateAutoOrder()**](AutoOrderApi.md#updateAutoOrder) | **PUT** /auto_order/auto_orders/{auto_order_oid} | Update an auto order
[**updateAutoOrdersBatch()**](AutoOrderApi.md#updateAutoOrdersBatch) | **PUT** /auto_order/auto_orders/batch | Update multiple auto orders


## `consolidateAutoOrders()`

```php
consolidateAutoOrders($auto_order_oid, $auto_order_consolidate, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Consolidates multiple auto orders

Consolidates mutliple auto orders on the UltraCart account.


### Example

```php
<?php


use ultracart\v2\models\AutoOrderConsolidate;

ini_set('display_errors', 1);

/*
 *
 * consolidateAutoOrders
 * an auto order with no items, the original_order is used for shipping, billing, and payment information.
 * Once you have your empty auto order, add items to it and call updateAutoOrder.
 *
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

$_expand = "items,items.future_schedules,original_order,rebill_orders"; // see https://www.ultracart.com/api/#resource_auto_order.html for list

$target_auto_order_oid = 123456789; // set getAutoOrdersByQuery for retrieving auto orders where you can get their auto_order_oid.
$consolidateRequest = new AutoOrderConsolidate();
$consolidateRequest->setSourceAutoOrderOids([23456789, 3456789]);  // these are the autoorder_oids you wish to consolidate into the target.

$api_response = $auto_order_api->consolidateAutoOrders($target_auto_order_oid, $consolidateRequest, $_expand);

$conslidated_auto_order = $api_response->getAutoOrder();

// TODO: make sure the consolidated order has all the items and history of all orders.
var_dump($conslidated_auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to consolidate into. |
 **auto_order_consolidate** | [**\ultracart\v2\models\AutoOrderConsolidate**](../Model/AutoOrderConsolidate.md)| Auto orders to consolidate |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `establishAutoOrderByReferenceOrderId()`

```php
establishAutoOrderByReferenceOrderId($reference_order_id, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Establish an auto order by referencing a regular order id

Establish an auto order by referencing a regular order id.  The result will be an auto order without any items.  You should add the items and perform an update call.  Orders must be less than 60 days old and use a credit card payment.


### Example

```php
<?php


use ultracart\v2\models\AutoOrderItem;

ini_set('display_errors', 1);

/*
 *
 * This method takes a normal order id and creates an empty auto order from it.  While this might seem useless having
 * an auto order with no items, the original_order is used for shipping, billing, and payment information.
 * Once you have your empty auto order, add items to it and call updateAutoOrder.
 *
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

$_expand = "items,items.future_schedules,original_order,rebill_orders"; // see https://www.ultracart.com/api/#resource_auto_order.html for list

$original_order_id = "DEMO-123457";
$api_response = $auto_order_api->establishAutoOrderByReferenceOrderId($original_order_id, $_expand);

$empty_auto_order = $api_response->getAutoOrder();
$auto_order_oid = $empty_auto_order->getAutoOrderOid();

$items = [];
$item = new AutoOrderItem();
$item->setOriginalItemId("ITEM_ABC"); // This item should be configured with auto order features.
$item->setOriginalQuantity(1);
$item->setArbitraryUnitCost(59.99);
// Valid Frequencies
// "Weekly", "Biweekly", "Every...", "Every 10 Days", "Every 4 Weeks", "Every 6 Weeks", "Every 8 Weeks", "Every 24 Days", "Every 28 Days", "Monthly",
// "Every 45 Days", "Every 2 Months", "Every 3 Months", "Every 4 Months", "Every 5 Months", "Every 6 Months", "Yearly"
$item->setFrequency("Monthly");
$items[] = $item;
$empty_auto_order->setItems($items);

$validate_original_order = 'No';
$api_response = $auto_order_api->updateAutoOrder($auto_order_oid, $empty_auto_order, $validate_original_order, $_expand);
$updated_auto_order = $api_response->getAutoOrder();
var_dump($updated_auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_order_id** | **string**| The order id to attach this auto order to |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrder()`

```php
getAutoOrder($auto_order_oid, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Retrieve an auto order by oid

Retrieves a single auto order using the specified auto order oid.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * retrieves an auto_order given the auto_order_oid;
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

$_expand = "items,items.future_schedules,original_order,rebill_orders"; // see https://www.ultracart.com/api/#resource_auto_order.html for list
$auto_order_oid = 123456789; // If you don't know the oid, use getAutoOrdersByQuery for retrieving auto orders
$api_response = $auto_order_api->getAutoOrder($auto_order_oid, $_expand);
$auto_order = $api_response->getAutoOrder();
var_dump($auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrderByCode()`

```php
getAutoOrderByCode($auto_order_code, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Retrieve an auto order by code

Retrieves a single auto order using the specified reference (original) order id.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * This example illustrates how to query an auto order when you know the 'code'.  Each AutoOrder has a unique
 * identifier used by UltraCart called an OID (Object Identifier).  AutoOrders also have a unique code which
 * is (arguably) an easy way for customers to discuss a specific auto order with a merchant.
 * The codes look like this: "RT2A9CBSX9"
 *
 * It is doubtful that an UltraCart merchant will ever make use of this method.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

/**
 * These are the possible expansion values for auto orders.  This list is taken from www.ultracart.com/api/
 * and may become stale. Please review the master website when in doubt.
 * items
 * items.future_schedules
 * items.sample_schedule
 * original_order
 * original_order.affiliate
 * original_order.affiliate.ledger
 * original_order.auto_order
 * original_order.billing
 * original_order.buysafe
 * original_order.channel_partner
 * original_order.checkout
 * original_order.coupon
 * original_order.customer_profile
 * original_order.digital_order
 * original_order.edi
 * original_order.fraud_score
 * original_order.gift
 * original_order.gift_certificate
 * original_order.internal
 * original_order.item
 * original_order.linked_shipment
 * original_order.marketing
 * original_order.payment
 * original_order.payment.transaction
 * original_order.quote
 * original_order.salesforce
 * original_order.shipping
 * original_order.summary
 * original_order.taxes
 * rebill_orders
 * rebill_orders.affiliate
 * rebill_orders.affiliate.ledger
 * rebill_orders.auto_order
 * rebill_orders.billing
 * rebill_orders.buysafe
 * rebill_orders.channel_partner
 * rebill_orders.checkout
 * rebill_orders.coupon
 * rebill_orders.customer_profile
 * rebill_orders.digital_order
 * rebill_orders.edi
 * rebill_orders.fraud_score
 * rebill_orders.gift
 * rebill_orders.gift_certificate
 * rebill_orders.internal
 * rebill_orders.item
 * rebill_orders.linked_shipment
 * rebill_orders.marketing
 * rebill_orders.payment
 * rebill_orders.payment.transaction
 * rebill_orders.quote
 * rebill_orders.salesforce
 * rebill_orders.shipping
 * rebill_orders.summary
 * rebill_orders.taxes
 */
$expand = "items,items.future_schedules,original_order,rebill_orders"; // contact us if you're unsure what you need
$code = "RT2A9CBSX9";
$api_response = $auto_order_api->getAutoOrderByCode($code, $expand);
$auto_order = $api_response->getAutoOrder();

// this will be verbose...
var_dump($auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_code** | **string**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrderByReferenceOrderId()`

```php
getAutoOrderByReferenceOrderId($reference_order_id, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Retrieve an auto order by order id

Retrieves a single auto order using the specified reference (original) order id.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * This example illustrates how to query an auto order when you know the original order id.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

/**
 * These are the possible expansion values for auto orders.  This list is taken from www.ultracart.com/api/
 * and may become stale. Please review the master website when in doubt.
 * items
 * items.future_schedules
 * items.sample_schedule
 * original_order
 * original_order.affiliate
 * original_order.affiliate.ledger
 * original_order.auto_order
 * original_order.billing
 * original_order.buysafe
 * original_order.channel_partner
 * original_order.checkout
 * original_order.coupon
 * original_order.customer_profile
 * original_order.digital_order
 * original_order.edi
 * original_order.fraud_score
 * original_order.gift
 * original_order.gift_certificate
 * original_order.internal
 * original_order.item
 * original_order.linked_shipment
 * original_order.marketing
 * original_order.payment
 * original_order.payment.transaction
 * original_order.quote
 * original_order.salesforce
 * original_order.shipping
 * original_order.summary
 * original_order.taxes
 * rebill_orders
 * rebill_orders.affiliate
 * rebill_orders.affiliate.ledger
 * rebill_orders.auto_order
 * rebill_orders.billing
 * rebill_orders.buysafe
 * rebill_orders.channel_partner
 * rebill_orders.checkout
 * rebill_orders.coupon
 * rebill_orders.customer_profile
 * rebill_orders.digital_order
 * rebill_orders.edi
 * rebill_orders.fraud_score
 * rebill_orders.gift
 * rebill_orders.gift_certificate
 * rebill_orders.internal
 * rebill_orders.item
 * rebill_orders.linked_shipment
 * rebill_orders.marketing
 * rebill_orders.payment
 * rebill_orders.payment.transaction
 * rebill_orders.quote
 * rebill_orders.salesforce
 * rebill_orders.shipping
 * rebill_orders.summary
 * rebill_orders.taxes
 */
$expand = "items,items.future_schedules,original_order,rebill_orders"; // contact us if you're unsure what you need
$original_order_id = "DEMO-12345678";
$api_response = $auto_order_api->getAutoOrderByReferenceOrderId($original_order_id, $expand);
$auto_order = $api_response->getAutoOrder();

// this will be verbose...
var_dump($auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference_order_id** | **string**| The auto order oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrders()`

```php
getAutoOrders($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand): \ultracart\v2\models\AutoOrdersResponse
```

Retrieve auto orders

Retrieves auto orders from the account.  If no parameters are specified, all auto orders will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

use ultracart\v2\api\AutoOrderApi;

set_time_limit(3000); // pull all orders could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*

getAutoOrders provides a query service on AutoOrders (aka subscriptions or recurring orders) within the UltraCart
system. It was the first query provided and the most cumbersome to use.  Please use getAutoOrdersByQuery for an
easier query method.  If you have multiple auto_order_oids and need the corresponding objects, consider
getAutoOrdersBatch() to reduce call count.

*/


require_once '../vendor/autoload.php';
require_once '../constants.php';


$auto_order_api = AutoOrderApi::usingApiKey(Constants::API_KEY);


function getAutoOrderChunk(AutoOrderApi $auto_order_api, int $_offset, int $_limit): array
{
    $_expand = "items,original_order,rebill_orders";
    // see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
    /*
    Possible Order Expansions:

    add_ons                             items.sample_schedule	        original_order.buysafe	        original_order.payment.transaction
    items	                            original_order	                original_order.channel_partner	original_order.quote
    items.future_schedules	            original_order.affiliate	    original_order.checkout	        original_order.salesforce
    original_order.affiliate.ledger	    original_order.coupon	        original_order.shipping
    original_order.auto_order	        original_order.customer_profile	original_order.summary
    original_order.billing	            original_order.digital_order	original_order.taxes
    rebill_orders	                    original_order.edi	            rebill_orders.affiliate
    rebill_orders.affiliate.ledger	    original_order.fraud_score	    rebill_orders.auto_order
    rebill_orders.billing	            original_order.gift	            rebill_orders.buysafe
    rebill_orders.channel_partner	    original_order.gift_certificate	rebill_orders.checkout
    rebill_orders.coupon	            original_order.internal	        rebill_orders.customer_profile
    rebill_orders.digital_order	        original_order.item	            rebill_orders.edi
    rebill_orders.fraud_score	        original_order.linked_shipment	rebill_orders.gift
    rebill_orders.gift_certificate      original_order.marketing	    rebill_orders.internal
    rebill_orders.item	                original_order.payment	        rebill_orders.linked_shipment
    rebill_orders.marketing	            rebill_orders.payment	        rebill_orders.quote
    rebill_orders.payment.transaction	rebill_orders.salesforce	    rebill_orders.shipping
    rebill_orders.summary	            rebill_orders.taxes

    */

    $auto_order_code = null;
    $original_order_id = null;
    $first_name = null;
    $last_name = null;
    $company = null;
    $city = null;
    $state = null;
    $postal_code = null;
    $country_code = null;
    $phone = null;
    $email = 'test@ultracart.com'; // <-- for this example, we are only filtering on email address.
    $original_order_date_begin = null;
    $original_order_date_end = null;
    $next_shipment_date_begin = null;
    $next_shipment_date_end = null;
    $card_type = null;
    $item_id = null;
    $status = null;
    $_since = null;
    $_sort = null;



    // see all these parameters?  that is why you should use getAutoOrdersByQuery() instead of getAutoOrders()
    $api_response = $auto_order_api->getAutoOrders($auto_order_code, $original_order_id, $first_name, $last_name,
        $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin,
        $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status,
        $_limit, $_offset, $_since, $_sort, $_expand);

    if($api_response->getAutoOrders() != null){
        return $api_response->getAutoOrders();
    }
    return [];
}

$auto_orders = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

while( $more_records_to_fetch ){

    echo "executing iteration " . $iteration . '<br>';
    $chunk_of_auto_orders = getAutoOrderChunk($auto_order_api, $offset, $limit);
    $auto_orders = array_merge($auto_orders, $chunk_of_auto_orders);
    $offset = $offset + $limit;
    $more_records_to_fetch = count($chunk_of_auto_orders) == $limit;
    $iteration++;

}

// this could get verbose...
echo '<html lang="en"><body><pre>';
var_dump($auto_orders);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_code** | **string**| Auto order code | [optional]
 **original_order_id** | **string**| Original order id | [optional]
 **first_name** | **string**| First name | [optional]
 **last_name** | **string**| Last name | [optional]
 **company** | **string**| Company | [optional]
 **city** | **string**| City | [optional]
 **state** | **string**| State | [optional]
 **postal_code** | **string**| Postal code | [optional]
 **country_code** | **string**| Country code (ISO-3166 two letter) | [optional]
 **phone** | **string**| Phone | [optional]
 **email** | **string**| Email | [optional]
 **original_order_date_begin** | **string**| Original order date begin | [optional]
 **original_order_date_end** | **string**| Original order date end | [optional]
 **next_shipment_date_begin** | **string**| Next shipment date begin | [optional]
 **next_shipment_date_end** | **string**| Next shipment date end | [optional]
 **card_type** | **string**| Card type | [optional]
 **item_id** | **string**| Item ID | [optional]
 **status** | **string**| Status | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_since** | **string**| Fetch auto orders that have been created/modified since this date/time. | [optional]
 **_sort** | **string**| The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrdersBatch()`

```php
getAutoOrdersBatch($auto_order_batch, $_expand): \ultracart\v2\models\AutoOrdersResponse
```

Retrieve auto order batch

Retrieves a group of auto orders from the account based on an array of auto order oids.  If more than 200 auto order ids are specified, the API call will fail with a bad request error.


### Example

```php
<?php

set_time_limit(3000); // pull all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve auto orders when you have a list of auto_order_oid.
 */

use ultracart\v2\models\AutoOrderQueryBatch;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();


/**
 * These are the possible expansion values for auto orders.  This list is taken from www.ultracart.com/api/
 * and may become stale. Please review the master website when in doubt.
 * items
 * items.future_schedules
 * items.sample_schedule
 * original_order
 * original_order.affiliate
 * original_order.affiliate.ledger
 * original_order.auto_order
 * original_order.billing
 * original_order.buysafe
 * original_order.channel_partner
 * original_order.checkout
 * original_order.coupon
 * original_order.customer_profile
 * original_order.digital_order
 * original_order.edi
 * original_order.fraud_score
 * original_order.gift
 * original_order.gift_certificate
 * original_order.internal
 * original_order.item
 * original_order.linked_shipment
 * original_order.marketing
 * original_order.payment
 * original_order.payment.transaction
 * original_order.quote
 * original_order.salesforce
 * original_order.shipping
 * original_order.summary
 * original_order.taxes
 * rebill_orders
 * rebill_orders.affiliate
 * rebill_orders.affiliate.ledger
 * rebill_orders.auto_order
 * rebill_orders.billing
 * rebill_orders.buysafe
 * rebill_orders.channel_partner
 * rebill_orders.checkout
 * rebill_orders.coupon
 * rebill_orders.customer_profile
 * rebill_orders.digital_order
 * rebill_orders.edi
 * rebill_orders.fraud_score
 * rebill_orders.gift
 * rebill_orders.gift_certificate
 * rebill_orders.internal
 * rebill_orders.item
 * rebill_orders.linked_shipment
 * rebill_orders.marketing
 * rebill_orders.payment
 * rebill_orders.payment.transaction
 * rebill_orders.quote
 * rebill_orders.salesforce
 * rebill_orders.shipping
 * rebill_orders.summary
 * rebill_orders.taxes
 */
$expand = "items,items.future_schedules,original_order,rebill_orders"; // contact us if you're unsure what you need
$auto_order_oids = [123456, 234567, 345678, 456789];
$batchRequest = new AutoOrderQueryBatch();
$batchRequest->setAutoOrderOids($auto_order_oids);
$api_response = $auto_order_api->getAutoOrdersBatch($batchRequest, $expand);
$auto_orders = $api_response->getAutoOrders();

// this will be verbose...
var_dump($auto_orders);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_batch** | [**\ultracart\v2\models\AutoOrderQueryBatch**](../Model/AutoOrderQueryBatch.md)| Auto order batch |
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoOrdersByQuery()`

```php
getAutoOrdersByQuery($auto_order_query, $_limit, $_offset, $_sort, $_expand): \ultracart\v2\models\AutoOrdersResponse
```

Retrieve auto orders by query

Retrieves a group of auto orders from the account based on a query object.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

set_time_limit(3000); // pull all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve auto orders and handle pagination.
 */

use ultracart\v2\api\AutoOrderApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();


/**
 * @throws ApiException
 */
function getAutoOrderChunk(AutoOrderApi $auto_order_api, int $offset, int $limit): array
{

    /**
     * These are the possible expansion values for auto orders.  This list is taken from www.ultracart.com/api/
     * and may become stale. Please review the master website when in doubt.
    items
    items.future_schedules
    items.sample_schedule
    original_order
    original_order.affiliate
    original_order.affiliate.ledger
    original_order.auto_order
    original_order.billing
    original_order.buysafe
    original_order.channel_partner
    original_order.checkout
    original_order.coupon
    original_order.customer_profile
    original_order.digital_order
    original_order.edi
    original_order.fraud_score
    original_order.gift
    original_order.gift_certificate
    original_order.internal
    original_order.item
    original_order.linked_shipment
    original_order.marketing
    original_order.payment
    original_order.payment.transaction
    original_order.quote
    original_order.salesforce
    original_order.shipping
    original_order.summary
    original_order.taxes
    rebill_orders
    rebill_orders.affiliate
    rebill_orders.affiliate.ledger
    rebill_orders.auto_order
    rebill_orders.billing
    rebill_orders.buysafe
    rebill_orders.channel_partner
    rebill_orders.checkout
    rebill_orders.coupon
    rebill_orders.customer_profile
    rebill_orders.digital_order
    rebill_orders.edi
    rebill_orders.fraud_score
    rebill_orders.gift
    rebill_orders.gift_certificate
    rebill_orders.internal
    rebill_orders.item
    rebill_orders.linked_shipment
    rebill_orders.marketing
    rebill_orders.payment
    rebill_orders.payment.transaction
    rebill_orders.quote
    rebill_orders.salesforce
    rebill_orders.shipping
    rebill_orders.summary
    rebill_orders.taxes
     */
    $expand = "items,items.future_schedules,original_order,rebill_orders"; // contact us if you're unsure what you need
    
    /*
     * These are the supported sorting fields:
    auto_order_code 
    order_id
    shipping.company 
    shipping.first_name 
    shipping.last_name 
    shipping.city 
    shipping.state_region
    shipping.postal_code 
    shipping.country_code 
    billing.phone 
    billing.email 
    billing.cc_email
    billing.company 
    billing.first_name 
    billing.last_name 
    billing.city 
    billing.state
    billing.postal_code 
    billing.country_code 
    creation_dts 
    payment.payment_dts
    checkout.screen_branding_theme_code
    next_shipment_dts
     */

    $_since = null;
    $_sort = "next_shipment_dts";
    $query = new ultracart\v2\models\AutoOrderQuery();
    $query->setEmail("support@ultracart.com");
    $api_response = $auto_order_api->getAutoOrdersByQuery($query, $limit, $offset, $_sort, $expand);

    if ($api_response->getAutoOrders() != null) {
        return $api_response->getAutoOrders();
    }
    return [];
}

$auto_orders = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_orders = getAutoOrderChunk($auto_order_api, $offset, $limit);
        $orders = array_merge($auto_orders, $chunk_of_orders);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_orders) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($auto_orders);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_query** | [**\ultracart\v2\models\AutoOrderQuery**](../Model/AutoOrderQuery.md)| Auto order query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the auto orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseAutoOrder()`

```php
pauseAutoOrder($auto_order_oid, $auto_order, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Pause auto order

Completely pause an auto order


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * This is a convenience method created for an UltraCart merchant to pause a large number of auto orders
 * due to an inventory shortage.  This is not new functionality and can be accomplished with the normal updateAutoOrder
 * call.  It does the following logic to an auto order:
 * for each item in the auto order:
 *    if the item is not paused, pause it, setPause(true)
 * save the changes by calling updateAutoOrder()
 *
 * Some warnings if you choose to use this method.
 * There are no convenience methods to unpause auto orders.
 * There are no convenience methods to query which auto orders are paused.
 * We do not recommend pausing auto orders and the merchant is on their own to manage auto order state if they
 * choose to begin pausing orders.  Keep good track of what you're doing.
 *
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

$_expand = "items"; // see https://www.ultracart.com/api/#resource_auto_order.html for list
$auto_order_oid = 123456789; // get an auto order and update it.  There are many ways to retrieve an auto order.
$get_response = $auto_order_api->getAutoOrder($auto_order_oid);
$auto_order = $get_response->getAutoOrder();

$pause_response = $auto_order_api->pauseAutoOrder($auto_order_oid, $auto_order);
$paused_auto_order = $pause_response->getAutoOrder();
var_dump($paused_auto_order);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to pause. |
 **auto_order** | [**\ultracart\v2\models\AutoOrder**](../Model/AutoOrder.md)| Auto order to pause |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoOrder()`

```php
updateAutoOrder($auto_order_oid, $auto_order, $validate_original_order, $_expand): \ultracart\v2\models\AutoOrderResponse
```

Update an auto order

Update an auto order on the UltraCart account.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 *
 * This method allows for updating an auto order.
 * Warning: Take great care editing auto orders.  They are complex.
 * Sometimes you must change the original_order to affect the auto_order.  If you have questions about what fields
 * to update to achieve your desired change, contact UltraCart support.  Better to ask and get it right than to
 * make a bad assumption and corrupt a thousand auto orders.  UltraCart support is ready to assist.
 *
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

$_expand = "items,items.future_schedules,original_order,rebill_orders"; // see https://www.ultracart.com/api/#resource_auto_order.html for list
$auto_order_oid = 123456789; // get an auto order and update it.  There are many ways to retrieve an auto order.
$api_response = $auto_order_api->getAutoOrder($auto_order_oid);
$auto_order = $api_response->getAutoOrder();
$validate_original_order = 'No';

// for this example, the customer supplied the wrong postal code when ordering.  So to change the postal code for
// all subsequent auto orders, we change the original order.
$auto_order->getOriginalOrder()->getBilling()->setPostalCode('44233');

$api_response = $auto_order_api->updateAutoOrder($auto_order_oid, $auto_order, $validate_original_order, $_expand);
$updated_auto_order = $api_response->getAutoOrder();
var_dump($updated_auto_order);


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_order_oid** | **int**| The auto order oid to update. |
 **auto_order** | [**\ultracart\v2\models\AutoOrder**](../Model/AutoOrder.md)| Auto order to update |
 **validate_original_order** | **string**| Validate original order before updating | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AutoOrderResponse**](../Model/AutoOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoOrdersBatch()`

```php
updateAutoOrdersBatch($auto_orders_request, $_expand, $_placeholders, $_async): \ultracart\v2\models\AutoOrdersResponse
```

Update multiple auto orders

Update multiple auto orders on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\models\AutoOrdersRequest;

ini_set('display_errors', 1);

/*
 *
 * This method allows for updating multiple auto orders.
 * Warning: Take great care editing auto orders.  They are complex.
 * Sometimes you must change the original_order to affect the auto_order.  If you have questions about what fields
 * to update to achieve your desired change, contact UltraCart support.  Better to ask and get it right than to
 * make a bad assumption and corrupt a thousand auto orders.  UltraCart support is ready to assist.
 *
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';


$auto_order_api = Samples::getAutoOrderApi();

// The _async parameter is what it seems.  True if async.
// The max records allowed depends on the async flag.  Synch max is 20, Asynch max is 100.

$_async = true; // if true, success returns back a 204 No Content.  False returns back the updated orders.
$_expand = null;  // since we're async, nothing is returned, so we don't care about expansions.
// If you are doing a synchronous operation, then set your $_expand appropriately.  set getAutoOrders()
// sample for expansion samples.
$_placeholders = false; // mostly used for UI, not needed for a pure scripting operation.

$auto_orders = [];  // TODO: This should be an array of auto orders that have been updated.  See any getAutoOrders method for retrieval.
$autoOrdersRequest = new AutoOrdersRequest();
$api_response = $autoOrdersRequest->setAutoOrders($auto_orders);

$auto_order_api->updateAutoOrdersBatch($autoOrdersRequest, $_expand, $_placeholders, $_async);
if(!is_null($api_response)){
    // something went wrong if we have a response.
    var_dump($api_response);
}

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_orders_request** | [**\ultracart\v2\models\AutoOrdersRequest**](../Model/AutoOrdersRequest.md)| Auto orders to update (synchronous maximum 20 / asynchronous maximum 100) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]
 **_async** | **bool**| True if the operation should be run async.  No result returned | [optional]

### Return type

[**\ultracart\v2\models\AutoOrdersResponse**](../Model/AutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
