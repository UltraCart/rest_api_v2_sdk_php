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

```php
<?php

ini_set('display_errors', 1);

/*
 * declineEmail is a shortcut for telling UltraCart to decline orders from a specific email
 * address.  It is the quick alternative to building a full "address email" fraud rule by hand.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

use ultracart\v2\models\FraudDeclineEmailRequest;

$fraud_api = Samples::getFraudApi();

$decline_request = new FraudDeclineEmailRequest();
$decline_request->setEmail('chargeback-charlie@example.com');

$fraud_api->declineEmail($decline_request);

echo "Declined email: " . $decline_request->getEmail() . "\n";
```


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

```php
<?php

ini_set('display_errors', 1);

/*
 * deleteFraudRule removes a fraud rule by its oid.
 *
 * To keep this sample self-contained it first inserts a throwaway rule, then deletes it using
 * the oid returned from the insert.  In your own code you would already have the oid of the rule
 * you want to remove (for example from searchFraudRules).
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

use ultracart\v2\models\FraudRuleInsertRequest;

$fraud_api = Samples::getFraudApi();

// Insert a rule so we have something to delete.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('credit card single transaction exceeds');
$rule->setAmountThreshold(2500.00);
$rule->setFailureAction('Flag For Review');
$rule->setAutoNote('Temporary rule created by the deleteFraudRule sample');

$insert_response = $fraud_api->insertFraudRule($rule);
$fraud_rule_oid = $insert_response->getFraudRule()->getFraudRuleOid();
echo "Inserted temporary rule, oid = " . $fraud_rule_oid . "\n";

// Now delete it.
$fraud_api->deleteFraudRule($fraud_rule_oid);
echo "Deleted fraud rule oid = " . $fraud_rule_oid . "\n";
```


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

```php
<?php

ini_set('display_errors', 1);

/*
 * establishFraudRulesFromOrder is a shortcut that derives fraud rules from an existing order.
 * Point it at an order you have identified as fraudulent and tell it which attributes of that
 * order to turn into rules: the email, the credit card, the ip address, and/or the address.
 * It creates the matching rules and returns them.  This is the fast way to "block everything
 * associated with this bad order" instead of building each rule by hand.
 *
 * Not every filter produces a rule; the order must actually have that attribute. For example an
 * order with no stored card data will not produce a credit card rule.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

use ultracart\v2\models\FraudRuleFromOrderRequest;

$fraud_api = Samples::getFraudApi();

$request = new FraudRuleFromOrderRequest();
$request->setOrderId('DEMO-0009104434');
$request->setEstablishEmailFilter(true);
$request->setEstablishCardFilter(true);
$request->setEstablishIpFilter(true);
$request->setEstablishAddressFilter(true);
$request->setFailureAction('Flag For Review');
$request->setAutoNote('Established from fraudulent order DEMO-0009104434');

$api_response = $fraud_api->establishFraudRulesFromOrder($request);

$fraud_rules = $api_response->getFraudRules();
echo 'Established ' . count($fraud_rules) . " rule(s) from the order:\n";

foreach ($fraud_rules as $fraud_rule) {
    echo '  oid ' . $fraud_rule->getFraudRuleOid() . ' - ' . $fraud_rule->getRuleType()
        . ' - ' . $fraud_rule->getAutoNote() . "\n";
}
```


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

```php
<?php

ini_set('display_errors', 1);

/*
 * getFraudLookupValues returns the lookup values used when building fraud rules:
 * the allowed countries, affiliates, ip range types, rule groups, and rule types.
 * Call this first when constructing a rule so you supply valid values.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

$fraud_api = Samples::getFraudApi();

$api_response = $fraud_api->getFraudLookupValues();

$lookup_values = $api_response->getFraudLookupValues();

echo "Rule types:\n";
var_dump($lookup_values->getRuleTypes());

echo "Rule groups:\n";
var_dump($lookup_values->getRuleGroups());

echo "IP range types:\n";
var_dump($lookup_values->getIpRangeTypes());

echo "Countries:\n";
var_dump($lookup_values->getCountries());
```


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

