# ultracart\v2\AffiliateApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAffiliate()**](AffiliateApi.md#deleteAffiliate) | **DELETE** /affiliate/affiliates/{affiliate_oid} | Delete an affiliate
[**getAffiliate()**](AffiliateApi.md#getAffiliate) | **GET** /affiliate/affiliates/{affiliate_oid} | Retrieve an affiliate
[**getAffiliatesByQuery()**](AffiliateApi.md#getAffiliatesByQuery) | **POST** /affiliate/affiliates/query | Retrieve affiliates
[**getClicksByQuery()**](AffiliateApi.md#getClicksByQuery) | **POST** /affiliate/clicks/query | Retrieve clicks
[**getLedgersByQuery()**](AffiliateApi.md#getLedgersByQuery) | **POST** /affiliate/ledgers/query | Retrieve ledger entries
[**insertAffiliate()**](AffiliateApi.md#insertAffiliate) | **POST** /affiliate/affiliates | Insert an affiliate
[**updateAffiliate()**](AffiliateApi.md#updateAffiliate) | **PUT** /affiliate/affiliates/{affiliate_oid} | Update an affiliate


## `deleteAffiliate()`

```php
deleteAffiliate($affiliate_oid)
```

Delete an affiliate

Delete an affiliate on the UltraCart account.  The affiliate is disabled within the active affiliate program; their ledger and click history is preserved.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_oid** | **int**| The affiliate oid to delete. |

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

## `getAffiliate()`

```php
getAffiliate($affiliate_oid, $_expand): \ultracart\v2\models\AffiliateResponse
```

Retrieve an affiliate

Retrieves a single affiliate using the specified affiliate oid.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_oid** | **int**| The affiliate oid to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AffiliateResponse**](../Model/AffiliateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffiliatesByQuery()`

```php
getAffiliatesByQuery($affiliate_query, $_limit, $_offset, $_sort): \ultracart\v2\models\AffiliatesResponse
```

Retrieve affiliates

Retrieves a group of affiliates from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the affiliates returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_query** | [**\ultracart\v2\models\AffiliateQuery**](../Model/AffiliateQuery.md)| Affiliate query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the affiliates.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\AffiliatesResponse**](../Model/AffiliatesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClicksByQuery()`

```php
getClicksByQuery($click_query, $_limit, $_offset, $_expand): \ultracart\v2\models\AffiliateClicksResponse
```

Retrieve clicks

Retrieves a group of clicks from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the clicks returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

## `insertAffiliate()`

```php
insertAffiliate($affiliate, $_expand): \ultracart\v2\models\AffiliateResponse
```

Insert an affiliate

Insert an affiliate on the UltraCart account.  The affiliate is created within the merchant's active affiliate program.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate** | [**\ultracart\v2\models\Affiliate**](../Model/Affiliate.md)| Affiliate to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AffiliateResponse**](../Model/AffiliateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAffiliate()`

```php
updateAffiliate($affiliate_oid, $affiliate, $_expand): \ultracart\v2\models\AffiliateResponse
```

Update an affiliate

Update an affiliate on the UltraCart account.  This is a full replacement of the affiliate; omitted fields are reset to their defaults, with the exception of password which is only changed when supplied.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_oid** | **int**| The affiliate oid to update. |
 **affiliate** | [**\ultracart\v2\models\Affiliate**](../Model/Affiliate.md)| Affiliate to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\AffiliateResponse**](../Model/AffiliateResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
