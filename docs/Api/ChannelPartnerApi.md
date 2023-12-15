# ultracart\v2\ChannelPartnerApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderByChannelPartnerOrderId**](ChannelPartnerApi.md#cancelOrderByChannelPartnerOrderId) | **DELETE** /channel_partner/cancel/by_channel_partner_order_id/{order_id} | Cancel channel partner order by channel partner order id
[**cancelOrderByUltraCartOrderId**](ChannelPartnerApi.md#cancelOrderByUltraCartOrderId) | **DELETE** /channel_partner/cancel/by_ultracart_order_id/{order_id} | Cancel channel partner order by UltraCart order id
[**deleteChannelPartnerShipToPreference**](ChannelPartnerApi.md#deleteChannelPartnerShipToPreference) | **DELETE** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Delete a ship to preference record for the channel partner.
[**estimateShippingForChannelPartnerOrder**](ChannelPartnerApi.md#estimateShippingForChannelPartnerOrder) | **POST** /channel_partner/estimate_shipping | Estimate shipping for channel partner order
[**estimateTaxForChannelPartnerOrder**](ChannelPartnerApi.md#estimateTaxForChannelPartnerOrder) | **POST** /channel_partner/estimate_tax | Estimate tax for channel partner order
[**getChannelPartnerShipToPreference**](ChannelPartnerApi.md#getChannelPartnerShipToPreference) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Retrieve the ship to preference associated with the channel partner and the specific id.
[**getChannelPartnerShipToPreferences**](ChannelPartnerApi.md#getChannelPartnerShipToPreferences) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Retrieve the ship to preferences associated with the channel partner.
[**getChannelPartners**](ChannelPartnerApi.md#getChannelPartners) | **GET** /channel_partner/channel_partners | Retrieve the channel partners configured on the account.
[**importChannelPartnerOrder**](ChannelPartnerApi.md#importChannelPartnerOrder) | **POST** /channel_partner/import | Insert channel partner order
[**insertChannelPartnerShipToPreference**](ChannelPartnerApi.md#insertChannelPartnerShipToPreference) | **POST** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Insert a ship to preference record for the channel partner.
[**updateChannelPartnerShipToPreference**](ChannelPartnerApi.md#updateChannelPartnerShipToPreference) | **PUT** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Update a ship to preference record for the channel partner.


# **cancelOrderByChannelPartnerOrderId**
> \ultracart\v2\models\ChannelPartnerCancelResponse cancelOrderByChannelPartnerOrderId($order_id)

Cancel channel partner order by channel partner order id

Cancel channel partner order by channel partner order id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The channel partner order id to delete.

try {
    $result = $apiInstance->cancelOrderByChannelPartnerOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->cancelOrderByChannelPartnerOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrderByUltraCartOrderId**
> \ultracart\v2\models\ChannelPartnerCancelResponse cancelOrderByUltraCartOrderId($order_id)

Cancel channel partner order by UltraCart order id

Cancel channel partner order by UltraCart order id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$order_id = "order_id_example"; // string | The UltraCart order id to delete.

try {
    $result = $apiInstance->cancelOrderByUltraCartOrderId($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->cancelOrderByUltraCartOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelPartnerShipToPreference**
> deleteChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid)

Delete a ship to preference record for the channel partner.

Delete a ship to preference record for the channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_oid = 56; // int | 
$channel_partner_ship_to_preference_oid = 56; // int | 

try {
    $apiInstance->deleteChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->deleteChannelPartnerShipToPreference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **estimateShippingForChannelPartnerOrder**
> \ultracart\v2\models\ChannelPartnerEstimateShippingResponse estimateShippingForChannelPartnerOrder($channel_partner_order)

Estimate shipping for channel partner order

Estimate shipping for order from a channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order needing shipping estimate

try {
    $result = $apiInstance->estimateShippingForChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->estimateShippingForChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **estimateTaxForChannelPartnerOrder**
> \ultracart\v2\models\ChannelPartnerEstimateTaxResponse estimateTaxForChannelPartnerOrder($channel_partner_order)

Estimate tax for channel partner order

Estimate tax for order from a channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order needing tax estimate

try {
    $result = $apiInstance->estimateTaxForChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->estimateTaxForChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelPartnerShipToPreference**
> \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse getChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid)

Retrieve the ship to preference associated with the channel partner and the specific id.

Retrieve the ship to preference associated with the channel partner and the specific id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_oid = 56; // int | 
$channel_partner_ship_to_preference_oid = 56; // int | 

try {
    $result = $apiInstance->getChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->getChannelPartnerShipToPreference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelPartnerShipToPreferences**
> \ultracart\v2\models\ChannelPartnerShipToPreferencesResponse getChannelPartnerShipToPreferences($channel_partner_oid)

Retrieve the ship to preferences associated with the channel partner.

Retrieve the ship to preferences associated with the channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_oid = 56; // int | 

try {
    $result = $apiInstance->getChannelPartnerShipToPreferences($channel_partner_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->getChannelPartnerShipToPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferencesResponse**](../Model/ChannelPartnerShipToPreferencesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelPartners**
> \ultracart\v2\models\ChannelPartnersResponse getChannelPartners()

Retrieve the channel partners configured on the account.

Retrieve the channel partners configured on the account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getChannelPartners();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->getChannelPartners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ChannelPartnersResponse**](../Model/ChannelPartnersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importChannelPartnerOrder**
> \ultracart\v2\models\ChannelPartnerImportResponse importChannelPartnerOrder($channel_partner_order)

Insert channel partner order

Insert order from a channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_order = new \ultracart\v2\models\ChannelPartnerOrder(); // \ultracart\v2\models\ChannelPartnerOrder | Order to insert

try {
    $result = $apiInstance->importChannelPartnerOrder($channel_partner_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->importChannelPartnerOrder: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertChannelPartnerShipToPreference**
> \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse insertChannelPartnerShipToPreference($channel_partner_oid, $ship_to_preference)

Insert a ship to preference record for the channel partner.

Insert a ship to preference record for the channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_oid = 56; // int | 
$ship_to_preference = new \ultracart\v2\models\ChannelPartnerShipToPreference(); // \ultracart\v2\models\ChannelPartnerShipToPreference | Ship to preference to create

try {
    $result = $apiInstance->insertChannelPartnerShipToPreference($channel_partner_oid, $ship_to_preference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->insertChannelPartnerShipToPreference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **ship_to_preference** | [**\ultracart\v2\models\ChannelPartnerShipToPreference**](../Model/ChannelPartnerShipToPreference.md)| Ship to preference to create |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannelPartnerShipToPreference**
> \ultracart\v2\models\ChannelPartnerShipToPreferenceResponse updateChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid, $ship_to_preference)

Update a ship to preference record for the channel partner.

Update a ship to preference record for the channel partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ChannelPartnerApi::usingApiKey($simple_key);

$channel_partner_oid = 56; // int | 
$channel_partner_ship_to_preference_oid = 56; // int | 
$ship_to_preference = new \ultracart\v2\models\ChannelPartnerShipToPreference(); // \ultracart\v2\models\ChannelPartnerShipToPreference | Ship to preference to create

try {
    $result = $apiInstance->updateChannelPartnerShipToPreference($channel_partner_oid, $channel_partner_ship_to_preference_oid, $ship_to_preference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelPartnerApi->updateChannelPartnerShipToPreference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_partner_oid** | **int**|  |
 **channel_partner_ship_to_preference_oid** | **int**|  |
 **ship_to_preference** | [**\ultracart\v2\models\ChannelPartnerShipToPreference**](../Model/ChannelPartnerShipToPreference.md)| Ship to preference to create |

### Return type

[**\ultracart\v2\models\ChannelPartnerShipToPreferenceResponse**](../Model/ChannelPartnerShipToPreferenceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

