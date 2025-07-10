# ultracart\v2\CheckoutApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cityState()**](CheckoutApi.md#cityState) | **POST** /checkout/city_state | City/State for Zip
[**finalizeOrder()**](CheckoutApi.md#finalizeOrder) | **POST** /checkout/cart/finalizeOrder | Finalize Order
[**getAffirmCheckout()**](CheckoutApi.md#getAffirmCheckout) | **GET** /checkout/cart/{cart_id}/affirmCheckout | Get affirm checkout (by cart id)
[**getAllowedCountries()**](CheckoutApi.md#getAllowedCountries) | **POST** /checkout/allowedCountries | Allowed countries
[**getCart()**](CheckoutApi.md#getCart) | **GET** /checkout/cart | Get cart
[**getCartByCartId()**](CheckoutApi.md#getCartByCartId) | **GET** /checkout/cart/{cart_id} | Get cart (by cart id)
[**getCartByReturnCode()**](CheckoutApi.md#getCartByReturnCode) | **GET** /checkout/return/{return_code} | Get cart (by return code)
[**getCartByReturnToken()**](CheckoutApi.md#getCartByReturnToken) | **GET** /checkout/return_token | Get cart (by return token)
[**getStateProvincesForCountry()**](CheckoutApi.md#getStateProvincesForCountry) | **POST** /checkout/stateProvincesForCountry/{country_code} | Get state/province list for a country code
[**handoffCart()**](CheckoutApi.md#handoffCart) | **POST** /checkout/cart/handoff | Handoff cart
[**login()**](CheckoutApi.md#login) | **POST** /checkout/cart/profile/login | Profile login
[**logout()**](CheckoutApi.md#logout) | **POST** /checkout/cart/profile/logout | Profile logout
[**register()**](CheckoutApi.md#register) | **POST** /checkout/cart/profile/register | Profile registration
[**registerAffiliateClick()**](CheckoutApi.md#registerAffiliateClick) | **POST** /checkout/affiliateClick/register | Register affiliate click
[**relatedItemsForCart()**](CheckoutApi.md#relatedItemsForCart) | **POST** /checkout/related_items | Related items
[**relatedItemsForItem()**](CheckoutApi.md#relatedItemsForItem) | **POST** /checkout/relatedItems/{item_id} | Related items (specific item)
[**setupBrowserKey()**](CheckoutApi.md#setupBrowserKey) | **PUT** /checkout/browser_key | Setup Browser Application
[**updateCart()**](CheckoutApi.md#updateCart) | **PUT** /checkout/cart | Update cart
[**validateCart()**](CheckoutApi.md#validateCart) | **POST** /checkout/cart/validate | Validate


## `cityState()`

```php
cityState($cart): \ultracart\v2\models\CityStateZip
```

City/State for Zip

Look up the city and state for the shipping zip code.  Useful for building an auto complete for parts of the shipping address


### Example

```php
<?php /** @noinspection DuplicatedCode */

// Reference Implementation: https://github.com/UltraCart/responsive_checkout
// Takes a postal code and returns back a city and state (US Only)

use ultracart\v2\models\Cart;
use ultracart\v2\models\CartShipping;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$cartId = '123456789123456789123456789123456789';  // you should have the cart id from session or cookie.
$cart = new Cart();
$cart->setCartId($cartId); // required
$cart->setShipping(new CartShipping());
$cart->getShipping()->setPostalCode('44233');

$api_response = $checkout_api->cityState($cart);
echo 'City: ' . $api_response->getCity() . '<br>';
echo 'State: ' . $api_response->getState() . '<br>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\v2\models\Cart**](../Model/Cart.md)| Cart |

### Return type

[**\ultracart\v2\models\CityStateZip**](../Model/CityStateZip.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeOrder()`

```php
finalizeOrder($finalize_request): \ultracart\v2\models\CartFinalizeOrderResponse
```

Finalize Order

Finalize the cart into an order.  This method can not be called with browser key authentication.  It is ONLY meant for server side code to call.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartFinalizeOrderRequest;
use ultracart\v2\models\CartFinalizeOrderRequestOptions;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// Note: You probably should NOT be using this method.  Use handoffCart() instead.
// This method is a server-side only (no browser key allowed) method for turning a cart into an order.
// It exists for merchants who wish to provide their own upsells, but again, a warning, using this method
// will exclude the customer checkout from a vast and powerful suite of functionality provided free by UltraCart.
// Still, some merchants need this functionality, so here it is.  If you're unsure, you don't need it.  Use handoff.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */


$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// TODO - add some items, collect billing and shipping, use hosted fields to collect payment, etc.

$finalizeRequest = new CartFinalizeOrderRequest();
$finalizeRequest->setCart($cart);
$finalizeOptions = new CartFinalizeOrderRequestOptions(); // Lots of options here.  Contact support if you're unsure what you need.
$finalizeRequest->setOptions($finalizeOptions);

$api_response = $checkout_api->finalizeOrder($finalizeRequest);
// $api_response->getSuccessful();
// $api_response->getErrors();
// $api_response->getOrderId();
// $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finalize_request** | [**\ultracart\v2\models\CartFinalizeOrderRequest**](../Model/CartFinalizeOrderRequest.md)| Finalize request |

### Return type

[**\ultracart\v2\models\CartFinalizeOrderResponse**](../Model/CartFinalizeOrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAffirmCheckout()`

```php
getAffirmCheckout($cart_id): \ultracart\v2\models\CartAffirmCheckoutResponse
```

Get affirm checkout (by cart id)

Get a Affirm checkout object for the specified cart_id parameter.


### Example

```php
<?php /** @noinspection DuplicatedCode */

// Reference Implementation: https://github.com/UltraCart/responsive_checkout
// For a given cart id (the cart should be fully updated in UltraCart), returns back the json object
// needed to proceed with an Affirm checkout.  See https://www.affirm.com/ for details about Affirm.
// This sample does not show the construction of the affirm checkout widgets.  See the affirm api for those examples.

require_once '../vendor/autoload.php';
require_once '../constants.php';

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);
$cart_id = '123456789123456789123456789123456789'; // this should be retrieved from a session or cookie
$api_response = $checkout_api->getAffirmCheckout($cart_id);
if(!is_null($api_response->getErrors()) && count($api_response->getErrors()) > 0){
    // TODO: display errors to customer about the failure
    foreach ($api_response->getErrors() as $error) {
        var_dump($error);
    }
} else {
    var_dump($api_response->getCheckoutJson()); // this is the object to send to Affirm.
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| Cart ID to retrieve |

### Return type

[**\ultracart\v2\models\CartAffirmCheckoutResponse**](../Model/CartAffirmCheckoutResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllowedCountries()`

```php
getAllowedCountries(): \ultracart\v2\models\CheckoutAllowedCountriesResponse
```

Allowed countries

Lookup the allowed countries for this merchant id


### Example

```php
<?php /** @noinspection DuplicatedCode */

// Reference Implementation: https://github.com/UltraCart/responsive_checkout
// A simple method for populating the country list boxes with all the countries this merchant has configured to accept.

require_once '../vendor/autoload.php';
require_once '../constants.php';

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$api_response = $checkout_api->getAllowedCountries();
$allowed_countries = $api_response->getCountries();

foreach ($allowed_countries as $country) {
    var_dump($country); // contains both iso2code and name
}
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CheckoutAllowedCountriesResponse**](../Model/CheckoutAllowedCountriesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCart()`

```php
getCart($_expand): \ultracart\v2\models\CartResponse
```

Get cart

If the cookie is set on the browser making the request then it will return their active cart.  Otherwise it will create a new cart.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example is the same for both getCart.php and getCartByCartId.php.  They work as a pair and are called
// depending on the presence of an existing cart id or not.  For new carts, getCart() is used.  For existing
// carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */


$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// TODO: set or re-set the cart cookie if this is part of a multi-page process. two weeks is a generous cart id time.
setcookie(Constants::CART_ID_COOKIE_NAME, $cart->getCartId(), time() + 1209600, "/");

echo '<html lang="en"><body><pre>';
var_dump($cart);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartByCartId()`

```php
getCartByCartId($cart_id, $_expand): \ultracart\v2\models\CartResponse
```

Get cart (by cart id)

Get a cart specified by the cart_id parameter.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example is the same for both getCart.php and getCartByCartId.php.  They work as a pair and are called
// depending on the presence of an existing cart id or not.  For new carts, getCart() is used.  For existing
// carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "items"; // for this example, we're just getting a cart to insert some items into it.

$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// TODO: set or re-set the cart cookie if this is part of a multi-page process. two weeks is a generous cart id time.
setcookie(Constants::CART_ID_COOKIE_NAME, $cart->getCartId(), time() + 1209600, "/");

echo '<html lang="en"><body><pre>';
var_dump($cart);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| Cart ID to retrieve |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartByReturnCode()`

```php
getCartByReturnCode($return_code, $_expand): \ultracart\v2\models\CartResponse
```

Get cart (by return code)

Get a cart specified by the return code parameter.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example returns a shopping cart given a return_code.  The return_code is generated by UltraCart
// and usually emailed to a customer.  The email will provide a link to this script where you may use the
// return_code to retrieve the customer's cart.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */

$return_code = '1234567890'; // usually retrieved from a query parameter
$api_response = $checkout_api->getCartByReturnCode($return_code, $expansion);
$cart = $api_response->getCart();

// TODO: set or re-set the cart cookie if this is part of a multi-page process. two weeks is a generous cart id time.
setcookie(Constants::CART_ID_COOKIE_NAME, $cart->getCartId(), time() + 1209600, "/");

echo '<html lang="en"><body><pre>';
var_dump($cart);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_code** | **string**| Return code to lookup cart ID by |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCartByReturnToken()`

```php
getCartByReturnToken($return_token, $_expand): \ultracart\v2\models\CartResponse
```

Get cart (by return token)

Get a cart specified by the encrypted return token parameter.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example returns a shopping cart given a return_token.  The return token is generated by StoreFront Communications
// and usually emailed to a customer.  The link within the email will (when you configure your storefront communications)
// provide a link to this script where you may use the token to retrieve the customer's cart.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */

$cart_token = '1234567890'; // usually retrieved from a query parameter
$api_response = $checkout_api->getCartByReturnToken($cart_token, $expansion);
$cart = $api_response->getCart();

// TODO: set or re-set the cart cookie if this is part of a multi-page process. two weeks is a generous cart id time.
setcookie(Constants::CART_ID_COOKIE_NAME, $cart->getCartId(), time() + 1209600, "/");

echo '<html lang="en"><body><pre>';
var_dump($cart);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_token** | **string**| Return token provided by StoreFront Communications | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStateProvincesForCountry()`

```php
getStateProvincesForCountry($country_code): \ultracart\v2\models\CheckoutStateProvinceResponse
```

Get state/province list for a country code

Lookup a state/province list for a given country code


### Example

```php
<?php /** @noinspection DuplicatedCode */

// Reference Implementation: https://github.com/UltraCart/responsive_checkout
// A simple method for populating the state_region list boxes with all the states/regions allowed for a country code.

require_once '../vendor/autoload.php';
require_once '../constants.php';

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$country_code = 'US';

$api_response = $checkout_api->getStateProvincesForCountry($country_code);
$provinces = $api_response->getStateProvinces();

foreach ($provinces as $province) {
    var_dump($province); // contains both name and abbreviation
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two letter ISO country code |

### Return type

[**\ultracart\v2\models\CheckoutStateProvinceResponse**](../Model/CheckoutStateProvinceResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handoffCart()`

```php
handoffCart($handoff_request, $_expand): \ultracart\v2\models\CheckoutHandoffResponse
```

Handoff cart

Handoff the browser to UltraCart for view cart on StoreFront, transfer to PayPal, transfer to Affirm, transfer to Sezzle or finalization of the order (including upsell processing).


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example uses the getCart.php code as a starting point, because we must get a cart to handoff a cart.
// here, we are handing off the cart to the ultracart engine with an operation of 'view', meaning that we
// simply added some items to the cart and wish for UltraCart to gather the remaining customer information
// as part of a normal checkout operation.
// valid operations are: "view", "checkout", "paypal", "paypalcredit", "affirm", "sezzle"
// Besides "view", the other operations are finalizers.
// "checkout": finalize the transaction using a customer's personal credit card (traditional checkout)
// "paypal": finalize the transaction by sending the customer to PayPal

// getCart.php code start ----------------------------------------------------------------------------

// this example is the same for both getCart.php and getCartByCartId.php.  They work as a pair and are called
// depending on the presence of an existing cart id or not.  For new carts, getCart() is used.  For existing
// carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "items"; // for this example, we're just getting a cart to insert some items into it.

$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// getCart.php code end ----------------------------------------------------------------------------


// Although the above code checks for a cookie and retrieves or creates a cart based on the cookie presence, typically
// a php script calling the handoff() method will have an existing cart, so you may wish to check for a cookie and
// redirect if there isn't one.  However, it is possible that you wish to create a cart, update it, and hand it off
// to UltraCart all within one script, so we've left the conditional cart creation calls intact.

$handoff_request = new \ultracart\v2\models\CheckoutHandoffRequest();
$handoff_request->setCart($cart);
$handoff_request->setOperation("view");
$handoff_request->setErrorReturnUrl("/some/page/on/this/php/server/that/can/handle/errors/if/ultracart/encounters/an/issue/with/this/cart.php");
$handoff_request->setErrorParameterName("uc_error"); // name this whatever the script supplied in ->setErrorReturnUrl() will check for in the $_GET object.
$handoff_request->setSecureHostName("mystorefront.com"); // set to desired storefront.  some merchants have multiple storefronts.
$api_response = $checkout_api->handoffCart($handoff_request, $expansion);


if(!is_null($api_response->getErrors()) && !empty($api_response->getErrors())){
    // TODO: handle errors that might happen before handoff and manage those
} else {
    $redirect_url = $api_response->getRedirectToUrl();
    header('Location: '. $redirect_url);
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handoff_request** | [**\ultracart\v2\models\CheckoutHandoffRequest**](../Model/CheckoutHandoffRequest.md)| Handoff request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CheckoutHandoffResponse**](../Model/CheckoutHandoffResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `login()`

```php
login($login_request, $_expand): \ultracart\v2\models\CartProfileLoginResponse
```

Profile login

Login in to the customer profile specified by cart.billing.email and password


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartBilling;
use ultracart\v2\models\CartProfileLoginRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// This example logs a user into the UltraCart system.
// This example assumes you already have a shopping cart object created.
// For new carts, getCart() is used.  For existing carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

// Note: customer_profile is a required expansion for login to work properly
$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes";
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html

// create a new cart (change this to an existing if you have one)
$cart = $checkout_api->getCart($expansion)->getCart();

$email = 'test@test.com'; // collect this from user.
$password = 'ABC123'; // collect this from user.

$cart->setBilling(new CartBilling());
$cart->getBilling()->setEmail($email);

$loginRequest = new CartProfileLoginRequest();
$loginRequest->setCart($cart); // will look for billing.email
$loginRequest->setPassword($password);

$api_response = $checkout_api->login($loginRequest);
$cart = $api_response->getCart();

if($api_response->getSuccess()){
    // proceed with successful login.
} else {
    // notify customer login failed.
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**\ultracart\v2\models\CartProfileLoginRequest**](../Model/CartProfileLoginRequest.md)| Login request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartProfileLoginResponse**](../Model/CartProfileLoginResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout($cart, $_expand): \ultracart\v2\models\CartResponse
```

Profile logout

Log the cart out of the current profile.  No error will occur if they are not logged in.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartBilling;
use ultracart\v2\models\CartProfileLoginRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// This example logs a user OUT of the UltraCart system.
//  It assumes the shopping cart has already had a successful login.
// see login sdk_sample for logging in help.
// For new carts, getCart() is used.  For existing carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

// Note: customer_profile is a required expansion for login to work properly
$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes";
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html

// create a new cart (change this to an existing if you have one)
$cart = $checkout_api->getCart($expansion)->getCart();

$email = 'test@test.com'; // collect this from user.
$password = 'ABC123'; // collect this from user.

$cart->setBilling(new CartBilling());
$cart->getBilling()->setEmail($email);

$loginRequest = new CartProfileLoginRequest();
$loginRequest->setCart($cart); // will look for billing.email
$loginRequest->setPassword($password);

$api_response = $checkout_api->login($loginRequest);
$cart = $api_response->getCart();

if($api_response->getSuccess()){
    $checkout_api->logout($cart, $expansion); // <-- Here is the logout call.
} else {
    // notify customer login failed. Until they login, you can't logout.
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\v2\models\Cart**](../Model/Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($register_request, $_expand): \ultracart\v2\models\CartProfileRegisterResponse
```

Profile registration

Register a new customer profile.  Requires the cart.billing object to be populated along with the password.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartBilling;
use ultracart\v2\models\CartProfileRegisterRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// Registers a user in your merchant system.  This will create a customer profile.
// For new carts, getCart() is used.  For existing carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

// Note: customer_profile is a required expansion for login to work properly
$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes";
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html

// create a new cart (change this to an existing if you have one)
$cart = $checkout_api->getCart($expansion)->getCart();

$email = 'test@test.com'; // collect this from user.
$password = 'ABC123'; // collect this from user.

$cart->setBilling(new CartBilling());
$cart->getBilling()->setEmail($email); // this is the username.


$registerRequest = new CartProfileRegisterRequest();
$registerRequest->setCart($cart); // will look for billing.email
$registerRequest->setPassword($password);

$api_response = $checkout_api->register($registerRequest);
$cart = $api_response->getCart(); // Important!  Get the cart from the response.

if($api_response->getSuccess()){
    echo 'Successfully registered new customer profile!<br>';
} else {
    foreach ($api_response->getErrors() as $error) {
        var_dump($error);
    }
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**\ultracart\v2\models\CartProfileRegisterRequest**](../Model/CartProfileRegisterRequest.md)| Register request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartProfileRegisterResponse**](../Model/CartProfileRegisterResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerAffiliateClick()`

```php
registerAffiliateClick($register_affiliate_click_request, $_expand): \ultracart\v2\models\RegisterAffiliateClickResponse
```

Register affiliate click

Register an affiliate click.  Used by custom checkouts that are completely API based and do not perform checkout handoff.


### Example

```php
<?php /** @noinspection DuplicatedCode */

// Reference Implementation: https://github.com/UltraCart/responsive_checkout
// Records an affiliate click.

use ultracart\v2\models\RegisterAffiliateClickRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$clickRequest = new RegisterAffiliateClickRequest();
$clickRequest->setIpAddress($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);
$clickRequest->setUserAgent($_SERVER['HTTP_USER_AGENT'] ?? '');
$clickRequest->setReferrerUrl($_SERVER['HTTP_REFERER'] ?? '');
$clickRequest->setAffid(123456789); // you should know this from your UltraCart affiliate system.
$clickRequest->setSubid('TODO:SupplyThisValue');
// $clickRequest->setLandingPageUrl(null);  // if you have landing page url.

$api_response = $checkout_api->registerAffiliateClick($clickRequest);

var_dump($api_response);
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_affiliate_click_request** | [**\ultracart\v2\models\RegisterAffiliateClickRequest**](../Model/RegisterAffiliateClickRequest.md)| Register affiliate click request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\RegisterAffiliateClickResponse**](../Model/RegisterAffiliateClickResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relatedItemsForCart()`

```php
relatedItemsForCart($cart, $_expand): \ultracart\v2\models\ItemsResponse
```

Related items

Retrieve all the related items for the cart contents.  Expansion is limited to content, content.assignments, content.attributes, content.multimedia, content.multimedia.thumbnails, options, pricing, and pricing.tiers.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartFinalizeOrderRequest;
use ultracart\v2\models\CartFinalizeOrderRequestOptions;
use ultracart\v2\models\CartItem;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// Retrieves items related to the items within the cart.  Item relations are configured in the UltraCart backend.
// See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377171/Related+Items

// Note: The returned items have a fixed expansion (only so many item properties are returned).  The item expansion is:
// content, content.assignments, content.attributes, content.multimedia, content.multimedia.thumbnails, options, pricing, and pricing.tiers

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */


$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// TODO - add some items to the cart and update.

$items = [];
$cartItem = new CartItem();
$cartItem->setItemId('ITEM_ABC');
$cartItem->setQuantity(1);
$items[] = $cartItem;
$cart->setItems($items);

// update the cart and assign it back to our variable.
$cart = $checkout_api->updateCart($cart, $expansion)->getCart();

$api_response = $checkout_api->relatedItemsForCart($cart);
$related_items = $api_response->getItems();

echo '<html lang="en"><body><pre>';
var_dump($related_items);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\v2\models\Cart**](../Model/Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See item resource documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `relatedItemsForItem()`

```php
relatedItemsForItem($item_id, $cart, $_expand): \ultracart\v2\models\ItemsResponse
```

Related items (specific item)

Retrieve all the related items for the cart contents.  Expansion is limited to content, content.assignments, content.attributes, content.multimedia, content.multimedia.thumbnails, options, pricing, and pricing.tiers.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\models\CartFinalizeOrderRequest;
use ultracart\v2\models\CartFinalizeOrderRequestOptions;
use ultracart\v2\models\CartItem;

require_once '../vendor/autoload.php';
require_once '../constants.php';
// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// Retrieves items related to the items within the cart, in addition to another item id you supply.
// Item relations are configured in the UltraCart backend.
// See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377171/Related+Items

// Note: The returned items have a fixed expansion (only so many item properties are returned).  The item expansion is:
// content, content.assignments, content.attributes, content.multimedia, content.multimedia.thumbnails, options, pricing, and pricing.tiers

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "customer_profile,items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html
/*
affiliate                   checkout	                        customer_profile
billing                     coupons                             gift
gift_certificate	        items.attributes	                items.multimedia
items	                    items.multimedia.thumbnails         items.physical
marketing	                payment	                            settings.gift
settings.billing.provinces	settings.shipping.deliver_on_date   settings.shipping.estimates
settings.shipping.provinces	settings.shipping.ship_on_date	    settings.taxes
settings.terms	            shipping	                        taxes
summary	                    upsell_after
 */


$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// TODO - add some items to the cart and update.

$items = [];
$cartItem = new CartItem();
$cartItem->setItemId('ITEM_ABC');
$cartItem->setQuantity(1);
$items[] = $cartItem;
$cart->setItems($items);

// update the cart and assign it back to our variable.
$cart = $checkout_api->updateCart($cart, $expansion)->getCart();


$another_item_id = 'ITEM_ZZZ';

$api_response = $checkout_api->relatedItemsForItem($another_item_id, $cart, $expansion);
$related_items = $api_response->getItems();

echo '<html lang="en"><body><pre>';
var_dump($related_items);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| Item ID to retrieve related items for |
 **cart** | [**\ultracart\v2\models\Cart**](../Model/Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See item resource documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\ItemsResponse**](../Model/ItemsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setupBrowserKey()`

```php
setupBrowserKey($browser_key_request): \ultracart\v2\models\CheckoutSetupBrowserKeyResponse
```

Setup Browser Application

Setup a browser key authenticated application with checkout permissions.  This REST call must be made with an authentication scheme that is not browser key.  The new application will be linked to the application that makes this call.  If this application is disabled / deleted, then so will the application setup by this call.  The purpose of this call is to allow an OAuth application, such as the Wordpress plugin, to setup the proper browser based authentication for the REST checkout API to use.


### Example

```php
<?php

/*
    This is a checkout api method.  It creates a browser key for use in a client side checkout.  This call must be
    made server side with a Simple API Key or an OAuth access_token.
 */

use ultracart\v2\api\CheckoutApi;
use ultracart\v2\models\CheckoutSetupBrowserKeyRequest;

require_once '../vendor/autoload.php';

$checkout_api = CheckoutApi::usingApiKey(Constants::API_KEY);

$keyRequest = new CheckoutSetupBrowserKeyRequest();
$keyRequest->setAllowedReferrers(["https://www.mywebsite.com"]);
$browser_key = $checkout_api->setupBrowserKey($keyRequest)->getBrowserKey();

echo '<html lang="en"><body><pre>';
var_dump($browser_key);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **browser_key_request** | [**\ultracart\v2\models\CheckoutSetupBrowserKeyRequest**](../Model/CheckoutSetupBrowserKeyRequest.md)| Setup browser key request |

### Return type

[**\ultracart\v2\models\CheckoutSetupBrowserKeyResponse**](../Model/CheckoutSetupBrowserKeyResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCart()`

```php
updateCart($cart, $_expand): \ultracart\v2\models\CartResponse
```

Update cart

Update the cart.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

// Reference Implementation: https://github.com/UltraCart/responsive_checkout

// this example uses the getCart.php code as a starting point, because we must get a cart to update a cart.
// getCart.php code start ----------------------------------------------------------------------------
// this example is the same for both getCart.php and getCartByCartId.php.  They work as a pair and are called
// depending on the presence of an existing cart id or not.  For new carts, getCart() is used.  For existing
// carts, getCartByCartId($cart_id) is used.

$checkout_api = ultracart\v2\api\CheckoutApi::usingApiKey(Constants::API_KEY);

$expansion = "items"; // for this example, we're just getting a cart to insert some items into it.

$cart_id = null;
if(isset($_COOKIE[Constants::CART_ID_COOKIE_NAME])){
    $cart_id = $_COOKIE[Constants::CART_ID_COOKIE_NAME];
}

$cart = null;
if(is_null($cart_id)){
    $api_response = $checkout_api->getCart($expansion);
} else {
    $api_response = $checkout_api->getCartByCartId($cart_id, $expansion);
}
$cart = $api_response->getCart();

// getCart.php code end ----------------------------------------------------------------------------

// for this simple example, items will be added to the cart.  so our expansion variable is simply 'items' above.
// Get the items array on the cart, creating it if it doesn't exist.
$items = $cart->getItems();
// If null, go ahead and initialize it to an empty array
if ($items == null) {
    $items = array();
}

// Create a new item
$item = new ultracart\v2\models\CartItem();
$item->setItemId("BASEBALL"); // TODO: Adjust the item id
$item->setQuantity(1); // TODO: Adjust the quantity

// TODO: If your item has options then you need to create a new ultracart\v2\models\CartItemOption object and push it into the array.
$options = array();
$item->setOptions($options);

// Add the item to the $items array
array_push($items, $item);

// Make sure to update the $cart with the new array
$cart->setItems($items);

// Push the cart up to save the item
$cart_response = $checkout_api->updateCart($cart, $expansion);

// Extract the updated cart from the response
$cart = $cart_response->getCart();

// TODO: set or re-set the cart cookie if this is part of a multi-page process. two weeks is a generous cart id time.
setcookie(Constants::CART_ID_COOKIE_NAME, $cart->getCartId(), time() + 1209600, "/");


echo '<html lang="en"><body><pre>';
var_dump($cart);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart** | [**\ultracart\v2\models\Cart**](../Model/Cart.md)| Cart |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartResponse**](../Model/CartResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateCart()`

```php
validateCart($validation_request, $_expand): \ultracart\v2\models\CartValidationResponse
```

Validate

Validate the cart for errors.  Specific checks can be passed and multiple validations can occur throughout your checkout flow.


### Example

```php
<?php

/*
    This is a checkout api method.  It can be used both server side or client side.  This example is a server side
    call using a Simple API Key.  See the JavaScript sdk samples if you wish to see a browser key implementation.

    validateCart passes a shopping cart to UltraCart for validation.
 */

use ultracart\v2\api\CheckoutApi;
use ultracart\v2\models\CartValidationRequest;

require_once '../vendor/autoload.php';

$checkout_api = CheckoutApi::usingApiKey(Constants::API_KEY);
$cart_id = '123456789123456789123456789123456789'; // usually this would be retrieved from a session variable or cookie.

$expansion = "items,billing,shipping,coupons,checkout,payment,summary,taxes"; //
// Possible Expansion Variables: (see https://www.ultracart.com/api/#resource_checkout.html) also see getCart() example


$cart = $checkout_api->getCartByCartId($cart_id, $expansion)->getCart();

$validationRequest = new CartValidationRequest();
$validationRequest->setCart($cart);
// $validationRequest->setChecks(); // leave this null for all validations
// Possible Checks
/*
All,Advertising Source Provided,Billing Address Provided,
Billing Destination Restriction,Billing Phone Numbers Provided,Billing State Abbreviation Valid,Billing Validate City State Zip,
Coupon Zip Code Restriction,Credit Card Shipping Method Conflict,Customer Profile Does Not Exist.,CVV2 Not Required,
Electronic Check Confirm Account Number,Email confirmed,Email provided if required,Gift Message Length,Item Quantity Valid,
Item Restrictions,Items Present,Merchant Specific Item Relationships,One per customer violations,Options Provided,
Payment Information Validate,Payment Method Provided,Payment Method Restriction,Pricing Tier Limits,Quantity requirements met,
Referral Code Provided,Shipping Address Provided,Shipping Destination Restriction,Shipping Method Provided,
Shipping Needs Recalculation,Shipping State Abbreviation Valid,Shipping Validate City State Zip,Special Instructions Length,
Tax County Specified,Valid Delivery Date,Valid Ship On Date,Auth Test Credit Card
 */

// This method also does an update in the process, so pass in a good expansion and grab the return cart variable.
$api_response = $checkout_api->validateCart($validationRequest, $expansion);
$cart = $api_response->getCart();

echo '<html lang="en"><body><pre>';
echo 'Validation Errors:';
var_dump($api_response->getErrors());
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validation_request** | [**\ultracart\v2\models\CartValidationRequest**](../Model/CartValidationRequest.md)| Validation request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\CartValidationResponse**](../Model/CartValidationResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
