# ultracart\v2\CouponApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCoupon**](CouponApi.md#deleteCoupon) | **DELETE** /coupon/coupons/{coupon_oid} | Delete a coupon
[**deleteCouponsByCode**](CouponApi.md#deleteCouponsByCode) | **DELETE** /coupon/coupons/by_code | Deletes multiple coupons
[**deleteCouponsByOid**](CouponApi.md#deleteCouponsByOid) | **DELETE** /coupon/coupons/by_oid | Deletes multiple coupons
[**doesCouponCodeExist**](CouponApi.md#doesCouponCodeExist) | **GET** /coupon/coupons/merchant_code/{merchant_code}/exists | Determines if a coupon merchant code already exists
[**generateCouponCodes**](CouponApi.md#generateCouponCodes) | **POST** /coupon/coupons/{coupon_oid}/generate_codes | Generates one time codes for a coupon
[**generateOneTimeCodesByMerchantCode**](CouponApi.md#generateOneTimeCodesByMerchantCode) | **POST** /coupon/coupons/merchant_code/{merchant_code}/generate_codes | Generates one time codes by merchant code
[**getAutoApply**](CouponApi.md#getAutoApply) | **GET** /coupon/auto_apply | Retrieve auto apply rules and conditions
[**getCoupon**](CouponApi.md#getCoupon) | **GET** /coupon/coupons/{coupon_oid} | Retrieve a coupon
[**getCouponByMerchantCode**](CouponApi.md#getCouponByMerchantCode) | **GET** /coupon/coupons/merchant_code/{merchant_code} | Retrieve a coupon by merchant code
[**getCoupons**](CouponApi.md#getCoupons) | **GET** /coupon/coupons | Retrieve coupons
[**getCouponsByQuery**](CouponApi.md#getCouponsByQuery) | **GET** /coupon/coupons/query | Retrieve coupons by query
[**getEditorValues**](CouponApi.md#getEditorValues) | **GET** /coupon/editor_values | Retrieve values needed for a coupon editor
[**insertCoupon**](CouponApi.md#insertCoupon) | **POST** /coupon/coupons | Insert a coupon
[**insertCoupons**](CouponApi.md#insertCoupons) | **POST** /coupon/coupons/batch | Insert multiple coupons
[**searchItems**](CouponApi.md#searchItems) | **GET** /coupon/searchItems | Searches for items to display within a coupon editor and assign to coupons
[**updateAutoApply**](CouponApi.md#updateAutoApply) | **POST** /coupon/auto_apply | Update auto apply rules and conditions
[**updateCoupon**](CouponApi.md#updateCoupon) | **PUT** /coupon/coupons/{coupon_oid} | Update a coupon
[**updateCoupons**](CouponApi.md#updateCoupons) | **PUT** /coupon/coupons/batch | Update multiple coupons
[**uploadCouponCodes**](CouponApi.md#uploadCouponCodes) | **POST** /coupon/coupons/{coupon_oid}/upload_codes | Upload one-time codes for a coupon


# **deleteCoupon**
> deleteCoupon($coupon_oid)

Delete a coupon

Delete a coupon on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_oid = 56; // int | The coupon_oid to delete.

try {
    $apiInstance->deleteCoupon($coupon_oid);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponsByCode**
> deleteCouponsByCode($coupon_delete_request)

Deletes multiple coupons

Delete coupons on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_delete_request = new \ultracart\v2\models\CouponDeletesRequest(); // \ultracart\v2\models\CouponDeletesRequest | Coupon oids to delete

try {
    $apiInstance->deleteCouponsByCode($coupon_delete_request);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCouponsByCode: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponsByOid**
> deleteCouponsByOid($coupon_delete_request)

Deletes multiple coupons

Delete coupons on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_delete_request = new \ultracart\v2\models\CouponDeletesRequest(); // \ultracart\v2\models\CouponDeletesRequest | Coupon oids to delete

try {
    $apiInstance->deleteCouponsByOid($coupon_delete_request);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCouponsByOid: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doesCouponCodeExist**
> \ultracart\v2\models\CouponExistsResponse doesCouponCodeExist($merchant_code)

Determines if a coupon merchant code already exists

Determines if a coupon merchant code already exists.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$merchant_code = "merchant_code_example"; // string | The coupon merchant code to examine.

try {
    $result = $apiInstance->doesCouponCodeExist($merchant_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->doesCouponCodeExist: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateCouponCodes**
> \ultracart\v2\models\CouponCodesResponse generateCouponCodes($coupon_oid, $coupon_codes_request)

Generates one time codes for a coupon

Generate one time codes for a coupon

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_oid = 56; // int | The coupon oid to generate codes.
$coupon_codes_request = new \ultracart\v2\models\CouponCodesRequest(); // \ultracart\v2\models\CouponCodesRequest | Coupon code generation parameters

try {
    $result = $apiInstance->generateCouponCodes($coupon_oid, $coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->generateCouponCodes: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateOneTimeCodesByMerchantCode**
> \ultracart\v2\models\CouponCodesResponse generateOneTimeCodesByMerchantCode($merchant_code, $coupon_codes_request)

Generates one time codes by merchant code

Generate one time codes by merchant code

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$merchant_code = "merchant_code_example"; // string | The merchant code to generate one time codes.
$coupon_codes_request = new \ultracart\v2\models\CouponCodesRequest(); // \ultracart\v2\models\CouponCodesRequest | Coupon code generation parameters

try {
    $result = $apiInstance->generateOneTimeCodesByMerchantCode($merchant_code, $coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->generateOneTimeCodesByMerchantCode: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutoApply**
> \ultracart\v2\models\CouponAutoApplyConditions getAutoApply()

Retrieve auto apply rules and conditions

Retrieve auto apply rules and conditions

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getAutoApply();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getAutoApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CouponAutoApplyConditions**](../Model/CouponAutoApplyConditions.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoupon**
> \ultracart\v2\models\CouponResponse getCoupon($coupon_oid, $_expand)

Retrieve a coupon

Retrieves a single coupon using the specified coupon profile oid.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_oid = 56; // int | The coupon oid to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCoupon($coupon_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponByMerchantCode**
> \ultracart\v2\models\CouponResponse getCouponByMerchantCode($merchant_code, $_expand)

Retrieve a coupon by merchant code

Retrieves a single coupon using the specified merchant code.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$merchant_code = "merchant_code_example"; // string | The coupon merchant code to retrieve.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCouponByMerchantCode($merchant_code, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponByMerchantCode: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoupons**
> \ultracart\v2\models\CouponsResponse getCoupons($merchant_code, $description, $coupon_type, $start_date_begin, $start_date_end, $expiration_date_begin, $expiration_date_end, $affiliate_oid, $exclude_expired, $_limit, $_offset, $_sort, $_expand)

Retrieve coupons

Retrieves coupons for this account.  If no parameters are specified, all coupons will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$merchant_code = "merchant_code_example"; // string | Merchant code
$description = "description_example"; // string | Description
$coupon_type = "coupon_type_example"; // string | Coupon type
$start_date_begin = "start_date_begin_example"; // string | Start date begin
$start_date_end = "start_date_end_example"; // string | Start date end
$expiration_date_begin = "expiration_date_begin_example"; // string | Expiration date begin
$expiration_date_end = "expiration_date_end_example"; // string | Expiration date end
$affiliate_oid = 56; // int | Affiliate oid
$exclude_expired = true; // bool | Exclude expired
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the coupons.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCoupons($merchant_code, $description, $coupon_type, $start_date_begin, $start_date_end, $expiration_date_begin, $expiration_date_end, $affiliate_oid, $exclude_expired, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponsByQuery**
> \ultracart\v2\models\CouponsResponse getCouponsByQuery($coupon_query, $_limit, $_offset, $_sort, $_expand)

Retrieve coupons by query

Retrieves coupons from the account.  If no parameters are specified, all coupons will be returned.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_query = new \ultracart\v2\models\CouponQuery(); // \ultracart\v2\models\CouponQuery | Coupon query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the coupons.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getCouponsByQuery($coupon_query, $_limit, $_offset, $_sort, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponsByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEditorValues**
> \ultracart\v2\models\CouponEditorValues getEditorValues()

Retrieve values needed for a coupon editor

Retrieve values needed for a coupon editor

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getEditorValues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getEditorValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CouponEditorValues**](../Model/CouponEditorValues.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertCoupon**
> \ultracart\v2\models\CouponResponse insertCoupon($coupon, $_expand)

Insert a coupon

Insert a coupon on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon = new \ultracart\v2\models\Coupon(); // \ultracart\v2\models\Coupon | Coupon to insert
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->insertCoupon($coupon, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->insertCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertCoupons**
> \ultracart\v2\models\CouponsResponse insertCoupons($coupons_request, $_expand, $_placeholders)

Insert multiple coupons

Insert multiple coupon on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupons_request = new \ultracart\v2\models\CouponsRequest(); // \ultracart\v2\models\CouponsRequest | Coupons to insert (maximum 20)
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.

try {
    $result = $apiInstance->insertCoupons($coupons_request, $_expand, $_placeholders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->insertCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupons_request** | [**\ultracart\v2\models\CouponsRequest**](../Model/CouponsRequest.md)| Coupons to insert (maximum 20) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchItems**
> \ultracart\v2\models\CouponItemSearchResultsResponse searchItems($s, $m)

Searches for items to display within a coupon editor and assign to coupons

Searches for items to display within a coupon editor and assign to coupons

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$s = "s_example"; // string | 
$m = 56; // int | 

try {
    $result = $apiInstance->searchItems($s, $m);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->searchItems: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAutoApply**
> updateAutoApply($conditions)

Update auto apply rules and conditions

Update auto apply rules and conditions

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$conditions = new \ultracart\v2\models\CouponAutoApplyConditions(); // \ultracart\v2\models\CouponAutoApplyConditions | Conditions

try {
    $apiInstance->updateAutoApply($conditions);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->updateAutoApply: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupon**
> \ultracart\v2\models\CouponResponse updateCoupon($coupon, $coupon_oid, $_expand)

Update a coupon

Update a coupon on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon = new \ultracart\v2\models\Coupon(); // \ultracart\v2\models\Coupon | Coupon to update
$coupon_oid = 56; // int | The coupon_oid to update.
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->updateCoupon($coupon, $coupon_oid, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon** | [**\ultracart\v2\models\Coupon**](../Model/Coupon.md)| Coupon to update |
 **coupon_oid** | **int**| The coupon_oid to update. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CouponResponse**](../Model/CouponResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupons**
> \ultracart\v2\models\CouponsResponse updateCoupons($coupons_request, $_expand, $_placeholders, $_async)

Update multiple coupons

Update multiple coupon on the UltraCart account.

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupons_request = new \ultracart\v2\models\CouponsRequest(); // \ultracart\v2\models\CouponsRequest | Coupons to update (synchronous maximum 20 / asynchronous maximum 100)
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples
$_placeholders = true; // bool | Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API.
$_async = true; // bool | True if the operation should be run async.  No result returned

try {
    $result = $apiInstance->updateCoupons($coupons_request, $_expand, $_placeholders, $_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->updateCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupons_request** | [**\ultracart\v2\models\CouponsRequest**](../Model/CouponsRequest.md)| Coupons to update (synchronous maximum 20 / asynchronous maximum 100) |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]
 **_placeholders** | **bool**| Whether or not placeholder values should be returned in the result.  Useful for UIs that consume this REST API. | [optional]
 **_async** | **bool**| True if the operation should be run async.  No result returned | [optional]

### Return type

[**\ultracart\v2\models\CouponsResponse**](../Model/CouponsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCouponCodes**
> \ultracart\v2\models\UploadCouponCodesResponse uploadCouponCodes($coupon_oid, $upload_coupon_codes_request)

Upload one-time codes for a coupon

Upload one-time codes for a coupon

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

$api_instance = new ultracart\v2\api\CouponApi(new \Http\Adapter\Guzzle6\Client());

Alternative method:
$api_instance = new ultracart\v2\api\CouponApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$coupon_oid = 56; // int | The coupon oid to associate with the provided one-time codes.
$upload_coupon_codes_request = new \ultracart\v2\models\UploadCouponCodesRequest(); // \ultracart\v2\models\UploadCouponCodesRequest | One-time coupon codes

try {
    $result = $apiInstance->uploadCouponCodes($coupon_oid, $upload_coupon_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->uploadCouponCodes: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

