# ultracart\v2\ChannelPartnerApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderByChannelPartnerOrderId()**](ChannelPartnerApi.md#cancelOrderByChannelPartnerOrderId) | **DELETE** /channel_partner/cancel/by_channel_partner_order_id/{order_id} | Cancel channel partner order by channel partner order id
[**cancelOrderByUltraCartOrderId()**](ChannelPartnerApi.md#cancelOrderByUltraCartOrderId) | **DELETE** /channel_partner/cancel/by_ultracart_order_id/{order_id} | Cancel channel partner order by UltraCart order id
[**estimateShippingForChannelPartnerOrder()**](ChannelPartnerApi.md#estimateShippingForChannelPartnerOrder) | **POST** /channel_partner/estimate_shipping | Estimate shipping for channel partner order
[**estimateTaxForChannelPartnerOrder()**](ChannelPartnerApi.md#estimateTaxForChannelPartnerOrder) | **POST** /channel_partner/estimate_tax | Estimate tax for channel partner order
[**importChannelPartnerOrder()**](ChannelPartnerApi.md#importChannelPartnerOrder) | **POST** /channel_partner/import | Insert channel partner order


## `cancelOrderByChannelPartnerOrderId()`

```php
cancelOrderByChannelPartnerOrderId($order_id): \ultracart\v2\models\ChannelPartnerCancelResponse
```

Cancel channel partner order by channel partner order id

Cancel channel partner order by channel partner order id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\ChannelPartnerApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$order_id = 'order_id_example'; // string | The channel partner order id to delete.

try {
    $result = $apiInstance->cancelOrderByChannelPartnerOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->cancelOrderByChannelPartnerOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The channel partner order id to delete. |

### Return type

[**\ultracart\v2\models\ChannelPartnerCancelResponse**](../Model/ChannelPartnerCancelResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrderByUltraCartOrderId()`

```php
cancelOrderByUltraCartOrderId($order_id): \ultracart\v2\models\ChannelPartnerCancelResponse
```

Cancel channel partner order by UltraCart order id

Cancel channel partner order by UltraCart order id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\ChannelPartnerApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$order_id = 'order_id_example'; // string | The UltraCart order id to delete.

try {
    $result = $apiInstance->cancelOrderByUltraCartOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->cancelOrderByUltraCartOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The UltraCart order id to delete. |

### Return type

[**\ultracart\v2\models\ChannelPartnerCancelResponse**](../Model/ChannelPartnerCancelResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateShippingForChannelPartnerOrder()`

```php
estimateShippingForChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerEstimateShippingResponse
```

Estimate shipping for channel partner order

Estimate shipping for order from a channel partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\ChannelPartnerApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order needing shipping estimate

try {
    $result = $apiInstance->estimateShippingForChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->estimateShippingForChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order needing shipping estimate |

### Return type

[**\ultracart\v2\models\ChannelPartnerEstimateShippingResponse**](../Model/ChannelPartnerEstimateShippingResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateTaxForChannelPartnerOrder()`

```php
estimateTaxForChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerEstimateTaxResponse
```

Estimate tax for channel partner order

Estimate tax for order from a channel partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\ChannelPartnerApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order needing tax estimate

try {
    $result = $apiInstance->estimateTaxForChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->estimateTaxForChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order needing tax estimate |

### Return type

[**\ultracart\v2\models\ChannelPartnerEstimateTaxResponse**](../Model/ChannelPartnerEstimateTaxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importChannelPartnerOrder()`

```php
importChannelPartnerOrder($channel_partner_order): \ultracart\v2\models\ChannelPartnerImportResponse
```

Insert channel partner order

Insert order from a channel partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'constants.php'; // https://github.com/UltraCart/sdk_samples/blob/master/php/constants.php

// This example is based on our samples_sdk project, but still contains auto-generated content from our sdk generators.
// As such, this might not be the best way to use this object.
// Please see https://github.com/UltraCart/sdk_samples for working examples.

$apiInstance = ultracart\v2\Api\ChannelPartnerApi::usingApiKey(Constants::API_KEY, Constants::MAX_RETRY_SECONDS,
            Constants::VERIFY_SSL, Constants::DEBUG);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order to insert

try {
    $result = $apiInstance->importChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->importChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_order** | [**\ultracart\v2\models\ChannelPartnerOrder**](../Model/ChannelPartnerOrder.md)| Order to insert |

### Return type

[**\ultracart\v2\models\ChannelPartnerImportResponse**](../Model/ChannelPartnerImportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
