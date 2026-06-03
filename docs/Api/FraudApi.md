# ultracart\v2\FraudApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**declineEmail()**](FraudApi.md#declineEmail) | **POST** /fraud/decline_email | Decline email during checkout fraud review
[**deleteFraudRule()**](FraudApi.md#deleteFraudRule) | **DELETE** /fraud/rules/{fraud_rule_oid} | Delete a fraud rule
[**establishFraudRulesFromOrder()**](FraudApi.md#establishFraudRulesFromOrder) | **POST** /fraud/rules/from_order | Establish fraud rules from an order
[**getFraudLookupValues()**](FraudApi.md#getFraudLookupValues) | **GET** /fraud/lookup_values | Retrieve fraud rule lookup values
[**insertFraudRule()**](FraudApi.md#insertFraudRule) | **POST** /fraud/rules | Insert a fraud rule
[**searchFraudRules()**](FraudApi.md#searchFraudRules) | **POST** /fraud/rules/search | Search fraud rules


## `declineEmail()`

```php
declineEmail($fraud_decline_emails_request)
```

Decline email during checkout fraud review

Adds one email address to the fraud decline list for this merchant account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_decline_emails_request** | [**\ultracart\v2\models\FraudDeclineEmailRequest**](../Model/FraudDeclineEmailRequest.md)| Fraud decline emails request |

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

## `deleteFraudRule()`

```php
deleteFraudRule($fraud_rule_oid)
```

Delete a fraud rule

Deletes a fraud rule for this merchant account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_rule_oid** | **int**|  |

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

## `establishFraudRulesFromOrder()`

```php
establishFraudRulesFromOrder($fraud_rule_from_order_request): \ultracart\v2\models\FraudRulesResponse
```

Establish fraud rules from an order

Creates one or more fraud rules for this merchant account derived from an existing order, mirroring the 'establish fraud filter' action in the order processing screen. Select which filters to establish; all values are taken from the order. The IP rule is created against the order's /24 subnet (last octet masked). The credit card filter duplicates the order's stored card vault token, so no card number is sent through the API. Filters whose order data is missing (no stored card, no email, no usable IP, or no numeric street) are skipped and reported in the warning slot rather than failing the request.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_rule_from_order_request** | [**\ultracart\v2\models\FraudRuleFromOrderRequest**](../Model/FraudRuleFromOrderRequest.md)| Fraud rule from order request |

### Return type

[**\ultracart\v2\models\FraudRulesResponse**](../Model/FraudRulesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFraudLookupValues()`

```php
getFraudLookupValues(): \ultracart\v2\models\FraudLookupValuesResponse
```

Retrieve fraud rule lookup values

Returns the dropdown values required to build valid fraud rule insert and search requests. Includes rule types, failure actions, user actions, IP range types, AVS match types, the merchant's rotating transaction gateways, screen branding themes, countries, and affiliates.


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\FraudLookupValuesResponse**](../Model/FraudLookupValuesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertFraudRule()`

```php
insertFraudRule($fraud_rule_insert_request): \ultracart\v2\models\FraudRuleResponse
```

Insert a fraud rule

Creates a fraud rule for this merchant account. Field names in the request body are semantic (eg amount_threshold, email, ip_address). Call GET /v2/fraud/lookup_values for the list of valid rule_type, failure_action, and related dropdown values. The 'credit card matches' rule type is not supported via REST.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_rule_insert_request** | [**\ultracart\v2\models\FraudRuleInsertRequest**](../Model/FraudRuleInsertRequest.md)| Fraud rule insert request |

### Return type

[**\ultracart\v2\models\FraudRuleResponse**](../Model/FraudRuleResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFraudRules()`

```php
searchFraudRules($fraud_rule_search_request, $_limit, $_offset, $_sort): \ultracart\v2\models\FraudRulesResponse
```

Search fraud rules

Searches fraud rules for this merchant account using semantic filter fields. Pagination and sort are passed as query parameters (_limit, _offset, _sort). You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination. Results are capped at 10,000 records by ElasticSearch and the warning slot indicates when that cap was hit. Use more selective filters in that case.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_rule_search_request** | [**\ultracart\v2\models\FraudRuleSearchRequest**](../Model/FraudRuleSearchRequest.md)| Fraud rule search request |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the fraud rules.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\FraudRulesResponse**](../Model/FraudRulesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