```php
<?php

ini_set('display_errors', 1);

/*
 * insertFraudRule creates a single fraud rule.  Each rule has a rule_type (what it inspects),
 * a failure_action (what happens when it matches), and type-specific fields such as an amount
 * threshold, country code, ip address, or email.
 *
 * This sample has some fun and inserts several rules of different types in one run.  Call
 * getFraudLookupValues.php to see every valid rule_type and the other lookup values.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

use ultracart\v2\models\FraudRuleInsertRequest;

$fraud_api = Samples::getFraudApi();

// Build a handful of rules covering different rule types.
$rules = [];

// 1. Decline any order placed with a known-bad email address.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('address email');
$rule->setEmail('chargeback-charlie@example.com');
$rule->setFailureAction('Decline Transaction');
$rule->setAutoNote('Known chargeback email - decline on sight');
$rules[] = $rule;

// 2. Flag large single credit card transactions over $1,000 for manual review.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('credit card single transaction exceeds');
$rule->setAmountThreshold(1000.00);
$rule->setFailureAction('Flag For Review');
$rule->setAutoNote('Large single transaction - review before shipping');
$rules[] = $rule;

// 3. Decline orders that ship outside the United States.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('address not in country');
$rule->setCountryCode('US');
$rule->setFailureAction('Decline Transaction');
$rule->setAutoNote('Domestic shipping only');
$rules[] = $rule;

// 4. Decline transactions originating from a specific bad IP address.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('ip matches');
$rule->setIpAddress('203.0.113.66');
$rule->setIpRangeType('address');
$rule->setFailureAction('Decline Transaction');
$rule->setAutoNote('Blocked IP address');
$rules[] = $rule;

// 5. Flag prepaid credit cards for review.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('credit card block prepaid');
$rule->setFailureAction('Flag For Review');
$rule->setAutoNote('Prepaid card - take a closer look');
$rules[] = $rule;

// 6. Flag a customer IP making more than 10 transactions in a single day.
$rule = new FraudRuleInsertRequest();
$rule->setRuleType('ip daily transaction count exceeds');
$rule->setCountThreshold(10);
$rule->setIpRangeType('address');
$rule->setUserAction('Attempted');
$rule->setFailureAction('Flag For Review');
$rule->setAutoNote('IP velocity - more than 10 orders in a day');
$rules[] = $rule;

foreach ($rules as $rule) {
    $api_response = $fraud_api->insertFraudRule($rule);
    $created = $api_response->getFraudRule();
    echo "Inserted '" . $rule->getRuleType() . "' rule, oid = " . $created->getFraudRuleOid() . "\n";
}
```


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

```php
<?php

ini_set('display_errors', 1);

/*
 * searchFraudRules returns the fraud rules that match the supplied criteria.  Every field on the
 * FraudRuleSearchRequest is optional; supply only the ones you want to filter on.  The call also
 * takes limit, offset, and sort parameters for paging the results.
 *
 * This sample searches for every rule whose action is "Decline Transaction".
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

use ultracart\v2\models\FraudRuleSearchRequest;

$fraud_api = Samples::getFraudApi();

$search_request = new FraudRuleSearchRequest();
$search_request->setFailureAction('Decline Transaction');

$limit = 100;
$offset = 0;
$sort = null;

$api_response = $fraud_api->searchFraudRules($search_request, $limit, $offset, $sort);

$fraud_rules = $api_response->getFraudRules();
echo "Found " . count($fraud_rules) . " rule(s) with action 'Decline Transaction'\n";

foreach ($fraud_rules as $fraud_rule) {
    echo "  oid " . $fraud_rule->getFraudRuleOid() . " - " . $fraud_rule->getRuleType()
        . " - " . $fraud_rule->getAutoNote() . "\n";
}
```


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
