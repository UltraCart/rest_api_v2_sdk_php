# ultracart\v2\CouponApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCoupon()**](CouponApi.md#deleteCoupon) | **DELETE** /coupon/coupons/{coupon_oid} | Delete a coupon
[**deleteCouponsByCode()**](CouponApi.md#deleteCouponsByCode) | **DELETE** /coupon/coupons/by_code | Deletes multiple coupons
[**deleteCouponsByOid()**](CouponApi.md#deleteCouponsByOid) | **DELETE** /coupon/coupons/by_oid | Deletes multiple coupons
[**doesCouponCodeExist()**](CouponApi.md#doesCouponCodeExist) | **GET** /coupon/coupons/merchant_code/{merchant_code}/exists | Determines if a coupon merchant code already exists
[**generateCouponCodes()**](CouponApi.md#generateCouponCodes) | **POST** /coupon/coupons/{coupon_oid}/generate_codes | Generates one time codes for a coupon
[**generateOneTimeCodesByMerchantCode()**](CouponApi.md#generateOneTimeCodesByMerchantCode) | **POST** /coupon/coupons/merchant_code/{merchant_code}/generate_codes | Generates one time codes by merchant code
[**getAutoApply()**](CouponApi.md#getAutoApply) | **GET** /coupon/auto_apply | Retrieve auto apply rules and conditions
[**getCoupon()**](CouponApi.md#getCoupon) | **GET** /coupon/coupons/{coupon_oid} | Retrieve a coupon
[**getCouponByMerchantCode()**](CouponApi.md#getCouponByMerchantCode) | **GET** /coupon/coupons/merchant_code/{merchant_code} | Retrieve a coupon by merchant code
[**getCoupons()**](CouponApi.md#getCoupons) | **GET** /coupon/coupons | Retrieve coupons
[**getCouponsByQuery()**](CouponApi.md#getCouponsByQuery) | **POST** /coupon/coupons/query | Retrieve coupons by query
[**getEditorValues()**](CouponApi.md#getEditorValues) | **GET** /coupon/editor_values | Retrieve values needed for a coupon editor
[**insertCoupon()**](CouponApi.md#insertCoupon) | **POST** /coupon/coupons | Insert a coupon
[**insertCoupons()**](CouponApi.md#insertCoupons) | **POST** /coupon/coupons/batch | Insert multiple coupons
[**searchItems()**](CouponApi.md#searchItems) | **GET** /coupon/searchItems | Searches for items to display within a coupon editor and assign to coupons
[**updateAutoApply()**](CouponApi.md#updateAutoApply) | **POST** /coupon/auto_apply | Update auto apply rules and conditions
[**updateCoupon()**](CouponApi.md#updateCoupon) | **PUT** /coupon/coupons/{coupon_oid} | Update a coupon
[**updateCoupons()**](CouponApi.md#updateCoupons) | **PUT** /coupon/coupons/batch | Update multiple coupons
[**uploadCouponCodes()**](CouponApi.md#uploadCouponCodes) | **POST** /coupon/coupons/{coupon_oid}/upload_codes | Upload one-time codes for a coupon


## `deleteCoupon()`

```php
deleteCoupon($coupon_oid)
```

Delete a coupon

Delete a coupon on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 123456789;

$coupon_api->deleteCoupon($coupon_oid);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_oid** | **int**| The coupon_oid to delete. |

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

## `deleteCouponsByCode()`

```php
deleteCouponsByCode($coupon_delete_request)
```

Deletes multiple coupons

Delete coupons on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponDeletesRequest;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$merchant_code = '10OFF';
$deleteRequest = new CouponDeletesRequest();
$deleteRequest->setCouponCodes([$merchant_code]);

$coupon_api->deleteCouponsByCode($deleteRequest);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_delete_request** | [**\ultracart\v2\models\CouponDeletesRequest**](../Model/CouponDeletesRequest.md)| Coupon oids to delete |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCouponsByOid()`

```php
deleteCouponsByOid($coupon_delete_request)
```

Deletes multiple coupons

Delete coupons on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponDeletesRequest;

require_once '../vendor/autoload.php';

// This method is useful if you have the coupons stored in your own system along with their coupon_oids.  If not,
// just use deleteCouponsByCode()

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$deleteRequest = new CouponDeletesRequest();
$deleteRequest->setCouponOids([1234567, 2345678, 3456789]);

$coupon_api->deleteCouponsByOid($deleteRequest);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_delete_request** | [**\ultracart\v2\models\CouponDeletesRequest**](../Model/CouponDeletesRequest.md)| Coupon oids to delete |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `doesCouponCodeExist()`

```php
doesCouponCodeExist($merchant_code): \ultracart\v2\models\CouponExistsResponse
```

Determines if a coupon merchant code already exists

Determines if a coupon merchant code already exists.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$merchant_code = '10OFF';

$api_response = $coupon_api->doesCouponCodeExist($merchant_code);
$coupon_exists = $api_response->getExists();

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The coupon merchant code to examine. |

### Return type

[**\ultracart\v2\models\CouponExistsResponse**](../Model/CouponExistsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCouponCodes()`

```php
generateCouponCodes($coupon_oid, $coupon_codes_request): \ultracart\v2\models\CouponCodesResponse
```

Generates one time codes for a coupon

Generate one time codes for a coupon


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponCodesRequest;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 12345678;  // if you don't know your coupon_oid, use generateOneTimeCodesByMerchantCode.  same results

$codesRequest = new CouponCodesRequest();
$codesRequest->setQuantity(100); // give me 100 codes.
$codesRequest->setExpirationDts(date('Y-m-d', strtotime('90 days')) . "T00:00:00+00:00"); // do you want the codes to expire?
// $codesRequest->setExpirationSeconds(); // also an option for short-lived coupons

$api_response =  $coupon_api->generateCouponCodes($coupon_oid, $codesRequest);
$coupon_codes = $api_response->getCouponCodes();

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_oid** | **int**| The coupon oid to generate codes. |
 **coupon_codes_request** | [**\ultracart\v2\models\CouponCodesRequest**](../Model/CouponCodesRequest.md)| Coupon code generation parameters |

### Return type

[**\ultracart\v2\models\CouponCodesResponse**](../Model/CouponCodesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOneTimeCodesByMerchantCode()`

```php
generateOneTimeCodesByMerchantCode($merchant_code, $coupon_codes_request): \ultracart\v2\models\CouponCodesResponse
```

Generates one time codes by merchant code

Generate one time codes by merchant code


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponCodesRequest;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$merchant_code = '10OFF';

$codesRequest = new CouponCodesRequest();
$codesRequest->setQuantity(100); // give me 100 codes.
$codesRequest->setExpirationDts(date('Y-m-d', strtotime('90 days')) . "T00:00:00+00:00"); // do you want the codes to expire?
// $codesRequest->setExpirationSeconds(); // also an option for short-lived coupons

$api_response =  $coupon_api->generateOneTimeCodesByMerchantCode($merchant_code, $codesRequest);
$coupon_codes = $api_response->getCouponCodes();

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The merchant code to generate one time codes. |
 **coupon_codes_request** | [**\ultracart\v2\models\CouponCodesRequest**](../Model/CouponCodesRequest.md)| Coupon code generation parameters |

### Return type

[**\ultracart\v2\models\CouponCodesResponse**](../Model/CouponCodesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoApply()`

```php
getAutoApply(): \ultracart\v2\models\CouponAutoApplyConditions
```

Retrieve auto apply rules and conditions

Retrieve auto apply rules and conditions


### Example

```php
<?php

/*
    getAutoApply returns back the items and subtotals that trigger "auto coupons", i.e. coupons that are automatically
    added to a shopping cart.  The manual configuration of auto coupons is at the bottom of the main coupons screen.
    See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376525/Coupons#Coupons-Navigation

 */

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$api_response =  $coupon_api->getAutoApply();
echo 'These are the subtotal levels:<br>';
foreach ($api_response->getSubtotalLevels() as $subtotalLevel) {
    var_dump($subtotalLevel);
    echo '<br>';
}
echo 'These are the item triggers:<br>';
foreach ($api_response->getRequiredItems() as $requiredItem) {
    var_dump($requiredItem);
    echo '<br>';
}


```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CouponAutoApplyConditions**](../Model/CouponAutoApplyConditions.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupon()`

```php
getCoupon($coupon_oid, $_expand): \ultracart\v2\models\CouponResponse
```

Retrieve a coupon

Retrieves a single coupon using the specified coupon profile oid.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 123456789;

$_expand = null; // coupons do not have expansions
$api_response = $coupon_api->getCoupon($coupon_oid, $_expand);

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_oid** | **int**| The coupon oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponByMerchantCode()`

```php
getCouponByMerchantCode($merchant_code, $_expand): \ultracart\v2\models\CouponResponse
```

Retrieve a coupon by merchant code

Retrieves a single coupon using the specified merchant code.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$api_response = $coupon_api->getCouponByMerchantCode('10OFF');

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| The coupon merchant code to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoupons()`

```php
getCoupons($merchant_code, $description, $coupon_type, $start_date_begin, $start_date_end, $expiration_date_begin, $expiration_date_end, $affiliate_oid, $exclude_expired, $_limit, $_offset, $_sort, $_expand): \ultracart\v2\models\CouponsResponse
```

Retrieve coupons

Retrieves coupons for this account.  If no parameters are specified, all coupons will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php
// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
// Error help: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/39077885/Troubleshooting+API+Errors
// Additional Docs: https://www.ultracart.com/api/#introduction.html

// This is an old example.  Please see getCouponsByQuery as they do essentially the same thing, but 
// getCouponsByQuery is easier to use.

use ultracart\v2\api\CouponApi;
use ultracart\v2\ApiException;
use ultracart\v2\models\Coupon;

require_once '../vendor/autoload.php';
$coupon_api = ultracart\v2\api\CouponApi::usingApiKey(Constants::API_KEY);
?>

<?php
/**
 * returns a block of customers
 * @param CouponApi $coupon_api
 * @param int $offset pagination variable
 * @param int $limit pagination variable.  max server will allow is 200
 * @return array|Coupon[]
 * @throws ApiException
 */
function get_coupons_chunk(CouponApi $coupon_api, int $offset = 0, int $limit = 200) {
    
    // TODO: consider using getCouponsByQuery() as it does not require all search parameters
    $merchant_code = null;
    $description = null;
    $coupon_type = null;
    $start_date_begin = null;
    $start_date_end = null;
    $expiration_date_begin = null;
    $expiration_date_end = null;
    $affiliate_oid = null;
    $exclude_expired = null;
    
    $_limit = $limit;
    $_offset = $offset;
    $_sort = null;
    $_expand = null; // getCoupons doesn't have any expansions.  full record is always returned.

    $get_response = $coupon_api->getCoupons($merchant_code, $description, $coupon_type, $start_date_begin, $start_date_end, $expiration_date_begin, $expiration_date_end, $affiliate_oid, $exclude_expired, $_limit, $_offset, $_sort, $_expand);
    if($get_response->getSuccess()){
        return $get_response->getCoupons();
    }

    return array();
}
?>

<html>
<body>

<?php
$coupons = array();
try {

    $iteration = 1;
    $offset = 0;
    $limit = 200;  
    $need_more_records = true;
    while($need_more_records){

        echo "executing iteration #" . $iteration++ . "<br>";
        $block_of_customers = get_coupons_chunk($coupon_api, $offset, $limit);
        foreach($block_of_customers as $coupon){
            $coupons[] = $coupon;
        }

        $offset += $limit;
        $need_more_records = count($block_of_customers) == $limit;
        // sleep(1);  // I'm testing rate limiter headers.  this should probably be uncommented.  maybe.
    }

} catch (ApiException $e) {
    echo 'API Exception when calling CouponApi->getCoupons: ', $e->getMessage(), PHP_EOL;
    echo print_r($e->getResponseBody()), PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}

echo '<pre>';
var_dump($coupons);
echo '</pre>';

?>
</body>
</html>
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_code** | **string**| Merchant code | [optional]
 **description** | **string**| Description | [optional]
 **coupon_type** | **string**| Coupon type | [optional]
 **start_date_begin** | **string**| Start date begin | [optional]
 **start_date_end** | **string**| Start date end | [optional]
 **expiration_date_begin** | **string**| Expiration date begin | [optional]
 **expiration_date_end** | **string**| Expiration date end | [optional]
 **affiliate_oid** | **int**| Affiliate oid | [optional]
 **exclude_expired** | **bool**| Exclude expired | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the coupons.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCouponsByQuery()`

```php
getCouponsByQuery($coupon_query, $_limit, $_offset, $_sort, $_expand): \ultracart\v2\models\CouponsResponse
```

Retrieve coupons by query

Retrieves coupons from the account.  If no parameters are specified, all coupons will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

set_time_limit(3000); // pull all orders could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
retrieves coupons by query.  Can filter on specific coupons or return back all coupons.  Support pagination.
A note about the coupon type below.  Those are string literals representing coupons.  This method is used UltraCart's
backend, and it uses a dropdown box for that value showing friendly descriptions of them.

It's not anticipated a merchant would need to query by coupon type, but in the event you do, here's the list of constants:
"BOGO limit L"
"Free shipping method Y"
"Free shipping method Y with purchase of items Z"
"Free shipping method Y with subtotal Z"
"Free shipping on item Z"
"Free X with purchase of Y dollars limit L"
"Free X with purchase of Y dollars limit L and shipping Z"
"Free X with purchase of Y limit L"
"Free X with purchase of Y limit L and free shipping"
"I Free X with every J purchase of Y limit L"
"I Free X with every J purchase of Y mix and match group limit L"
"Item X for Y with purchase of Z limit L"
"multiple X $ off item Z limit L"
"No discount"
"Tiered Dollar Off Subtotal"
"Tiered % off items Z limit L"
"Tiered $ off item Z limit L"
"Tiered Percent off shipping methods Y with subtotal Z"
"Tiered Percent Off Subtotal"
"X dollars off shipping method Y with purchase of items Z"
"X dollars off subtotal with purchase Y items"
"X $ for item Z limit L"
"X more loyalty cashback"
"X more loyalty points"
"X % off item Z and free shipping"
"X $ off item Z limit L"
"X % off item Z limit L"
"X % off msrp item Z limit L"
"X % off retail item Z limit L"
"X $ off shipping method Y"
"X % off shipping method Y"
"X $ off subtotal"
"X % off subtotal"
"X $ off subtotal and shipping"
"X % off subtotal free shipping method Y"
"X % off subtotal limit L"
"X off subtotal with purchase block of L item Y"
"X % off subtotal with purchase of item Y"
"X % off subtotal with purchase of Y"
"X $ off subtotal with Y $ purchase"
"X $ off subtotal with Y $ purchase and free shipping"
"X % off Y with purchase Z limit L"
"X % off Y with T purchase Z limit L"
"X percent more loyalty points"
"X $ shipping method Y with subtotal Z"
"X ? subtotal"
 */

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponQuery;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);


function getCouponChunk(CouponApi $coupon_api, int $offset, int $limit): array
{

    $query = new CouponQuery();
    $query->setMerchantCode('10OFF'); // supports partial matching
    $query->setDescription('Saturday'); // supports partial matching
    // $query->setCouponType(null); // see the note at the top of this sample.
    // $query->setStartDtsBegin(date('Y-m-d', strtotime('-2000 days')) . "T00:00:00+00:00"); // yes, that 2,000 days.
    // $query->setStartDtsEnd(date('Y-m-d', time()) . "T00:00:00+00:00");
    // $query->setExpirationDtsBegin(null);
    // $query->setExpirationDtsEnd(null);
    // $query->setAffiliateOid(0); // this requires an affiliate_oid.  If you need help finding an affiliate's oid, contact support.
    $query->setExcludeExpired(true);

    $_expand = null; // coupons do not have expansions
    $_sort = "merchant_code"; // Possible sorts: "coupon_type", "merchant_code", "description", "start_dts", "expiration_dts", "quickbooks_code"

    $api_response = $coupon_api->getCouponsByQuery($query, $limit, $offset, $_sort, $_expand);
    if($api_response->getCoupons() != null){
        return $api_response->getCoupons();
    }
    return [];
}

$coupons = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

while( $more_records_to_fetch ){

    echo "executing iteration " . $iteration . '<br>';
    $chunk_of_coupons = getCouponChunk($coupon_api, $offset, $limit);
    $coupons = array_merge($coupons, $chunk_of_coupons);
    $offset = $offset + $limit;
    $more_records_to_fetch = count($chunk_of_coupons) == $limit;
    $iteration++;

}

// this could get verbose...
echo '<html lang="en"><body><pre>';
var_dump($coupons);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_query** | [**\ultracart\v2\models\CouponQuery**](../Model/CouponQuery.md)| Coupon query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the coupons.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditorValues()`

```php
getEditorValues(): \ultracart\v2\models\CouponEditorValues
```

Retrieve values needed for a coupon editor

Retrieve values needed for a coupon editor


### Example

```php
<?php
// This is an internal method used by our Coupon management screen.  It returns back all the static data needed
// for our dropdown lists, such as coupon constants.  You can call it if you like, but the data won't be
// of much use.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CouponEditorValues**](../Model/CouponEditorValues.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertCoupon()`

```php
insertCoupon($coupon, $_expand): \ultracart\v2\models\CouponResponse
```

Insert a coupon

Insert a coupon on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\Coupon;
use ultracart\v2\models\CouponAmountOffSubtotal;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);

$coupon = new Coupon();
$coupon->setMerchantCode('11OFF');
$coupon->setDescription("Eleven dollars off subtotal");

// each coupon must have a 'type' defined by creating a child object directly beneath the main Coupon object.
// this is complex and there are a LOT of coupon types.  See the backend (secure.ultracart.com) coupon screens
// to get an idea of what functionality each coupon possesses.  If you're not sure, contact UltraCart support.
$coupon->setAmountOffSubtotal(new CouponAmountOffSubtotal());
$coupon->getAmountOffSubtotal()->setDiscountAmount(11);

// Here are the different coupon types, but beware that new coupons are added frequently.
//CouponAmountOffItems
//CouponAmountOffShipping
//CouponAmountOffShippingWithItemsPurchase
//CouponAmountOffSubtotal
//CouponAmountOffSubtotalAndShipping
//CouponAmountOffSubtotalFreeShippingWithPurchase
//CouponAmountOffSubtotalWithBlockPurchase
//CouponAmountOffSubtotalWithItemsPurchase
//CouponAmountOffSubtotalWithPurchase
//CouponAmountShippingWithSubtotal
//CouponDiscountItems
//CouponDiscountItemWithItemPurchase
//CouponFreeItemAndShippingWithSubtotal
//CouponFreeItemsWithItemPurchase
//CouponFreeItemsWithMixMatchPurchase
//CouponFreeItemWithItemPurchase
//CouponFreeItemWithItemPurchaseAndFreeShipping
//CouponFreeItemWithSubtotal
//CouponFreeShipping
//CouponFreeShippingSpecificItems
//CouponFreeShippingWithItemsPurchase
//CouponFreeShippingWithSubtotal
//CouponMoreLoyaltyCashback
//CouponMoreLoyaltyPoints
//CouponMultipleAmountsOffItems
//CouponNoDiscount
//CouponPercentMoreLoyaltyCashback
//CouponPercentMoreLoyaltyPoints
//CouponPercentOffItems
//CouponPercentOffItemsAndFreeShipping
//CouponPercentOffItemsWithItemsPurchase
//CouponPercentOffItemWithItemsQuantityPurchase
//CouponPercentOffMsrpItems
//CouponPercentOffRetailPriceItems
//CouponPercentOffShipping
//CouponPercentOffSubtotal
//CouponPercentOffSubtotalAndFreeShipping
//CouponPercentOffSubtotalLimit
//CouponPercentOffSubtotalWithItemsPurchase
//CouponPercentOffSubtotalWithSubtotal
//CouponTieredAmountOffItems
//CouponTieredAmountOffSubtotal
//CouponTieredPercentOffItems
//CouponTieredPercentOffShipping
//CouponTieredPercentOffSubtotal
//CouponTieredPercentOffSubtotalBasedOnMSRP
//CouponTierItemDiscount
//CouponTierPercent
//CouponTierQuantityAmount
//CouponTierQuantityPercent

$_expand = null; // coupons do not have expansions
$api_response = $coupon_api->insertCoupon($coupon, $_expand);
echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon** | [**\ultracart\v2\models\Coupon**](../Model/Coupon.md)| Coupon to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertCoupons()`

```php
insertCoupons($coupons_request, $_expand, $_placeholders): \ultracart\v2\models\CouponsResponse
```

Insert multiple coupons

Insert multiple coupon on the UltraCart account.


### Example

```php
<?php

/*
    Similar to insertCoupon except this method takes a request object containing up to 50 coupons.  Please see
    insertCoupon for a detailed example on creating a coupon.  It is not repeated here.
 */

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\Coupon;
use ultracart\v2\models\CouponsRequest;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);

$couponsRequest = new CouponsRequest();
$coupons = [];
// TODO: add Coupons() to this array (see insertCoupon sample for help)
$couponsRequest->setCoupons($coupons);
$_expand = null; // coupons do not have expansions
$_placeholders = null; // coupons do not have placeholders.

$api_response = $coupon_api->insertCoupons($couponsRequest, $_expand, $_placeholders);
echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupons_request** | [**\ultracart\v2\models\CouponsRequest**](../Model/CouponsRequest.md)| Coupons to insert (maximum 50) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchItems()`

```php
searchItems($s, $m): \ultracart\v2\models\CouponItemSearchResultsResponse
```

Searches for items to display within a coupon editor and assign to coupons

Searches for items to display within a coupon editor and assign to coupons


### Example

```php
<?php
// This is an internal method used by our Coupon management screen.  It searches merchant items to display in
// some of the coupon editor dropdowns.  See ItemApi.getItemsByQuery if you need to search items.  This method
// is inflexible and geared toward our UI.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **s** | **string**|  | [optional]
 **m** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\CouponItemSearchResultsResponse**](../Model/CouponItemSearchResultsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoApply()`

```php
updateAutoApply($conditions)
```

Update auto apply rules and conditions

Update auto apply rules and conditions


### Example

```php
<?php

/*
    updateAutoApply updates the items and subtotals conditions that trigger "auto coupons", i.e. coupons that are automatically
    added to a shopping cart.  The manual configuration of auto coupons is at the bottom of the main coupons screen.
    See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1376525/Coupons#Coupons-Navigation

    // Success is 200 (There is no content.  Yes, this should return a 204, but it returns a 200 with no content)
 */

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponAutoApplyCondition;
use ultracart\v2\models\CouponAutoApplyConditions;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);


$autoApply = new CouponAutoApplyConditions();

$itemCondition = new CouponAutoApplyCondition();
$itemCondition->setRequiredItemId('ITEM_ABC');
$itemCondition->setCouponCode('10OFF');
$itemConditions = [$itemCondition];

$subtotalCondition = new CouponAutoApplyCondition();
$subtotalCondition->setMinimumSubtotal(50); // must spend fifty dollars
$itemCondition->setCouponCode('5OFF');
$subtotalConditions = [$subtotalCondition];

$autoApply->setRequiredItems($itemConditions);
$autoApply->setSubtotalLevels($subtotalConditions);


$coupon_api->updateAutoApply($autoApply);

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | [**\ultracart\v2\models\CouponAutoApplyConditions**](../Model/CouponAutoApplyConditions.md)| Conditions |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCoupon()`

```php
updateCoupon($coupon_oid, $coupon, $_expand): \ultracart\v2\models\CouponResponse
```

Update a coupon

Update a coupon on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 123456789;

$_expand = null; // coupons do not have expansions
$api_response = $coupon_api->getCoupon($coupon_oid, $_expand);
$coupon = $api_response->getCoupon();

// update the coupon.  this can be difficult given the complexity of coupons.  see insertCoupon sample for details.
$coupon->setExpirationDts(date('Y-m-d', strtotime('90 days')) . "T00:00:00+00:00");

$api_response = $coupon_api->updateCoupon($coupon_oid, $coupon, $_expand);
$updated_coupon = $api_response->getCoupon();

echo '<html lang="en"><body><pre>';
var_dump($updated_coupon);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_oid** | **int**| The coupon_oid to update. |
 **coupon** | [**\ultracart\v2\models\Coupon**](../Model/Coupon.md)| Coupon to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCoupons()`

```php
updateCoupons($coupons_request, $_expand, $_placeholders, $_async): \ultracart\v2\models\CouponsResponse
```

Update multiple coupons

Update multiple coupon on the UltraCart account.


### Example

```php
<?php

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\CouponsRequest;

require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 123456789;

$_expand = null; // coupons do not have expansions
$_placeholders = null; // coupons do not use placeholders

$api_response = $coupon_api->getCoupon($coupon_oid, $_expand);
$coupon = $api_response->getCoupon();

// update the coupon.  this can be difficult given the complexity of coupons.  see insertCoupon sample for details.
$coupon->setExpirationDts(date('Y-m-d', strtotime('90 days')) . "T00:00:00+00:00");

// This example only has one coupon.  But it's a trivial matter to add more coupons
$coupons_request = new CouponsRequest();
$coupons_request->setCoupons([$coupon]);

$api_response = $coupon_api->updateCoupons($coupons_request, $_expand, $_placeholders);
$updated_coupons = $api_response->getCoupons();

echo '<html lang="en"><body><pre>';
var_dump($updated_coupons);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupons_request** | [**\ultracart\v2\models\CouponsRequest**](../Model/CouponsRequest.md)| Coupons to update (synchronous maximum 50 / asynchronous maximum 100) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]
 **_async** | **bool**| True if the operation should be run async.  No result returned | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadCouponCodes()`

```php
uploadCouponCodes($coupon_oid, $upload_coupon_codes_request): \ultracart\v2\models\UploadCouponCodesResponse
```

Upload one-time codes for a coupon

Upload one-time codes for a coupon


### Example

```php
<?php

/*

uploadCouponCodes allows a merchant to upload one-time use codes and associate them with a merchant code (i.e. a coupon).
UltraCart has methods for generating one-time codes, and they work well, but this method exists when the merchant generates
them themselves.  This frequently occurs when a merchant sends out a mailer with unique coupon codes on the mailer.  The
merchant can then upload those codes with this method.

 */

use ultracart\v2\api\CouponApi;
use ultracart\v2\models\UploadCouponCodesRequest;


require_once '../vendor/autoload.php';

$coupon_api = CouponApi::usingApiKey(Constants::API_KEY);
$coupon_oid = 12345678;  // if you don't know your coupon_oid, use generateOneTimeCodesByMerchantCode.  same results

$codesRequest = new UploadCouponCodesRequest();
$codesRequest->setCouponCodes(['code1', 'code2', 'code3']);

$api_response =  $coupon_api->uploadCouponCodes($coupon_oid, $codesRequest);
echo 'Uploaded codes:<br>';
var_dump($api_response->getUploadedCodes());
echo 'Duplicated codes:<br>';
var_dump($api_response->getDuplicateCodes());
echo 'Rejected codes:<br>';
var_dump($api_response->getRejectedCodes());
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_oid** | **int**| The coupon oid to associate with the provided one-time codes. |
 **upload_coupon_codes_request** | [**\ultracart\v2\models\UploadCouponCodesRequest**](../Model/UploadCouponCodesRequest.md)| One-time coupon codes |

### Return type

[**\ultracart\v2\models\UploadCouponCodesResponse**](../Model/UploadCouponCodesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
