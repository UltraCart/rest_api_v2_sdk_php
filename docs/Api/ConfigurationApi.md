# ultracart\v2\ConfigurationApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delayAutoOrders**](ConfigurationApi.md#delayAutoOrders) | **POST** /configuration/checkout/payments/rtg/{rtg_oid}/delayAutoOrders | Delay auto order processing for a day for this rotating transaction gateway
[**deleteRotatingTransactionGateway**](ConfigurationApi.md#deleteRotatingTransactionGateway) | **DELETE** /configuration/checkout/payments/rtg/{rtg_oid} | Delete a rotating transaction gateway
[**getPaymentsConfiguration**](ConfigurationApi.md#getPaymentsConfiguration) | **GET** /configuration/checkout/payments | Retrieve payments configuration
[**getPaymentsRotatingGateway**](ConfigurationApi.md#getPaymentsRotatingGateway) | **GET** /configuration/checkout/payments/rtg/{rtg_oid} | Retrieve a rotating transaction gateway
[**getPaymentsRotatingGatewayByCode**](ConfigurationApi.md#getPaymentsRotatingGatewayByCode) | **GET** /configuration/checkout/payments/rtg/byCode/{code} | Retrieve a rotating transaction gateway by code
[**getPaymentsRotatingTransactionGateways**](ConfigurationApi.md#getPaymentsRotatingTransactionGateways) | **GET** /configuration/checkout/payments/rtg | Retrieve a list of rotating transaction gateways
[**getPaymentsRtgSummaries**](ConfigurationApi.md#getPaymentsRtgSummaries) | **GET** /configuration/checkout/payments/rtg/summaries | Retrieve a summary of rotating transaction gateways
[**getPaymentsTransactionGateways**](ConfigurationApi.md#getPaymentsTransactionGateways) | **GET** /configuration/checkout/payments/tg | Retrieve a list of transaction gateways
[**insertRotatingTransactionGateway**](ConfigurationApi.md#insertRotatingTransactionGateway) | **POST** /configuration/checkout/payments/rtg/ | Insert a rotating transaction gateway
[**migrateToRotatingTransactionGateway**](ConfigurationApi.md#migrateToRotatingTransactionGateway) | **POST** /configuration/checkout/payments/tg/migrateToRtgWithCodeOf/{code} | Migrate a normal transaction gateway to a rotating transaction gateway
[**stripeConnect**](ConfigurationApi.md#stripeConnect) | **POST** /configuration/checkout/payments/rtg/{rtg_oid}/stripeConnect | Begin the processing of connecting with Stripe
[**updatePaymentsConfiguration**](ConfigurationApi.md#updatePaymentsConfiguration) | **PUT** /configuration/checkout/payments | Updates payments configuration
[**updatePaymentsTransactionGateway**](ConfigurationApi.md#updatePaymentsTransactionGateway) | **PUT** /configuration/checkout/payments/tg | Updates payments transaction gateway
[**updateRotatingTransactionGateway**](ConfigurationApi.md#updateRotatingTransactionGateway) | **PUT** /configuration/checkout/payments/rtg/{rtg_oid} | Update a rotating transaction gateway
[**wepayEnroll**](ConfigurationApi.md#wepayEnroll) | **PUT** /configuration/checkout/wepayEnroll | Enroll with WePay


# **delayAutoOrders**
> \ultracart\v2\models\DelayAutoOrdersResponse delayAutoOrders($rtg_oid)

Delay auto order processing for a day for this rotating transaction gateway

Delay auto order processing for a day for this rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rtg_oid = 56; // int | The rtg_oid to delay.

try {
    $result = $apiInstance->delayAutoOrders($rtg_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->delayAutoOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtg_oid** | **int**| The rtg_oid to delay. |

### Return type

[**\ultracart\v2\models\DelayAutoOrdersResponse**](../Model/DelayAutoOrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRotatingTransactionGateway**
> \ultracart\v2\models\BaseResponse deleteRotatingTransactionGateway($rtg_oid)

Delete a rotating transaction gateway

Delete a rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rtg_oid = 56; // int | The rtg_oid to delete.

try {
    $result = $apiInstance->deleteRotatingTransactionGateway($rtg_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->deleteRotatingTransactionGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtg_oid** | **int**| The rtg_oid to delete. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsConfiguration**
> \ultracart\v2\models\PaymentsConfiguration getPaymentsConfiguration()

Retrieve payments configuration

Retrieves payments configuration for this account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getPaymentsConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\PaymentsConfiguration**](../Model/PaymentsConfiguration.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsRotatingGateway**
> \ultracart\v2\models\RotatingTransactionGateway getPaymentsRotatingGateway($rtg_oid)

Retrieve a rotating transaction gateway

Retrieve a rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rtg_oid = 56; // int | The rtg_oid for the desired record.

try {
    $result = $apiInstance->getPaymentsRotatingGateway($rtg_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsRotatingGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtg_oid** | **int**| The rtg_oid for the desired record. |

### Return type

[**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsRotatingGatewayByCode**
> \ultracart\v2\models\RotatingTransactionGateway getPaymentsRotatingGatewayByCode($code)

Retrieve a rotating transaction gateway by code

Retrieve a rotating transaction gateway by code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$code = "code_example"; // string | The code for the desired rotating transaction gateway.

try {
    $result = $apiInstance->getPaymentsRotatingGatewayByCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsRotatingGatewayByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The code for the desired rotating transaction gateway. |

### Return type

[**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsRotatingTransactionGateways**
> \ultracart\v2\models\RotatingTransactionGatewaysResponse getPaymentsRotatingTransactionGateways()

Retrieve a list of rotating transaction gateways

Retrieve a list of rotating transaction gateways

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getPaymentsRotatingTransactionGateways();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsRotatingTransactionGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\RotatingTransactionGatewaysResponse**](../Model/RotatingTransactionGatewaysResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsRtgSummaries**
> \ultracart\v2\models\RtgSummary getPaymentsRtgSummaries()

Retrieve a summary of rotating transaction gateways

Retrieve a summary of rotating transaction gateways

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getPaymentsRtgSummaries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsRtgSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\RtgSummary**](../Model/RtgSummary.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsTransactionGateways**
> \ultracart\v2\models\TransactionGatewaysResponse getPaymentsTransactionGateways()

Retrieve a list of transaction gateways

Retrieve a list of transaction gateways

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getPaymentsTransactionGateways();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getPaymentsTransactionGateways: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TransactionGatewaysResponse**](../Model/TransactionGatewaysResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertRotatingTransactionGateway**
> \ultracart\v2\models\RotatingTransactionGateway insertRotatingTransactionGateway($rotating_transaction_gateway)

Insert a rotating transaction gateway

Insert a rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rotating_transaction_gateway = new \ultracart\v2\models\RotatingTransactionGateway(); // \ultracart\v2\models\RotatingTransactionGateway | Rotating transaction gateway

try {
    $result = $apiInstance->insertRotatingTransactionGateway($rotating_transaction_gateway);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->insertRotatingTransactionGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rotating_transaction_gateway** | [**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)| Rotating transaction gateway |

### Return type

[**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrateToRotatingTransactionGateway**
> \ultracart\v2\models\RotatingTransactionGateway migrateToRotatingTransactionGateway($code)

Migrate a normal transaction gateway to a rotating transaction gateway

Migrate a normal transaction gateway to a rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$code = "code_example"; // string | The short code for the new rotating transaction gateway

try {
    $result = $apiInstance->migrateToRotatingTransactionGateway($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->migrateToRotatingTransactionGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The short code for the new rotating transaction gateway |

### Return type

[**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stripeConnect**
> \ultracart\v2\models\StripeConnectResponse stripeConnect($rtg_oid)

Begin the processing of connecting with Stripe

Begin the processing of connecting with Stripe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rtg_oid = 56; // int | The rtg_oid to be connected to stripe.

try {
    $result = $apiInstance->stripeConnect($rtg_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->stripeConnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtg_oid** | **int**| The rtg_oid to be connected to stripe. |

### Return type

[**\ultracart\v2\models\StripeConnectResponse**](../Model/StripeConnectResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentsConfiguration**
> \ultracart\v2\models\PaymentsConfigurationResponse updatePaymentsConfiguration($payments_configuration)

Updates payments configuration

Updates payments configuration on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$payments_configuration = new \ultracart\v2\models\PaymentsConfiguration(); // \ultracart\v2\models\PaymentsConfiguration | Payments configuration

try {
    $result = $apiInstance->updatePaymentsConfiguration($payments_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updatePaymentsConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payments_configuration** | [**\ultracart\v2\models\PaymentsConfiguration**](../Model/PaymentsConfiguration.md)| Payments configuration |

### Return type

[**\ultracart\v2\models\PaymentsConfigurationResponse**](../Model/PaymentsConfigurationResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentsTransactionGateway**
> \ultracart\v2\models\TransactionGatewaysResponse updatePaymentsTransactionGateway($update_gateway_request)

Updates payments transaction gateway

Updates payments transaction gateway on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$update_gateway_request = new \ultracart\v2\models\TransactionGatewaysRequest(); // \ultracart\v2\models\TransactionGatewaysRequest | Transaction gateways

try {
    $result = $apiInstance->updatePaymentsTransactionGateway($update_gateway_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updatePaymentsTransactionGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_gateway_request** | [**\ultracart\v2\models\TransactionGatewaysRequest**](../Model/TransactionGatewaysRequest.md)| Transaction gateways |

### Return type

[**\ultracart\v2\models\TransactionGatewaysResponse**](../Model/TransactionGatewaysResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRotatingTransactionGateway**
> \ultracart\v2\models\RotatingTransactionGateway updateRotatingTransactionGateway($rtg_oid, $rotating_transaction_gateway)

Update a rotating transaction gateway

Update a rotating transaction gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$rtg_oid = 56; // int | The rtg_oid to update.
$rotating_transaction_gateway = new \ultracart\v2\models\RotatingTransactionGateway(); // \ultracart\v2\models\RotatingTransactionGateway | Rotating transaction gateway

try {
    $result = $apiInstance->updateRotatingTransactionGateway($rtg_oid, $rotating_transaction_gateway);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateRotatingTransactionGateway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rtg_oid** | **int**| The rtg_oid to update. |
 **rotating_transaction_gateway** | [**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)| Rotating transaction gateway |

### Return type

[**\ultracart\v2\models\RotatingTransactionGateway**](../Model/RotatingTransactionGateway.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wepayEnroll**
> \ultracart\v2\models\PaymentsConfigurationResponse wepayEnroll($wepay_enroll)

Enroll with WePay

Enroll with WePay on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConfigurationApi::usingApiKey($simple_key);

$wepay_enroll = new \ultracart\v2\models\PaymentsWepayEnroll(); // \ultracart\v2\models\PaymentsWepayEnroll | Wepay enrollment information

try {
    $result = $apiInstance->wepayEnroll($wepay_enroll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->wepayEnroll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wepay_enroll** | [**\ultracart\v2\models\PaymentsWepayEnroll**](../Model/PaymentsWepayEnroll.md)| Wepay enrollment information |

### Return type

[**\ultracart\v2\models\PaymentsConfigurationResponse**](../Model/PaymentsConfigurationResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

