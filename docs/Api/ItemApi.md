# ultracart\v2\ItemApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDigitalItem()**](ItemApi.md#deleteDigitalItem) | **DELETE** /item/digital_library/{digital_item_oid} | Delete a digital item, which is a file within the digital library, not an actual merchant item
[**deleteItem()**](ItemApi.md#deleteItem) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
[**deleteReview()**](ItemApi.md#deleteReview) | **DELETE** /item/items/{merchant_item_oid}/reviews/{review_oid} | Delete a review
[**getDigitalItem()**](ItemApi.md#getDigitalItem) | **GET** /item/digital_library/{digital_item_oid} | Retrieve a digital item from the digital library, which are digital files that may be attached to normal items
[**getDigitalItems()**](ItemApi.md#getDigitalItems) | **GET** /item/digital_library | Retrieve digital items from the digital library which are digital files that may be attached to normal items
[**getDigitalItemsByExternalId()**](ItemApi.md#getDigitalItemsByExternalId) | **GET** /item/digital_library/by_external/{external_id} | Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id
[**getInventorySnapshot()**](ItemApi.md#getInventorySnapshot) | **GET** /item/items/inventory_snapshot | Retrieve a list of item inventories.  This method may be called once every 15 minutes.  More than that will result in a 429 response.
[**getItem()**](ItemApi.md#getItem) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
[**getItemByMerchantItemId()**](ItemApi.md#getItemByMerchantItemId) | **GET** /item/items/merchant_item_id/{merchant_item_id} | Retrieve an item by item id
[**getItemShippingDistributionCenterByCode()**](ItemApi.md#getItemShippingDistributionCenterByCode) | **GET** /item/items/{merchant_item_oid}/shipping/distribution_centers/by_code/{distribution_center_code} | Retrieve an item shipping distribution center
[**getItems()**](ItemApi.md#getItems) | **GET** /item/items | Retrieve items
[**getPricingTiers()**](ItemApi.md#getPricingTiers) | **GET** /item/pricing_tiers | Retrieve pricing tiers
[**getReview()**](ItemApi.md#getReview) | **GET** /item/items/{merchant_item_oid}/reviews/{review_oid} | Get a review
[**getReviews()**](ItemApi.md#getReviews) | **GET** /item/items/{merchant_item_oid}/reviews | Get reviews for an item
[**getUnassociatedDigitalItems()**](ItemApi.md#getUnassociatedDigitalItems) | **GET** /item/digital_library/unassociated | Retrieve digital items from the digital library (which are digital files that may be attached to normal items) not yet associated with actual items
[**insertDigitalItem()**](ItemApi.md#insertDigitalItem) | **POST** /item/digital_library | Create a file within the digital library
[**insertItem()**](ItemApi.md#insertItem) | **POST** /item/items | Create an item
[**insertReview()**](ItemApi.md#insertReview) | **POST** /item/items/{merchant_item_oid}/reviews | Insert a review
[**insertUpdateItemContentAttribute()**](ItemApi.md#insertUpdateItemContentAttribute) | **POST** /item/items/{merchant_item_oid}/content/attributes | Upsert an item content attribute
[**updateDigitalItem()**](ItemApi.md#updateDigitalItem) | **PUT** /item/digital_library/{digital_item_oid} | Updates a file within the digital library
[**updateItem()**](ItemApi.md#updateItem) | **PUT** /item/items/{merchant_item_oid} | Update an item
[**updateItemInventories()**](ItemApi.md#updateItemInventories) | **PUT** /item/items/update_item_inventories | Update item inventories for a distribution center
[**updateItemShippingDistributionCenterByCode()**](ItemApi.md#updateItemShippingDistributionCenterByCode) | **PUT** /item/items/{merchant_item_oid}/shipping/distribution_centers/by_code/{distribution_center_code} | Update an item shipping distribution center
[**updateItems()**](ItemApi.md#updateItems) | **PUT** /item/items/batch | Update multiple items
[**updateReview()**](ItemApi.md#updateReview) | **PUT** /item/items/{merchant_item_oid}/reviews/{review_oid} | Update a review
[**uploadTemporaryMultimedia()**](ItemApi.md#uploadTemporaryMultimedia) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.


## `deleteDigitalItem()`

```php
deleteDigitalItem($digital_item_oid)
```

Delete a digital item, which is a file within the digital library, not an actual merchant item

Delete a digital item on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $digital_item_oid = insertSampleDigitalItem();
    deleteSampleDigitalItem($digital_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItem()`

```php
deleteItem($merchant_item_oid)
```

Delete an item

Delete an item on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $item_oid = insertSampleItem();
    deleteSampleItem($item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReview()`

```php
deleteReview($review_oid, $merchant_item_oid)
```

Delete a review

Delete an item review.


### Example

```php
<?php

use ultracart\v2\api\ItemApi;

ini_set('display_errors', 1);

/*
    Deletes a specific user review for an item.  This would most likely be used by a merchant who has cached all
    reviews on a separate site and then wishes to remove a particular review.

    The merchant_item_oid is a unique identifier used by UltraCart.  If you do not know your item's oid, call
    ItemApi.getItemByMerchantItemId() to retrieve the item, and then it's oid $item->getMerchantItemOid()

    The review_oid is a unique identifier used by UltraCart.  If you do not know a review's oid, call
    ItemApi.getReviews() to get all reviews where you can then grab the oid from an item.

    Success returns back a status code of 204 (No Content)

 */


require_once '../vendor/autoload.php';
require_once '../constants.php';


$item_api = ItemApi::usingApiKey(Constants::API_KEY);
$merchant_item_oid = 123456;
$review_oid = 987654;
$item_api->deleteReview($review_oid, $merchant_item_oid);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **review_oid** | **int**| The review oid to delete. |
 **merchant_item_oid** | **int**| The item oid the review is associated with. |

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

## `getDigitalItem()`

```php
getDigitalItem($digital_item_oid): \ultracart\v2\models\ItemDigitalItemResponse
```

Retrieve a digital item from the digital library, which are digital files that may be attached to normal items

Retrieves a digital item (file information) from the account.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    /*
     * Please Note!
     * Digital Items are not normal items you sell on your site.  They are digital files that you may add to
     * a library and then attach to a normal item as an accessory or the main item itself.
     * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376485/Digital+Items
     */

    $digital_item_oid = insertSampleDigitalItem(); // create an item so I can get an item
    $item_api = Samples::getItemApi();
    $api_response = $item_api->getDigitalItem($digital_item_oid);
    $digital_item = $api_response->getDigitalItem(); // assuming this succeeded


    echo 'The following item was retrieved via getDigitalItem():';
    var_dump($digital_item);

    deleteSampleDigitalItem($digital_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalItems()`

```php
getDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders): \ultracart\v2\models\ItemDigitalItemsResponse
```

Retrieve digital items from the digital library which are digital files that may be attached to normal items

Retrieves a group of digital items (file information) from the account.  If no parameters are specified, all digital items will be returned.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    /*
     * Please Note!
     * Digital Items are not normal items you sell on your site.  They are digital files that you may add to
     * a library and then attach to a normal item as an accessory or the main item itself.
     * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376485/Digital+Items
     */

    $digital_item_oid = insertSampleDigitalItem(); // create an item so I can get an item
    $item_api = Samples::getItemApi();

    $_limit = 100;
    $_offset = 0;
    $_since = null; //  digital items do not use since.  leave as null.
    $_sort = null; // if null, use default of original_filename
    $_expand = null; // digital items have no expansion.  leave as null.  this value is ignored
    $_placeholders = null; // digital items have no placeholders. leave as null.

    $api_response = $item_api->getDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    $digital_items = $api_response->getDigitalItems(); // assuming this succeeded

    echo 'The following items were retrieved via getDigitalItems():';
    foreach ($digital_items as $digital_item) {
        var_dump($digital_item);
    }


} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalItemsByExternalId()`

```php
getDigitalItemsByExternalId($external_id): \ultracart\v2\models\ItemDigitalItemsResponse
```

Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id

Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    /*
     * Please Note!
     * Digital Items are not normal items you sell on your site.  They are digital files that you may add to
     * a library and then attach to a normal item as an accessory or the main item itself.
     * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376485/Digital+Items
     */

    $external_id = uniqid();
    echo 'My external id is ' . $external_id;
    $digital_item_oid = insertSampleDigitalItem($external_id); // create digital item with a specific external id I can later use.
    $item_api = Samples::getItemApi();
    $api_response = $item_api->getDigitalItemsByExternalId($external_id);
    $digital_items = $api_response->getDigitalItems(); // assuming this succeeded


    echo 'The following item was retrieved via getDigitalItem():';
    var_dump($digital_items);

    deleteSampleDigitalItem($digital_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventorySnapshot()`

```php
getInventorySnapshot(): \ultracart\v2\models\ItemInventorySnapshotResponse
```

Retrieve a list of item inventories.  This method may be called once every 15 minutes.  More than that will result in a 429 response.

Retrieve a list of item inventories.  This method may be called once every 15 minutes.  More than that will result in a 429 response.


### Example

```php
<?php
// Retrieve a list of item inventories.
// This method may be called once every 15 minutes.  More than that will result in a 429 response.

use ultracart\v2\api\ItemApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';

try {

    $item_api = ItemApi::usingApiKey(Constants::API_KEY);
    $api_response = $item_api->getInventorySnapshot();
    $inventories = $api_response->getInventories();

    foreach($inventories as $inventory){
        var_dump($inventory);
    }

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}

```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ItemInventorySnapshotResponse**](../Model/ItemInventorySnapshotResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItem()`

```php
getItem($merchant_item_oid, $_expand, $_placeholders): \ultracart\v2\models\ItemResponse
```

Retrieve an item

Retrieves a single item using the specified item oid.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

// Of the two getItem methods, you'll probably always use getItemByMerchantItemId instead of this one.
// Most item work is done with the item id, not the item oid.   The latter is only meaningful as a primary
// key in the UltraCart databases.  But here is an example of using getItem().  We take the long route here
// of retrieving the item using getItemByMerchantItemId to obtain the oid rather than hard-coding it.  We do this
// because these samples are used in our quality control system and run repeatedly.

try {

    $item_id = insertSampleItem();
    $item_api = Samples::getItemApi();
    $customer_api = Samples::getCustomerApi(); // only needed for accessing reviewer information below.

    // the _expand variable is null in the following call.  we just need the base object this time.
    $api_response = $item_api->getItemByMerchantItemId($item_id, null, false);
    $item = $api_response->getItem(); // assuming this succeeded

    $merchant_item_oid = $item->getMerchantItemOid();

    // This is the actual call for this script.
    // The real devil in the getItem calls is the expansion, making sure you return everything you need without
    // returning everything since these objects are extremely large.
    // These are the possible expansion values.
    /*
        accounting
        amember
        auto_order
        auto_order.steps
        ccbill
        channel_partner_mappings
        chargeback
        checkout
        content
        content.assignments
        content.attributes
        content.multimedia
        content.multimedia.thumbnails
        digital_delivery
        ebay
        email_notifications
        enrollment123
        gift_certificate
        google_product_search
        kit_definition
        identifiers
        instant_payment_notifications
        internal
        options
        payment_processing
        physical
        pricing
        pricing.tiers
        realtime_pricing
        related
        reporting
        restriction
        reviews
        reviews.individual_reviews
        salesforce
        shipping
        shipping.cases
        shipping.destination_markups
        shipping.destination_restrictions
        shipping.distribution_centers
        shipping.methods
        shipping.package_requirements
        tax
        third_party_email_marketing
        variations
        wishlist_member
     */
    // $expand = "kit_definition,options,shipping,tax,variations"; // just some random ones.  contact us if you're unsure
    $expand = "reviews,reviews.individual_reviews";  // changed the random above to reviews to illustrate accessing product reviews.
    $api_response = $item_api->getItem($merchant_item_oid, $expand, false);
    $item = $api_response->getItem();

    $item_reviews = $item->getReviews();
    $individual_reviews = $item_reviews->getIndividualReviews();
    // do whatever you wish with the reviews.  iterate them, print them, etc.
    // if you need the reviewer information
    foreach ($individual_reviews as $individual_review) {

        // if you need reviewer profile questions, such as "How often do you use this product?", access the
        // rating names and scores.  these are configurable by merchant, so we do not know what your questions may be.
        // See Home -> Configuration -> Items -> Reviews -> Settings
        // Or this URL: https://secure.ultracart.com/merchant/item/review/reviewSettingsLoad.do
        $individual_review->getRatingName1(); // <-- this will not be the full question, but a key string.
        $individual_review->getRatingScore1();

        // if you need the review information, access that via their customer object.  Be careful.  This can result
        // in a LOT of API calls and exhaust your limit.  You may wish to add 'sleep' calls to your loop and cache
        // these results daily or weekly.
        $customer_response = $customer_api->getCustomer($individual_review->getCustomerProfileOid(), "reviewer");
        $customer = $customer_response->getCustomer();
        $reviewer = $customer->getReviewer();
    }

    echo 'The following item was retrieved via getItem():';
    var_dump($item);

    deleteSampleItem($item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemByMerchantItemId()`

```php
getItemByMerchantItemId($merchant_item_id, $_expand, $_placeholders): \ultracart\v2\models\ItemResponse
```

Retrieve an item by item id

Retrieves a single item using the specified item id.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

// Of the two getItem methods, you'll probably always use getItemByMerchantItemId instead of this one.
// Most item work is done with the item id, not the item oid.   The latter is only meaningful as a primary
// key in the UltraCart databases.  But here is an example of using getItem().  We take the long route here
// of retrieving the item using getItemByMerchantItemId to obtain the oid rather than hard-coding it.  We do this
// because these samples are used in our quality control system and run repeatedly.

try {

    $item_id = insertSampleItem();

    $item_api = Samples::getItemApi();

    // The real devil in the getItem calls is the expansion, making sure you return everything you need without
    // returning everything since these objects are extremely large.
    // These are the possible expansion values.
    /*
        accounting
        amember
        auto_order
        auto_order.steps
        ccbill
        channel_partner_mappings
        chargeback
        checkout
        content
        content.assignments
        content.attributes
        content.multimedia
        content.multimedia.thumbnails
        digital_delivery
        ebay
        email_notifications
        enrollment123
        gift_certificate
        google_product_search
        kit_definition
        identifiers
        instant_payment_notifications
        internal
        options
        payment_processing
        physical
        pricing
        pricing.tiers
        realtime_pricing
        related
        reporting
        restriction
        reviews
        salesforce
        shipping
        shipping.cases
        shipping.destination_markups
        shipping.destination_restrictions
        shipping.distribution_centers
        shipping.methods
        shipping.package_requirements
        tax
        third_party_email_marketing
        variations
        wishlist_member
     */
    $expand = "kit_definition,options,shipping,tax,variations"; // just some random ones.  contact us if you're unsure
    $api_response = $item_api->getItemByMerchantItemId($item_id, $expand, false);
    $item = $api_response->getItem();

    echo 'The following item was retrieved via getItemByMerchantItemId():';
    var_dump($item);

    deleteSampleItem($item_id);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemShippingDistributionCenterByCode()`

```php
getItemShippingDistributionCenterByCode($merchant_item_oid, $distribution_center_code, $_expand, $_placeholders): \ultracart\v2\models\ItemShippingDistributionCenterResponse
```

Retrieve an item shipping distribution center

Retrieve an item shipping distribution center.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to retrieve. |
 **distribution_center_code** | **string**|  |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemShippingDistributionCenterResponse**](../Model/ItemShippingDistributionCenterResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItems()`

```php
getItems($parent_category_id, $parent_category_path, $_limit, $_offset, $_since, $_sort, $_expand, $_placeholders): \ultracart\v2\models\ItemsResponse
```

Retrieve items

Retrieves a group of items from the account.  If no parameters are specified, all items will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

set_time_limit(3000); // pull all records could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to retrieve items.  When dealing with items, please note that categories are
 * essentially folders to organize and store items.  They are only used for that purpose and play no role in
 * the checkout process or in the storefront display of items.  So you may organize your items as best serves
 * you.  We're often asked why was use the word 'category' instead of 'folder'.   We started down the road of
 * item management 27 years ago with the word 'category', and it's too much trouble to change.  So items are
 * managed by categories, not folders.  But they are folders.  :)
 * The call takes two possible parameters:
 * 1) parentCategoryId: This is a number which uniquely identifies a category in our system.  Not easy to determine.
 * 2) parentCategoryPath: This is the folder path you wish to retrieve, starting with a forward slash "/"
 * If you provide neither of these values, all items are returned.
 */

use ultracart\v2\api\ItemApi;
use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';


$item_api = Samples::getItemApi();


/**
 * @throws ApiException
 */
function getItemChunk(ItemApi $item_api, int $offset, int $limit): array
{

    // The real devil in the getItem calls is the expansion, making sure you return everything you need without
    // returning everything since these objects are extremely large.
    // These are the possible expansion values.
    /*
    accounting                      amember                     auto_order                      auto_order.steps
    ccbill                          channel_partner_mappings    chargeback                      checkout
    content                         content.assignments         content.attributes              content.multimedia
    content.multimedia.thumbnails   digital_delivery            ebay                            email_notifications
    enrollment123                   gift_certificate            google_product_search           kit_definition
    identifiers                     instant_payment_notifications   internal                    options
    payment_processing              physical                    pricing                         pricing.tiers
    realtime_pricing                related                     reporting                       restriction
    reviews                         salesforce                  shipping                        shipping.cases
    tax                             third_party_email_marketing variations                      wishlist_member
    shipping.destination_markups
    shipping.destination_restrictions
    shipping.distribution_centers
    shipping.methods
    shipping.package_requirements
     */
    $expand = "kit_definition,options,shipping,tax,variations"; // just some random ones.  contact us if you're unsure

    $parent_category_id = null;
    $parent_category_path = null;
    $_since = null;
    $_sort = null;
    $api_response = $item_api->getItems($parent_category_id, $parent_category_path, $limit, $offset, $_since,
        $_sort, $expand, false);

    if ($api_response->getItems() != null) {
        return $api_response->getItems();
    }
    return [];
}

$items = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

try {
    while ($more_records_to_fetch) {

        echo "executing iteration " . $iteration . '<br>';

        $chunk_of_items = getItemChunk($item_api, $offset, $limit);
        $orders = array_merge($items, $chunk_of_items);
        $offset = $offset + $limit;
        $more_records_to_fetch = count($chunk_of_items) == $limit;
        $iteration++;
    }
} catch (ApiException $e) {
    echo 'ApiException occurred on iteration ' . $iteration;
    var_dump($e);
    die(1);
}


// this will be verbose...
var_dump($items);
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricingTiers()`

```php
getPricingTiers($_expand): \ultracart\v2\models\PricingTiersResponse
```

Retrieve pricing tiers

Retrieves the pricing tiers


### Example

```php
<?php

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';

$item_api = Samples::getItemApi();


try {
    /*
     * Possible expansion values for PricingTier object:
     * approval_notification
     * signup_notification
     */

    $expand = "approval_notification,signup_notification";
    $api_response = $item_api->getPricingTiers($expand);

} catch (ApiException $e) {
    echo 'ApiException occurred.';
    var_dump($e);
    die(1);
}

var_dump($api_response->getPricingTiers());
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReview()`

```php
getReview($review_oid, $merchant_item_oid): \ultracart\v2\models\ItemReviewResponse
```

Get a review

Retrieve an item review.


### Example

```php
<?php

use ultracart\v2\api\ItemApi;

ini_set('display_errors', 1);

/*
    Retrieves a specific user review for an item.  This would most likely be used by a merchant who has cached all
    reviews on a separate site and then wishes to update a particular review.  It's always best to "get" the object,
    make changes to it, then call the update instead of trying to recreate the object from scratch.

    The merchant_item_oid is a unique identifier used by UltraCart.  If you do not know your item's oid, call
    ItemApi.getItemByMerchantItemId() to retrieve the item, and then it's oid $item->getMerchantItemOid()

    The review_oid is a unique identifier used by UltraCart.  If you do not know a review's oid, call
    ItemApi.getReviews() to get all reviews where you can then grab the oid from an item.


 */


require_once '../vendor/autoload.php';
require_once '../constants.php';


$item_api = ItemApi::usingApiKey(Constants::API_KEY);
$merchant_item_oid = 123456;
$review_oid = 987654;
$api_response = $item_api->getReview($review_oid, $merchant_item_oid);



if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$review = $api_response->getReview();

echo '<html lang="en"><body><pre>';
var_dump($review);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **review_oid** | **int**| The review oid to retrieve. |
 **merchant_item_oid** | **int**| The item oid the review is associated with. |

### Return type

[**\ultracart\v2\models\ItemReviewResponse**](../Model/ItemReviewResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReviews()`

```php
getReviews($merchant_item_oid): \ultracart\v2\models\ItemReviewsResponse
```

Get reviews for an item

Retrieve item reviews.


### Example

```php
<?php

use ultracart\v2\api\ItemApi;

ini_set('display_errors', 1);

/*
    Retrieves all user reviews for an item.

    The merchant_item_oid is a unique identifier used by UltraCart.  If you do not know your item's oid, call
    ItemApi.getItemByMerchantItemId() to retrieve the item, and then it's oid $item->getMerchantItemOid()



 */


require_once '../vendor/autoload.php';
require_once '../constants.php';


$item_api = ItemApi::usingApiKey(Constants::API_KEY);
$merchant_item_oid = 123456;
$api_response = $item_api->getReviews($merchant_item_oid);


if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$reviews = $api_response->getReviews();

echo '<html lang="en"><body><pre>';
foreach ($reviews as $review) {
    var_dump($review);
}
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid the review is associated with. |

### Return type

[**\ultracart\v2\models\ItemReviewsResponse**](../Model/ItemReviewsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnassociatedDigitalItems()`

```php
getUnassociatedDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders): \ultracart\v2\models\ItemDigitalItemsResponse
```

Retrieve digital items from the digital library (which are digital files that may be attached to normal items) not yet associated with actual items

Retrieves a group of digital items (file information) from the account that are not yet associated with any actual items.  If no parameters are specified, all digital items will be returned.  Be aware that these are not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated with normal items.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    /*
        Please Note!
        Digital Items are not normal items you sell on your site.  They are digital files that you may add to
        a library and then attach to a normal item as an accessory or the main item itself.
        See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376485/Digital+Items

        Retrieves a group of digital items (file information) from the account that are not yet associated with any
        actual items.  If no parameters are specified, all digital items will be returned.  Be aware that these are
        not normal items that can be added to a shopping cart. Rather, they are digital files that may be associated
        with normal items.  You will need to make multiple API calls in order to retrieve the entire result set since
        this API performs result set pagination.

        Default sort order: original_filename
        Possible sort orders: original_filename, description, file_size
     */

    $digital_item_oid = insertSampleDigitalItem(); // create an item that will be unassociated.
    $item_api = Samples::getItemApi();

    $_limit = 100;
    $_offset = 0;
    $_since = null; //  digital items do not use since.  leave as null.
    $_sort = null; // if null, use default of original_filename
    $_expand = null; // digital items have no expansion.  leave as null.  this value is ignored
    $_placeholders = null; // digital items have no placeholders. leave as null.

    $api_response = $item_api->getUnassociatedDigitalItems($_limit, $_offset, $_since, $_sort, $_expand, $_placeholders);
    $digital_items = $api_response->getDigitalItems(); // assuming this succeeded

    echo 'The following items were retrieved via getUnassociatedDigitalItems():';
    foreach ($digital_items as $digital_item) {
        var_dump($digital_item);
    }


} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertDigitalItem()`

```php
insertDigitalItem($digital_item): \ultracart\v2\models\ItemDigitalItemResponse
```

Create a file within the digital library

Create a file within the digital library.  This does not create an item, but makes this digital file available and selectable as part (or all) of an item.


### Example

```php
<?php

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $digital_item_oid = insertSampleDigitalItem();
    deleteSampleDigitalItem($digital_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertItem()`

```php
insertItem($item, $_expand, $_placeholders): \ultracart\v2\models\ItemResponse
```

Create an item

Create a new item on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $item_id = insertSampleItem();
    deleteSampleItem($item_id);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}


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

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertReview()`

```php
insertReview($merchant_item_oid, $review): \ultracart\v2\models\ItemReviewResponse
```

Insert a review

Insert a item review.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details


try {

    // To insert a review, you'll need an item's OID (Object Identifier) first.  So for this example, we create
    // a sample item first, then retrieve it by item id to fetch the item oid.

    echo '<pre>';
    $item_id = insertSampleItem();
    echo '</pre>';
    $item_api = Samples::getItemApi(); // convenience fuction for getting an api handle.

    $expand = 'reviews'; // expand string is 'reviews' because we'll need to update the sample item's review template below.
    // list of expansions for item object: https://www.ultracart.com/api/#resource_item.html

    $item_response = $item_api->getItemByMerchantItemId($item_id, $expand, null);
    $item = $item_response->getItem();
    $item_oid = $item->getMerchantItemOid();

    // The target item must have a review template associated before you may attach a review.
    // You may create a review template here:
    // https://secure.ultracart.com/merchant/item/review/reviewTemplateListLoad.do
    // We're using a review template from our development system and it will not work for you.
    // Once you have a review template, update your item either via our gui or the rest api.
    // GUI: secure.ultracart.com -> Home -> Items -> <your item> -> Edit -> Review tab
    // Since we're using a sample item we just created above (line 17), we'll update via the rest api.
    // The rest api requires the review template oid, which is found on the template screen (url on line 25 above)

    $review_template_oid = 402;
    $reviews = new ultracart\v2\models\ItemReviews();
    $reviews->setReviewTemplateOid($review_template_oid);
    $item->setReviews($reviews);
    $item = $item_api->updateItem($item_oid, $item, $expand, null)->getItem();


    // You will need to know what your product review looks like.
    $review = new ultracart\v2\models\ItemReview();
    $review->setTitle('Best Product Ever!');
    $review->setReview("I loved this product.  I bought it for my wife and she was so happy she cried.  blah blah blah");
    $review->setReviewedNickname("Bob420");
    $review->setFeatured(true); // featured? sure. why not? this is a great review.
    $review->setRatingName1('Durability');
    $review->setRatingName2('Price');
    $review->setRatingName3('Performance');
    $review->setRatingName4('Appearance');
    $review->setRatingScore1(4.5);
    $review->setRatingScore2(3.5);
    $review->setRatingScore3(2.5);
    $review->setRatingScore4(1.5);
    $review->setOverall(5.0); // hooray!
    $review->setReviewerLocation("Southside Chicago");
    $review->setStatus('approved');
    // insert the review and update our local variable to see how the review looks now.
    $review = $item_api->insertReview($item_oid, $review)->getReview();

    echo '<br>This is my review object:<br><pre>';
    var_dump($review);
    echo '</pre>';

    // This will clean up the sample item, but you may wish to review the item in the backend or on your website first.
    // deleteSampleItem($item_id);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid the review is associated with. |
 **review** | [**\ultracart\v2\models\ItemReview**](../Model/ItemReview.md)| Review to insert |

### Return type

[**\ultracart\v2\models\ItemReviewResponse**](../Model/ItemReviewResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertUpdateItemContentAttribute()`

```php
insertUpdateItemContentAttribute($merchant_item_oid, $item_attribute)
```

Upsert an item content attribute

Update an item content attribute, creating it new if it does not yet exist.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
    While UltraCart provides a means for updating item content, it is StoreFront specific.  This method allows for
    item-wide update of content, such as SEO fields. The content attribute has three fields:
    1) name
    2) value
    3) type: boolean,color,definitionlist,html,integer,mailinglist,multiline,rgba,simplelist,string,videolist

    The SEO content has the following names:
    Item Meta Title = "storefrontSEOTitle"
    Item Meta Description = "storefrontSEODescription"
    Item Meta Keywords = "storefrontSEOKeywords"

    The merchant_item_oid is a unique identifier used by UltraCart.  If you do not know your item's oid, call
    ItemApi.getItemByMerchantItemId() to retrieve the item, and then it's oid $item->getMerchantItemOid()

    Success will return back a status code of 204 (No Content)

 */


use ultracart\v2\api\ItemApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$item_api = ItemApi::usingApiKey(Constants::API_KEY);
$merchant_item_oid = 12345;

$attribute = new \ultracart\v2\models\ItemContentAttribute();
$attribute->setName("storefrontSEOKeywords");
$attribute->setValue('dog,cat,fish');
$attribute->setType("string");

$item_api->insertUpdateItemContentAttribute($merchant_item_oid, $attribute);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to modify. |
 **item_attribute** | [**\ultracart\v2\models\ItemContentAttribute**](../Model/ItemContentAttribute.md)| Item content attribute to upsert |

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

## `updateDigitalItem()`

```php
updateDigitalItem($digital_item_oid, $digital_item): \ultracart\v2\models\ItemDigitalItemResponse
```

Updates a file within the digital library

Updates a file within the digital library.  This does not update an item, but updates a digital file available and selectable as part (or all) of an item.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $digital_item_oid = insertSampleDigitalItem();

    $item_api = Samples::getItemApi();
    $api_response = $item_api->getDigitalItem($digital_item_oid);
    $digital_item = $api_response->getDigitalItem();

    $digital_item->setDescription("I have updated the description to this sentence.");
    $digital_item->setClickWrapAgreement("You hereby agree that the earth is round.  No debate.");

    $item_api->updateDigitalItem($digital_item_oid, $digital_item);

    deleteSampleDigitalItem($digital_item_oid);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItem()`

```php
updateItem($merchant_item_oid, $item, $_expand, $_placeholders): \ultracart\v2\models\ItemResponse
```

Update an item

Update a new item on the UltraCart account.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details


try {

    $item_id = insertSampleItem();

    $item_api = Samples::getItemApi();

    // See one of the getItem or getItems samples for possible expansion values
    // See also: https://www.ultracart.com/api/#resource_item.html
    $expand = "pricing";
    $api_response = $item_api->getItemByMerchantItemId($item_id, $expand, false);
    $item = $api_response->getItem();
    $original_price = $item->getPricing()->getCost();

    // update the price of the item.
    $item_pricing = $item->getPricing();
    $item_pricing->setCost(12.99);

    $api_response = $item_api->updateItem($item->getMerchantItemOid(), $item, $expand, false);
    $updated_item = $api_response->getItem();

    // ensure the price was updated.
    echo 'Original Price: ' . $original_price;
    echo 'Updated Price: ' . $updated_item->getPricing()->getCost();

    deleteSampleItem($item_id);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to update. |
 **item** | [**\ultracart\v2\models\Item**](../Model/Item.md)| Item to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemInventories()`

```php
updateItemInventories($item_inventory_update_request)
```

Update item inventories for a distribution center

Update item inventories for a distribution center


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_inventory_update_request** | [**\ultracart\v2\models\ItemInventoryUpdateRequest**](../Model/ItemInventoryUpdateRequest.md)| Item inventory updates |

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

## `updateItemShippingDistributionCenterByCode()`

```php
updateItemShippingDistributionCenterByCode($merchant_item_oid, $distribution_center_code, $item_shipping_distribution_center)
```

Update an item shipping distribution center

Update an item shipping distribution center


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_item_oid** | **int**| The item oid to update. |
 **distribution_center_code** | **string**|  |
 **item_shipping_distribution_center** | [**\ultracart\v2\models\ItemShippingDistributionCenter**](../Model/ItemShippingDistributionCenter.md)| Item shipping distribution center |

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

## `updateItems()`

```php
updateItems($items_request, $_expand, $_placeholders, $_async): \ultracart\v2\models\ItemsResponse
```

Update multiple items

Update multiple item on the UltraCart account.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;
use ultracart\v2\models\ItemsRequest;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details

try {

    $item_id1 = insertSampleItem();
    $item_id2 = insertSampleItem();

    $item_api = Samples::getItemApi();

    // See one of the getItem or getItems samples for possible expansion values
    // See also: https://www.ultracart.com/api/#resource_item.html
    $expand = "pricing";
    $api_response = $item_api->getItemByMerchantItemId($item_id1, $expand, false);
    $item1 = $api_response->getItem();
    $api_response = $item_api->getItemByMerchantItemId($item_id2, $expand, false);
    $item2 = $api_response->getItem();



    // update the price of the item.
    $item1->getPricing()->setCost(12.99);
    $item2->getPricing()->setCost(14.99);

    $update_items_request = new ItemsRequest();
    $items = [$item1, $item2];
    $update_items_request->setItems($items);
    $api_response = $item_api->updateItems($update_items_request, $expand, false, false);


    deleteSampleItem($item_id1);
    deleteSampleItem($item_id2);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
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

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReview()`

```php
updateReview($review_oid, $merchant_item_oid, $review): \ultracart\v2\models\ItemReviewResponse
```

Update a review

Update an item review.


### Example

```php
<?php
/** @noinspection SpellCheckingInspection */
/** @noinspection GrazieInspection */

use ultracart\v2\ApiException;

require_once '../vendor/autoload.php';
require_once '../samples.php';
require_once './item_functions.php'; // <-- see this file for details


try {

    // To update a review, you'll need an item's OID (Object Identifier) and the review oid first.

    $merchant_item_oid = 99998888; // if you don't know your oid, call getItemByMerchantItemId() to get your item, then get the oid.
    $review_oid = 123456; // this is the particular oid you wish to update.

    $item_api = Samples::getItemApi(); // convenience fuction for getting an api handle.
    $review = $item_api->getReview($merchant_item_oid, $review_oid)->getReview();

    // You will need to know what your product review looks like.
    $review->setTitle('Best Product Ever!');
    $review->setReview("I loved this product.  I bought it for my wife and she was so happy she cried.  blah blah blah");
    $review->setReviewedNickname("Bob420");
    $review->setFeatured(true); // featured? sure. why not? this is a great review.
    $review->setRatingName1('Durability');
    $review->setRatingName2('Price');
    $review->setRatingName3('Performance');
    $review->setRatingName4('Appearance');
    $review->setRatingScore1(4.5);
    $review->setRatingScore2(3.5);
    $review->setRatingScore3(2.5);
    $review->setRatingScore4(1.5);
    $review->setOverall(5.0); // hooray!
    $review->setReviewerLocation("Southside Chicago");
    $review->setStatus('approved');
    // insert the review and update our local variable to see how the review looks now.
    $review = $item_api->updateReview($review_oid, $merchant_item_oid, $review)->getReview();

    echo '<br>This is my review object:<br><pre>';
    var_dump($review);
    echo '</pre>';

    // This will clean up the sample item, but you may wish to review the item in the backend or on your website first.
    // deleteSampleItem($item_id);

} catch (ApiException $e) {
    echo 'An ApiException occurred.  Please review the following error:';
    var_dump($e); // <-- change_me: handle gracefully
    die(1);
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **review_oid** | **int**| The review oid to update. |
 **merchant_item_oid** | **int**| The item oid the review is associated with. |
 **review** | [**\ultracart\v2\models\ItemReview**](../Model/ItemReview.md)| Review to update |

### Return type

[**\ultracart\v2\models\ItemReviewResponse**](../Model/ItemReviewResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadTemporaryMultimedia()`

```php
uploadTemporaryMultimedia($file): \ultracart\v2\models\TempMultimediaResponse
```

Upload an image to the temporary multimedia.

Uploads an image and returns back meta information about the image as well as the identifier needed for the item update.


### Example

```php
<?php
// This method is used internally by UltraCart.
// We don't envision a scenario where a merchant would ever need to call this.
// As such, we're not providing a sample for it.  If you can think of a use for this
// method, contact us, and we'll help you work through it.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| File to upload |

### Return type

[**\ultracart\v2\models\TempMultimediaResponse**](../Model/TempMultimediaResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
