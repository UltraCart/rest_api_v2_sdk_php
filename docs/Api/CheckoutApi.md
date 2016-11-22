# ultracart\admin\v2\CheckoutApi

All URIs are relative to *https://secure.ultracart.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userV2CheckoutBrowserKeyPut**](CheckoutApi.md#userV2CheckoutBrowserKeyPut) | **PUT** /user/v2/checkout/browser_key | Setup Browser Application
[**userV2CheckoutCartCartIdGet**](CheckoutApi.md#userV2CheckoutCartCartIdGet) | **GET** /user/v2/checkout/cart/{cart_id} | Get a cart
[**userV2CheckoutCartFinalizeOrderPost**](CheckoutApi.md#userV2CheckoutCartFinalizeOrderPost) | **POST** /user/v2/checkout/cart/finalizeOrder | Finalize Order
[**userV2CheckoutCartGet**](CheckoutApi.md#userV2CheckoutCartGet) | **GET** /user/v2/checkout/cart | Create a new cart
[**userV2CheckoutCartHandoffPost**](CheckoutApi.md#userV2CheckoutCartHandoffPost) | **POST** /user/v2/checkout/cart/handoff | Handoff cart
[**userV2CheckoutCartProfileLoginPost**](CheckoutApi.md#userV2CheckoutCartProfileLoginPost) | **POST** /user/v2/checkout/cart/profile/login | Profile login
[**userV2CheckoutCartProfileLogoutPost**](CheckoutApi.md#userV2CheckoutCartProfileLogoutPost) | **POST** /user/v2/checkout/cart/profile/logout | Profile logout
[**userV2CheckoutCartProfileRegisterPost**](CheckoutApi.md#userV2CheckoutCartProfileRegisterPost) | **POST** /user/v2/checkout/cart/profile/register | Profile registration
[**userV2CheckoutCartPut**](CheckoutApi.md#userV2CheckoutCartPut) | **PUT** /user/v2/checkout/cart | Update cart (by cookie)
[**userV2CheckoutCartValidatePost**](CheckoutApi.md#userV2CheckoutCartValidatePost) | **POST** /user/v2/checkout/cart/validate | Validate
[**userV2CheckoutReturnReturnCodeGet**](CheckoutApi.md#userV2CheckoutReturnReturnCodeGet) | **GET** /user/v2/checkout/return/{return_code} | Get a cart by return code


# **userV2CheckoutBrowserKeyPut**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutBrowserKeyPut($browser_key_request)

Setup Browser Application

Setup a browser key authenticated application with checkout permissions.  This REST call must be made with an authentication scheme that is not browser key.  The new application will be linked to the application that makes this call.  If this application is disabled / deleted, then so will the application setup by this call.  The purpose of this call is to allow an OAuth applicaiton, such as the Wordpress plugin, to setup the proper browser based authentication for the REST checkout API to use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$browser_key_request = new \ultracart\admin\v2\models\CheckoutSetupBrowserKeyRequest(); // \ultracart\admin\v2\models\CheckoutSetupBrowserKeyRequest | Setup browser key request

try {
    $result = $api_instance->userV2CheckoutBrowserKeyPut($browser_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutBrowserKeyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **browser_key_request** | [**\ultracart\admin\v2\models\CheckoutSetupBrowserKeyRequest**](../Model/\ultracart\admin\v2\models\CheckoutSetupBrowserKeyRequest.md)| Setup browser key request |

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartCartIdGet**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutCartCartIdGet($cart_id, $_expand)

Get a cart

Get a cart specified by the cart_id parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$cart_id = "cart_id_example"; // string | Cart ID to retrieve
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartCartIdGet($cart_id, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartCartIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| Cart ID to retrieve |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartFinalizeOrderPost**
> \ultracart\admin\v2\models\CartFinalizeOrderResponse userV2CheckoutCartFinalizeOrderPost($finalize_request)

Finalize Order

Finalize the cart into an order.  This method can not be called with browser key authentication.  It is ONLY meant for server side code to call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$finalize_request = new \ultracart\admin\v2\models\CartFinalizeOrderRequest(); // \ultracart\admin\v2\models\CartFinalizeOrderRequest | Finalize request

try {
    $result = $api_instance->userV2CheckoutCartFinalizeOrderPost($finalize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartFinalizeOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finalize_request** | [**\ultracart\admin\v2\models\CartFinalizeOrderRequest**](../Model/\ultracart\admin\v2\models\CartFinalizeOrderRequest.md)| Finalize request |

### Return type

[**\ultracart\admin\v2\models\CartFinalizeOrderResponse**](../Model/CartFinalizeOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartGet**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutCartGet($_expand)

Create a new cart

Create a new shopping cart session.  If the cookie is set on the browser making the request then it will return their active cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartGet($_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartHandoffPost**
> \ultracart\admin\v2\models\CheckoutHandoffResponse userV2CheckoutCartHandoffPost($handoff_request, $_expand)

Handoff cart

Handoff the browser to UltraCart for view cart on StoreFront, transfer to PayPal or finalization of the order (including upsell processing).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$handoff_request = new \ultracart\admin\v2\models\CheckoutHandoffRequest(); // \ultracart\admin\v2\models\CheckoutHandoffRequest | Handoff request
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartHandoffPost($handoff_request, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartHandoffPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handoff_request** | [**\ultracart\admin\v2\models\CheckoutHandoffRequest**](../Model/\ultracart\admin\v2\models\CheckoutHandoffRequest.md)| Handoff request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CheckoutHandoffResponse**](../Model/CheckoutHandoffResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartProfileLoginPost**
> \ultracart\admin\v2\models\CartProfileLoginResponse userV2CheckoutCartProfileLoginPost($login_request, $_expand)

Profile login

Login in to the customer profile specified by cart.billing.email and password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$login_request = new \ultracart\admin\v2\models\CartProfileLoginRequest(); // \ultracart\admin\v2\models\CartProfileLoginRequest | Login request
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartProfileLoginPost($login_request, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartProfileLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\ultracart\admin\v2\models\CartProfileLoginRequest**](../Model/\ultracart\admin\v2\models\CartProfileLoginRequest.md)| Login request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartProfileLoginResponse**](../Model/CartProfileLoginResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartProfileLogoutPost**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutCartProfileLogoutPost($cart, $_expand)

Profile logout

Log the cart out of the current profile.  No error will occur if they are not logged in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$cart = new \ultracart\admin\v2\models\Cart(); // \ultracart\admin\v2\models\Cart | Cart
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartProfileLogoutPost($cart, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartProfileLogoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\admin\v2\models\Cart**](../Model/\ultracart\admin\v2\models\Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartProfileRegisterPost**
> \ultracart\admin\v2\models\CartProfileRegisterResponse userV2CheckoutCartProfileRegisterPost($register_request, $_expand)

Profile registration

Register a new customer profile.  Requires the cart.billing object to be populated along with the password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$register_request = new \ultracart\admin\v2\models\CartProfileRegisterRequest(); // \ultracart\admin\v2\models\CartProfileRegisterRequest | Register request
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartProfileRegisterPost($register_request, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartProfileRegisterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\ultracart\admin\v2\models\CartProfileRegisterRequest**](../Model/\ultracart\admin\v2\models\CartProfileRegisterRequest.md)| Register request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartProfileRegisterResponse**](../Model/CartProfileRegisterResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartPut**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutCartPut($cart, $_expand)

Update cart (by cookie)

Update the cart by cookie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$cart = new \ultracart\admin\v2\models\Cart(); // \ultracart\admin\v2\models\Cart | Cart
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartPut($cart, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\admin\v2\models\Cart**](../Model/\ultracart\admin\v2\models\Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutCartValidatePost**
> \ultracart\admin\v2\models\CartValidationResponse userV2CheckoutCartValidatePost($validation_request, $_expand)

Validate

Validate the cart for errors.  Specific checks can be passed and multiple validations can occur throughout your checkout flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$validation_request = new \ultracart\admin\v2\models\CartValidationRequest(); // \ultracart\admin\v2\models\CartValidationRequest | Validation request
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutCartValidatePost($validation_request, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutCartValidatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validation_request** | [**\ultracart\admin\v2\models\CartValidationRequest**](../Model/\ultracart\admin\v2\models\CartValidationRequest.md)| Validation request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartValidationResponse**](../Model/CartValidationResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userV2CheckoutReturnReturnCodeGet**
> \ultracart\admin\v2\models\CartResponse userV2CheckoutReturnReturnCodeGet($return_code, $_expand)

Get a cart by return code

Get a cart specified by the return code parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\CheckoutApi();
$return_code = "return_code_example"; // string | Return code to lookup cart ID by
$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $api_instance->userV2CheckoutReturnReturnCodeGet($return_code, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->userV2CheckoutReturnReturnCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_code** | **string**| Return code to lookup cart ID by |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\admin\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

