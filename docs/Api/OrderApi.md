# ultracart\v2\OrderApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustOrderTotal()**](OrderApi.md#adjustOrderTotal) | **POST** /order/orders/{order_id}/adjust_order_total/{desired_total} | Adjusts an order total
[**assignToAffiliate()**](OrderApi.md#assignToAffiliate) | **POST** /order/orders/{order_id}/assignToAffiliate | Assigns an order to an affiliate
[**blockRefundOnOrder()**](OrderApi.md#blockRefundOnOrder) | **GET** /order/orders/{order_id}/refund_block | Set a refund block on an order
[**cancelOrder()**](OrderApi.md#cancelOrder) | **POST** /order/orders/{order_id}/cancel | Cancel an order
[**deleteOrder()**](OrderApi.md#deleteOrder) | **DELETE** /order/orders/{order_id} | Delete an order
[**duplicateOrder()**](OrderApi.md#duplicateOrder) | **POST** /order/orders/{order_id}/duplicate | Duplicate an order
[**format()**](OrderApi.md#format) | **POST** /order/orders/{order_id}/format | Format order
[**generateInvoice()**](OrderApi.md#generateInvoice) | **GET** /order/orders/{order_id}/invoice | Generate an invoice for this order.
[**generateOrderToken()**](OrderApi.md#generateOrderToken) | **GET** /order/orders/token/{order_id} | Generate an order token for a given order id
[**generatePackingSlipAllDC()**](OrderApi.md#generatePackingSlipAllDC) | **GET** /order/orders/{order_id}/packing_slip | Generate a packing slip for this order across all distribution centers.
[**generatePackingSlipSpecificDC()**](OrderApi.md#generatePackingSlipSpecificDC) | **GET** /order/orders/{order_id}/packing_slip/{distribution_center_code} | Generate a packing slip for this order for the given distribution center.
[**getAccountsReceivableRetryConfig()**](OrderApi.md#getAccountsReceivableRetryConfig) | **GET** /order/accountsReceivableRetryConfig | Retrieve A/R Retry Configuration
[**getAccountsReceivableRetryStats()**](OrderApi.md#getAccountsReceivableRetryStats) | **GET** /order/accountsReceivableRetryConfig/stats | Retrieve A/R Retry Statistics
[**getOrder()**](OrderApi.md#getOrder) | **GET** /order/orders/{order_id} | Retrieve an order
[**getOrderByToken()**](OrderApi.md#getOrderByToken) | **POST** /order/orders/token | Retrieve an order using a token
[**getOrderEdiDocuments()**](OrderApi.md#getOrderEdiDocuments) | **GET** /order/orders/{order_id}/edi | Retrieve EDI documents associated with this order.
[**getOrderUpsellCart()**](OrderApi.md#getOrderUpsellCart) | **PUT** /order/orders/{order_id}/upsell_with_cart | Get Order Upsell Cart
[**getOrders()**](OrderApi.md#getOrders) | **GET** /order/orders | Retrieve orders
[**getOrdersBatch()**](OrderApi.md#getOrdersBatch) | **POST** /order/orders/batch | Retrieve order batch
[**getOrdersByQuery()**](OrderApi.md#getOrdersByQuery) | **POST** /order/orders/query | Retrieve orders by query
[**insertOrder()**](OrderApi.md#insertOrder) | **POST** /order/orders | Insert an order
[**isRefundableOrder()**](OrderApi.md#isRefundableOrder) | **GET** /order/orders/{order_id}/refundable | Determine if an order can be refunded
[**processPayment()**](OrderApi.md#processPayment) | **POST** /order/orders/{order_id}/process_payment | Process payment
[**refundOrder()**](OrderApi.md#refundOrder) | **PUT** /order/orders/{order_id}/refund | Refund an order
[**replaceOrderItemMerchantItemId()**](OrderApi.md#replaceOrderItemMerchantItemId) | **PUT** /order/orders/{order_id}/replace_item_id | Replaces an order item id
[**replacement()**](OrderApi.md#replacement) | **POST** /order/orders/{order_id}/replacement | Replacement order
[**resendReceipt()**](OrderApi.md#resendReceipt) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
[**resendShipmentConfirmation()**](OrderApi.md#resendShipmentConfirmation) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation
[**unblockRefundOnOrder()**](OrderApi.md#unblockRefundOnOrder) | **GET** /order/orders/{order_id}/refund_unblock | Remove a refund block on an order
[**updateAccountsReceivableRetryConfig()**](OrderApi.md#updateAccountsReceivableRetryConfig) | **POST** /order/accountsReceivableRetryConfig | Update A/R Retry Configuration
[**updateOrder()**](OrderApi.md#updateOrder) | **PUT** /order/orders/{order_id} | Update an order
[**validateOrder()**](OrderApi.md#validateOrder) | **POST** /order/validate | Validate


## `adjustOrderTotal()`

```php
adjustOrderTotal($order_id, $desired_total): \ultracart\v2\models\BaseResponse
```

Adjusts an order total

Adjusts an order total.  Adjusts individual items appropriately and considers taxes.  Desired total should be provided in the same currency as the order and must be less than the current total and greater than zero.  This call will change the order total.  It returns true if the desired total is achieved.  If the goal seeking algorithm falls short (usually by pennies), this method returns back false.  View the merchant notes for the order for further details.


### Example

```php
<?php

/*
 * OrderApi.adjustOrderTotal() takes a desired order total and performs goal-seeking to adjust all items and taxes
 * appropriately.  This method was created for merchants dealing with Medicare and Medicaid.  When selling their
 * medical devices, they would often run into limits approved by Medicare.  As such, they needed to adjust the
 * order total to match the approved amount.  This is a convenience method to adjust individual items and their
 * taxes to match the desired total.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

$order_api = Samples::getOrderApi();

$order_id = 'DEMO-0009104390';
$desired_total = '21.99';
$api_response = $order_api->adjustOrderTotal($order_id, $desired_total);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    echo 'Order could not be adjusted.  See php error log.';
    exit();
}

if($api_response->getSuccess()){
    echo 'Order was adjusted successfully.  Use getOrder() to retrieve the order if needed.';
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to cancel. |
 **desired_total** | **string**| The desired total with no formatting. example 123.45 |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignToAffiliate()`

```php
assignToAffiliate($order_id, $assign_to_affiliate_request, $_expand): \ultracart\v2\models\OrderResponse
```

Assigns an order to an affiliate

Assigns an order to an affiliate.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to assign to the affiliate. |
 **assign_to_affiliate_request** | [**\ultracart\v2\models\OrderAssignToAffiliateRequest**](../Model/OrderAssignToAffiliateRequest.md)| Assign to affiliate request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockRefundOnOrder()`

```php
blockRefundOnOrder($order_id, $block_reason)
```

Set a refund block on an order

Sets a refund block on an order to prevent a user from performing a refund.  Commonly used when a chargeback has been received.


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/**
 * blockRefundOnOrder sets an order property that is considered when a refund request is made.
 * If the property is present, the refund is denied.  Being an order property allows for querying
 * upon it within BigQuery for audit purposes.
 */
$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);


$order_id = 'DEMO-0009105222';
$order_api->blockRefundOnOrder($order_id, 'Chargeback');

echo '<html lang="en"><body><pre>';
echo 'method executed successfully, returns back 204 No Content.';
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to block a refund on. |
 **block_reason** | **string**| Block reason code (optional) | [optional]

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

## `cancelOrder()`

```php
cancelOrder($order_id, $lock_self_ship_orders, $skip_refund_and_hold): \ultracart\v2\models\BaseResponse
```

Cancel an order

Cancel an order on the UltraCart account.  If the success flag is false, then consult the error message for why it failed.


### Example

```php
<?php

/*
 * OrderApi.cancelOrder() will do just that.  It will cancel an order by rejecting it.
 * However, the following restrictions apply:
 * 1) If the order is already completed, this call will fail.
 * 2) If the order has already been rejected, this call will fail.
 * 3) If the order has already been transmitted to a fulfillment center, this call will fail.
 * 4) If the order is queued for transmission to a distribution center, this call will fail.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

$order_api = Samples::getOrderApi();

$order_id = 'DEMO-0009104390';
$api_response = $order_api->cancelOrder($order_id);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    echo 'Order could not be canceled.  See php error log.';
    exit();
}

if($api_response->getSuccess()){
    echo 'Order was canceled successfully.';
}
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to cancel. |
 **lock_self_ship_orders** | **bool**| Flag to prevent a order shipping during a refund process | [optional]
 **skip_refund_and_hold** | **bool**| Skip refund and move order to Held Orders department | [optional]

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($order_id)
```

Delete an order

Delete an order on the UltraCart account.


### Example

```php
<?php

/*
 * OrderApi.deleteOrder() will do just that.  It will delete an order.
 * You might find it more useful to reject an order rather than delete it in order to leave an audit trail.
 * However, deleting test orders will be useful to keep your order history tidy.  Still, any order
 * may be deleted.
 */

require_once '../vendor/autoload.php';
require_once '../samples.php';

$order_api = Samples::getOrderApi();

$order_id = 'DEMO-0008104390';
$order_api->deleteOrder($order_id);
echo 'Order was deleted successfully.';

```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to delete. |

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

## `duplicateOrder()`

```php
duplicateOrder($order_id, $_expand): \ultracart\v2\models\OrderResponse
```

Duplicate an order

Perform a duplicate of the specified order_id and return a new order located in Accounts Receivable.


### Example

```php
<?php /** @noinspection DuplicatedCode */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderItem;
use ultracart\v2\models\Currency;
use ultracart\v2\models\Weight;
use ultracart\v2\models\OrderProcessPaymentRequest;


require_once '../vendor/autoload.php';
require_once '../samples.php';

$order_api = Samples::getOrderApi();

/*
 * OrderApi.duplicateOrder() does not accomplish much on its own.  The use-case for this method is to
 * duplicate a customer's order and then charge them for it.  duplicateOrder() does not charge the customer again.
 *
 * These are the steps for cloning an existing order and charging the customer for it.
 * 1. duplicateOrder
 * 2. updateOrder (if you wish to change any part of it)
 * 3. processPayment to charge the customer.
 *
 * As a reminder, if you wish to create a new order from scratch, use the CheckoutApi or ChannelPartnerApi.
 * The OrderApi is for managing existing orders.
 */


$expansion = "items";   // for this example, we're going to change the items after we duplicate the order, so
// the only expansion properties we need are the items.
// See: https://www.ultracart.com/api/  for a list of all expansions.

// Step 1. Duplicate the order
$order_id_to_duplicate = 'DEMO-0009104436';
$api_response = $order_api->duplicateOrder($order_id_to_duplicate, $expansion);
$new_order = $api_response->getOrder();

// Step 2. Update the items.  I will create a new items array and assign it to the order to remove the old ones completely.
$items = array();
$item = new OrderItem();
$item->setMerchantItemId('simple_teapot');
$item->setQuantity(1);
$item->setDescription("A lovely teapot");
$item->setDistributionCenterCode('DFLT'); // where is this item shipping out of?

$cost = new Currency();
$cost->setCurrencyCode('USD');
$cost->setValue(9.99);
$item->setCost($cost);

$weight = new Weight();
$weight->setUom("OZ");
$weight->setValue(6);
$item->setWeight($weight);

$items[] = $item;
$new_order->setItems($items);
$update_response = $order_api->updateOrder($new_order->getOrderId(), $new_order, $expansion);

$updated_order = $update_response->getOrder();

// Step 3. process the payment.
// the request object below takes two optional arguments.
// The first is an amount if you wish to bill for an amount different from the order.
// We do not bill differently in this example.
// The second is card_verification_number_token, which is a token you can create by using our hosted fields to
// upload a CVV value.  This will create a token you may use here.  However, most merchants using the duplicate
// order method will be setting up an auto order for a customer.  Those will not make use of the CVV, so we're
// not including it here.  That is why the request object below is does not have any values set.
// For more info on hosted fields:
// See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377775/UltraCart+Hosted+Credit+Card+Fields
// See: https://github.com/UltraCart/sdk_samples/blob/master/hosted_fields/hosted_fields.html

$process_payment_request = new OrderProcessPaymentRequest();
$payment_response = $order_api->processPayment($new_order->getOrderId(), $process_payment_request);
$transaction_details = $payment_response->getPaymentTransaction(); // do whatever you wish with this.

echo '<html lang="en"><body><pre>';
echo 'New Order (after updated items):<br>';
var_dump($updated_order);
echo '<br>Payment Response:<br>';
var_dump($payment_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to duplicate. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `format()`

```php
format($order_id, $format_options): \ultracart\v2\models\OrderFormatResponse
```

Format order

Format the order for display at text or html


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * format() returns back a text-formatted or html block for displaying an order.  It is similar to what you would
 * see on a receipt page.
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderFormat;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = OrderApi::usingApiKey(Constants::API_KEY);


$format_options = new OrderFormat();
$format_options->setContext('receipt'); // unknown,receipt,shipment,refund,quote-request,quote
$format_options->setFormat('table'); // text,div,table,email
$format_options->setShowContactInfo(false);
$format_options->setShowPaymentInfo(false); // might not want to show this to just anyone.
$format_options->setShowMerchantNotes(false); // be careful showing these
$format_options->setEmailAsLink(true); // makes the email addresses web links
// if you only wish to show the items for a particular distribution center,
// this might be useful if you have setContext('shipment') and you're displaying this order to a fulfillment center, etc
// $format_options->setFilterDistributionCenterOid(1234321);
$format_options->setLinkFileAttachments(true);
$format_options->setShowInternalInformation(true); // consider this carefully.
$format_options->setShowNonSensitivePaymentInfo(true); // what the customer usually sees
$format_options->setShowInMerchantCurrency(true);
$format_options->setHideBillToAddress(false);
// $format_options->setFilterToItemsInContainerOid(123454321); // you probably won't need this.
// when an order displays on the secure.ultracart.com site, we link the email to our order search so you can quickly
// search for all orders for that email.  I doubt you would have use for that.  But maybe.
$format_options->setDontLinkEmailToSearch(true);
$format_options->setTranslate(false); // if true, shows in customer's native language


$order_id = 'DEMO-0009104390';


$api_response = $order_api->format($order_id, $format_options);

$formatted_result = $api_response->getFormattedResult();
echo '<html lang="en">';
echo '<head>';
// you won't have css links for format=table
foreach($api_response->getCssLinks() as $link){
    echo '<style type="text/css">' . $link . '</style>';
}
echo '</head><body>';
echo $formatted_result;
echo '</body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to format |
 **format_options** | [**\ultracart\v2\models\OrderFormat**](../Model/OrderFormat.md)| Format options |

### Return type

[**\ultracart\v2\models\OrderFormatResponse**](../Model/OrderFormatResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateInvoice()`

```php
generateInvoice($order_id): \ultracart\v2\models\OrderInvoiceResponse
```

Generate an invoice for this order.

The invoice PDF that is returned is base 64 encoded


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
    generateInvoice returns back a base64 encoded byte array of the given order's Invoice in PDF format.

 */

$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);


$order_id = 'DEMO-0009104976';
$api_response = $order_api->generateInvoice($order_id);

// the packing slip will return as a base64 encoded
// unpack, save off, email, whatever.
$base64_pdf = $api_response->getPdfBase64();

$decoded_pdf = base64_decode($base64_pdf);
file_put_contents('invoice.pdf', $decoded_pdf);


// Set the PDF headers
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="invoice.pdf"');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');
header('Content-Length: ' . strlen($decoded_pdf));

// Output the PDF bytes
echo $decoded_pdf;
exit;
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrderInvoiceResponse**](../Model/OrderInvoiceResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOrderToken()`

```php
generateOrderToken($order_id): \ultracart\v2\models\OrderTokenResponse
```

Generate an order token for a given order id

Retrieves a single order token for a given order id.  The token can be used with the getOrderByToken API.


### Example

```php
<?php

/*
 * This method generates a unique encrypted key for an Order.  This is useful if you wish to provide links for
 * customer orders without allowing someone to easily cycle through orders.  By requiring order tokens, you
 * control which orders are viewable with a public hyperlink.
 *
 * This method works in tandem with OrderApi.getOrderByToken()
 */

require_once '../vendor/autoload.php';
require_once '../constants.php';

use ultracart\v2\api\OrderApi;

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$order_id = 'DEMO-0009104436';
$order_token_response = $order_api->generateOrderToken($order_id);
$order_token = $order_token_response->getOrderToken();

echo '<html lang="en"><body><pre>Order Token is: ' . $order_token . '</pre></body></html>';

/*
 * The token format will look something like this:
 * DEMO:UJZOGiIRLqgE3a10yp5wmEozLPNsGrDHNPiHfxsi0iAEcxgo9H74J/l6SR3X8g==
 */


```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to generate a token for. |

### Return type

[**\ultracart\v2\models\OrderTokenResponse**](../Model/OrderTokenResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePackingSlipAllDC()`

```php
generatePackingSlipAllDC($order_id): \ultracart\v2\models\OrderPackingSlipResponse
```

Generate a packing slip for this order across all distribution centers.

The packing slip PDF that is returned is base 64 encoded


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * OrderApi.generatePackingSlipAllDC() is a method that might be used by a fulfillment center or distribution
 * center to generate a packing slip to include with a shipment.  This method will return a packing slip for
 * an order for all distribution centers involved.
 *
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderFormat;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$order_id = 'DEMO-0009104390';


$api_response = $order_api->generatePackingSlipAllDC($order_id);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

// the packing slip will return as a base64 encoded
// unpack, save off, email, whatever.
$base64_packing_slip = $api_response->getPdfBase64();


echo '</head><body><pre>';
echo $base64_packing_slip;
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrderPackingSlipResponse**](../Model/OrderPackingSlipResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePackingSlipSpecificDC()`

```php
generatePackingSlipSpecificDC($distribution_center_code, $order_id): \ultracart\v2\models\OrderPackingSlipResponse
```

Generate a packing slip for this order for the given distribution center.

The packing slip PDF that is returned is base 64 encoded


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * OrderApi.generatePackingSlipSpecificDC() is a method that might be used by a fulfillment center or distribution
 * center to generate a packing slip to include with a shipment.  As such, this method allows for a packing slip
 * for a specific distribution center (DC) in the case that an order has multiple shipments from multiple DC.
 *
 * You must know the DC, which should not be a problem for any custom shipping application.
 * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377114/Distribution+Center
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderFormat;

require_once '../vendor/autoload.php';
require_once '../constants.php';

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$order_id = 'DEMO-0009104390';
$dc = 'DFLT';


$api_response = $order_api->generatePackingSlipSpecificDC($dc, $order_id);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

// the packing slip will return as a base64 encoded
// unpack, save off, email, whatever.
$base64_packing_slip = $api_response->getPdfBase64();


echo '</head><body><pre>';
echo $base64_packing_slip;
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distribution_center_code** | **string**| Distribution center code |
 **order_id** | **string**| Order ID |

### Return type

[**\ultracart\v2\models\OrderPackingSlipResponse**](../Model/OrderPackingSlipResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsReceivableRetryConfig()`

```php
getAccountsReceivableRetryConfig(): \ultracart\v2\models\AccountsReceivableRetryConfigResponse
```

Retrieve A/R Retry Configuration

Retrieve A/R Retry Configuration. This is primarily an internal API call.  It is doubtful you would ever need to use it.


### Example

```php
// This is primarily an internal API call.  It is doubtful you would ever need to use it.
// We do not provide an example for this call.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\AccountsReceivableRetryConfigResponse**](../Model/AccountsReceivableRetryConfigResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountsReceivableRetryStats()`

```php
getAccountsReceivableRetryStats($from, $to): \ultracart\v2\models\AccountsReceivableRetryStatsResponse
```

Retrieve A/R Retry Statistics

Retrieve A/R Retry Statistics. This is primarily an internal API call.  It is doubtful you would ever need to use it.


### Example

```php
// This is primarily an internal API call.  It is doubtful you would ever need to use it.
// We do not provide an example for this call.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  | [optional]
 **to** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\AccountsReceivableRetryStatsResponse**](../Model/AccountsReceivableRetryStatsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $_expand): \ultracart\v2\models\OrderResponse
```

Retrieve an order

Retrieves a single order using the specified order id.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * OrderApi.getOrder() retrieves a single order for a given order_id.
 */

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = OrderApi::usingApiKey(Constants::API_KEY);

// The expansion variable instructs UltraCart how much information to return.  The order object is large and
// while it's easily manageable for a single order, when querying thousands of orders, is useful to reduce
// payload size.
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/
$expansion = "item,summary,billing,shipping,shipping.tracking_number_details";

$order_id = 'DEMO-0009104390';
$api_response = $order_api->getOrder($order_id, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$order = $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to retrieve. |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderByToken()`

```php
getOrderByToken($order_by_token_query, $_expand): \ultracart\v2\models\OrderResponse
```

Retrieve an order using a token

Retrieves a single order using the specified order token.


### Example

```php
<?php

/*
 * OrderApi.getOrderByToken() was created for use within a custom thank-you page.  The built-in StoreFront
 * thank you page displays the customer receipt and allows for unlimited customization.  However, many
 * merchants wish to process the receipt page on their own servers to do custom processing.
 *
 * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377199/Custom+Thank+You+Page+URL
 *
 * When setting up a custom thank-you url in the StoreFronts, you will provide a query parameter that will hold
 * this order token.  You many extract that from the $_GET object, then turn around and call getOrderByToken
 * to get the order object.
 */

require_once '../vendor/autoload.php';
require_once '../constants.php';

use ultracart\v2\api\OrderApi;
use \ultracart\v2\models\OrderByTokenQuery;

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

// The expansion variable instructs UltraCart how much information to return.  The order object is large and
// while it's easily manageable for a single order, when querying thousands of orders, is useful to reduce
// payload size.
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/

$expansion = "billing,checkout,coupon,customer_profile,item,payment,shipping,summary,taxes";

// the token will be in a $_GET parameter defined by you within your storefront.
// StoreFront -> Privacy and Tracking -> Advanced -> CustomThankYouUrl
// Example would be: www.mysite.com/receipt.php?orderToken=[OrderToken]

$order_token = $_GET['OrderToken'];
// $order_token = 'DEMO:UZBOGywSKKwD2a5wx5JwmkwyIPNsGrDHNPiHfxsi0iAEcxgo9H74J/l6SR3X8g=='; // this won't work for you...
// to generate an order token manually for testing, set generateOrderToken.php
// TODO (for you, the merchant): handle missing order token (perhaps this page somehow called by a search engine, etc).


$order_token_query = new OrderByTokenQuery();
$order_token_query->setOrderToken($order_token);
$api_response = $order_api->getOrderByToken($order_token_query, $expansion);
$order = $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_by_token_query** | [**\ultracart\v2\models\OrderByTokenQuery**](../Model/OrderByTokenQuery.md)| Order by token query |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderEdiDocuments()`

```php
getOrderEdiDocuments($order_id): \ultracart\v2\models\OrderEdiDocumentsResponse
```

Retrieve EDI documents associated with this order.

Retrieve EDI documents associated with this order.


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
    getOrderEdiDocuments returns back all EDI documents associated with an order.

    Possible Errors:
    Order.channelPartnerOid is null -> "Order is not associated with an EDI channel partner."

 */


$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);


$order_id = 'DEMO-0009104976';
$documents = $order_api->getOrderEdiDocuments($order_id)->getEdiDocuments();

echo '<html lang="en"><body><pre>';
var_dump($documents);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to retrieve EDI documents for. |

### Return type

[**\ultracart\v2\models\OrderEdiDocumentsResponse**](../Model/OrderEdiDocumentsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderUpsellCart()`

```php
getOrderUpsellCart($order_id, $upsell_cart_request, $_expand): \ultracart\v2\models\OrderResponse
```

Get Order Upsell Cart

Creates a new cart using cloned information from the order, but with a specific set of items, coupons and optionally a checkout URL to return the customer to


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to base things on. |
 **upsell_cart_request** | [**\ultracart\v2\models\OrderUpsellCartRequest**](../Model/OrderUpsellCartRequest.md)| Request for the upsell cart |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($order_id, $payment_method, $company, $first_name, $last_name, $city, $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code, $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end, $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage, $channel_partner_code, $channel_partner_order_id, $_limit, $_offset, $_sort, $_expand): \ultracart\v2\models\OrdersResponse
```

Retrieve orders

Retrieves a group of orders from the account.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the orders returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

set_time_limit(3000); // pull all orders could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * getOrders was the first order query provided by UltraCart.  It still functions well, but it is extremely verbose
 * because the query call takes a variable for every possible filter.  You are advised to get getOrdersByQuery().
 * It is easier to use and will result in less code.  Still, we provide an example here to be thorough.
 *
 * For this email, we will query all orders for a particular email address.  The getOrdersByQuery() example
 * illustrates using a date range to filter and select orders.
 */

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = ultracart\v2\api\OrderApi::usingApiKey(Constants::API_KEY);


function getOrderChunk(OrderApi $order_api, int $offset, int $limit): array
{
    $expansion = "item,summary,billing,shipping,shipping.tracking_number_details";
    // see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
    /*
    Possible Order Expansions:
    affiliate           affiliate.ledger                    auto_order
    billing             channel_partner                     checkout
    coupon              customer_profile                    digital_order
    edi                 fraud_score                         gift
    gift_certificate    internal                            item
    linked_shipment     marketing                           payment
    payment.transaction quote                               salesforce
    shipping            shipping.tracking_number_details    summary
    taxes
    */

    $order_id = null;
    $payment_method = null;
    $company = null;
    $first_name = null;
    $last_name = null;
    $city = null;
    $state_region = null;
    $postal_code = null;
    $country_code = null;
    $phone = null;
    $email = 'support@ultracart.com'; // <-- this is the only filter we're using.
    $cc_email = null;
    $total = null;
    $screen_branding_theme_code = null;
    $storefront_host_name = null;
    $creation_date_begin = null;
    $creation_date_end = null;
    $payment_date_begin = null;
    $payment_date_end = null;
    $shipment_date_begin = null;
    $shipment_date_end = null;
    $rma = null;
    $purchase_order_number = null;
    $item_id = null;
    $current_stage = null;
    $channel_partner_code = null;
    $channel_partner_order_id = null;
    $_sort = null;


    // see all these parameters?  that is why you should use getOrdersByQuery() instead of getOrders()
    $api_response = $order_api->getOrders($order_id, $payment_method, $company, $first_name, $last_name, $city,
        $state_region, $postal_code, $country_code, $phone, $email, $cc_email, $total, $screen_branding_theme_code,
        $storefront_host_name, $creation_date_begin, $creation_date_end, $payment_date_begin, $payment_date_end,
        $shipment_date_begin, $shipment_date_end, $rma, $purchase_order_number, $item_id, $current_stage,
        $channel_partner_code, $channel_partner_order_id, $limit, $offset, $_sort, $expansion);

    if($api_response->getOrders() != null){
        return $api_response->getOrders();
    }
    return [];
}

$orders = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

while( $more_records_to_fetch ){

    echo "executing iteration " . $iteration . '<br>';
    $chunk_of_orders = getOrderChunk($order_api, $offset, $limit);
    $orders = array_merge($orders, $chunk_of_orders);
    $offset = $offset + $limit;
    $more_records_to_fetch = count($chunk_of_orders) == $limit;
    $iteration++;

}

// this could get verbose...
echo '<html lang="en"><body><pre>';
var_dump($orders);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order Id | [optional]
 **payment_method** | **string**| Payment Method | [optional]
 **company** | **string**| Company | [optional]
 **first_name** | **string**| First Name | [optional]
 **last_name** | **string**| Last Name | [optional]
 **city** | **string**| City | [optional]
 **state_region** | **string**| State/Region | [optional]
 **postal_code** | **string**| Postal Code | [optional]
 **country_code** | **string**| Country Code (ISO-3166 two letter) | [optional]
 **phone** | **string**| Phone | [optional]
 **email** | **string**| Email | [optional]
 **cc_email** | **string**| CC Email | [optional]
 **total** | **float**| Total | [optional]
 **screen_branding_theme_code** | **string**| Screen Branding Theme Code | [optional]
 **storefront_host_name** | **string**| StoreFront Host Name | [optional]
 **creation_date_begin** | **string**| Creation Date Begin | [optional]
 **creation_date_end** | **string**| Creation Date End | [optional]
 **payment_date_begin** | **string**| Payment Date Begin | [optional]
 **payment_date_end** | **string**| Payment Date End | [optional]
 **shipment_date_begin** | **string**| Shipment Date Begin | [optional]
 **shipment_date_end** | **string**| Shipment Date End | [optional]
 **rma** | **string**| RMA | [optional]
 **purchase_order_number** | **string**| Purchase Order Number | [optional]
 **item_id** | **string**| Item Id | [optional]
 **current_stage** | **string**| Current Stage | [optional]
 **channel_partner_code** | **string**| Channel Partner Code | [optional]
 **channel_partner_order_id** | **string**| Channel Partner Order ID | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersBatch()`

```php
getOrdersBatch($order_batch, $_expand): \ultracart\v2\models\OrdersResponse
```

Retrieve order batch

Retrieves a group of orders from the account based on an array of order ids.  If more than 500 order ids are specified, the API call will fail with a bad request error.


### Example

```php
<?php

ini_set('display_errors', 1);

/*
 * This method is useful when you need to query a defined set of orders and would like to avoid querying them
 * one at a time.
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderQueryBatch;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = OrderApi::usingApiKey(Constants::API_KEY);


$expansion = "item,summary,billing,shipping,shipping.tracking_number_details";
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/

$order_batch = new OrderQueryBatch();
$order_ids = array('DEMO-0009104390', 'DEMO-0009104391', 'DEMO-0009104392');
$order_batch->setOrderIds($order_ids);

$api_response = $order_api->getOrdersBatch($order_batch, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$orders = $api_response->getOrders();
if(sizeof($orders) == 0){
    error_log("There were no orders returned by this query.");
}

// do something with the orders.  for this example, we're just accessing many properties as illustration.
foreach ($orders as $order) {
    $summary = $order->getSummary();
    $actual_shipping_cost = is_null($summary->getActualShipping()) ? 0 : $summary->getActualShipping()->getLocalized();

    $currentStage = $order->getCurrentStage();
    $s_addr = $order->getShipping();
    $trackingNumbers = $s_addr->getTrackingNumbers();
    foreach ($trackingNumbers as $tnum) {
        // do something with tracking number here.
    }
    $sfname = $s_addr -> getFirstName();
    $slname = $s_addr -> getLastName();
    $saddress1 = $s_addr->getAddress1();
    $saddress2 = $s_addr->getAddress2();
    $scity = $s_addr->getCity();
    $sregion = $s_addr->getStateRegion();
    $sccode = $s_addr->getCountryCode();
    $spcode = $s_addr->getPostalCode();
    $sdayphone = $s_addr->getDayPhone();
    $shipping_method = $s_addr->getShippingMethod();

    $b_addr = $order->getBilling();
    $b_addr->getAddress1();
    $b_addr->getAddress2();
    $b_addr->getCity();
    $b_addr->getStateRegion();
    $b_addr->getCountryCode();
    $b_addr->getPostalCode();
    $bemail = $b_addr->getEmail(); // email is located on the billing object.

    // here is how to access the items
    $items = $order->getItems();
    foreach ($items as $item) {
        $qty = $item->getQuantity();
        $itemId = $item->getMerchantItemId();
        $description = $item->getDescription();
        $cost = $item->getCost();
        $cost->getLocalized(); // cost as float.
        $real_cost = $cost->getLocalizedFormatted(); // cost with symbols.
    }
}

// this could get verbose depending on the size of your batch ...
echo '<html lang="en"><body><pre>';
var_dump($orders);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_batch** | [**\ultracart\v2\models\OrderQueryBatch**](../Model/OrderQueryBatch.md)| Order batch |
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersByQuery()`

```php
getOrdersByQuery($order_query, $_limit, $_offset, $_sort, $_expand): \ultracart\v2\models\OrdersResponse
```

Retrieve orders by query

Retrieves a group of orders from the account based on a query object.  If no parameters are specified, the API call will fail with a bad request error.  Always specify some parameters to limit the scope of the orders returned to ones you are truly interested in.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php

set_time_limit(3000); // pull all orders could take a long time.
ini_set('max_execution_time', 3000);
ini_set('display_errors', 1);

/*
 * This example illustrates how to query the OrderQuery object to select a range of records.  It uses a subroutine
 * to aggregate the records that span multiple API calls.  This example illustrates a work-around to selecting
 * all rejected orders.  Because the UltraCart SDK does not have a way to query orders based on whether they
 * were rejected, we can instead query based on the rejected_dts, which is null if the order is not rejected.
 * So we will simply use a large time frame to ensure we query all rejections.
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderQuery;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = ultracart\v2\api\OrderApi::usingApiKey(Constants::API_KEY);


function getOrderChunk(OrderApi $order_api, int $offset, int $limit): array
{
    $expansion = "item,summary,billing,shipping,shipping.tracking_number_details";
    // see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
    /*
    Possible Order Expansions:
    affiliate           affiliate.ledger                    auto_order
    billing             channel_partner                     checkout
    coupon              customer_profile                    digital_order
    edi                 fraud_score                         gift
    gift_certificate    internal                            item
    linked_shipment     marketing                           payment
    payment.transaction quote                               salesforce
    shipping            shipping.tracking_number_details    summary
    taxes
    */

    $query = new OrderQuery();
    // Uncomment the next two lines to retrieve a single order.  But there are simpler methods to do that.
    // $order_id = "DEMO-0009104390";
    // $order_query->setOrderId($order_id);

    $begin_dts = date('Y-m-d', strtotime('-2000 days')) . "T00:00:00+00:00"; // yes, that 2,000 days.
    $end_dts = date('Y-m-d', time()) . "T00:00:00+00:00";
    error_log($begin_dts);
    error_log($end_dts);

    $query->setRefundDateBegin($begin_dts);
    $query->setRefundDateEnd($end_dts);

    $api_response = $order_api->getOrdersByQuery($query, $limit, $offset, null, $expansion);
    if($api_response->getOrders() != null){
        return $api_response->getOrders();
    }
    return [];
}

$orders = [];

$iteration = 1;
$offset = 0;
$limit = 200;
$more_records_to_fetch = true;

while( $more_records_to_fetch ){

    echo "executing iteration " . $iteration . '<br>';
    $chunk_of_orders = getOrderChunk($order_api, $offset, $limit);
    $orders = array_merge($orders, $chunk_of_orders);
    $offset = $offset + $limit;
    $more_records_to_fetch = count($chunk_of_orders) == $limit;
    $iteration++;

}

// this could get verbose...
echo '<html lang="en"><body><pre>';
var_dump($orders);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_query** | [**\ultracart\v2\models\OrderQuery**](../Model/OrderQuery.md)| Order query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the orders.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]
 **_expand** | **string**| The object expansion to perform on the result. | [optional]

### Return type

[**\ultracart\v2\models\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertOrder()`

```php
insertOrder($order, $_expand): \ultracart\v2\models\OrderResponse
```

Insert an order

Inserts a new order on the UltraCart account.  This is probably NOT the method you want.  This is for channel orders.  For regular orders the customer is entering, use the CheckoutApi.  It has many, many more features, checks, and validations.


### Example

```php
<?php

/*
 * Please do not use OrderApi.insertOrder()
 * This method was provided in the first release of our REST API.
 * It was replaced with our ChannelPartnerApi.importChannelPartnerOrder()
 *
 * Here are your options:
 * If you need to add regular orders that still require payment processing, use the CheckoutApi.
 *    The CheckoutApi has fantastic support for payment processing.
 *
 * If you need to add channel partner orders (eBay, Amazon, your call center, etc), use the ChannelPartnerApi.
 *    The ChannelPartnerApi has appropriate support for processing such orders.
 *
 * We support our entire API forever, so this method remains active.  But, we do not provide any samples for it.
 * You may use it, but we believe it will require extra time and effort and possibly much frustration.
 *
 * Reminder: The ONLY way to provide credit card numbers and cvv numbers to the UltraCart system is through
 * hosted fields.
 * See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377775/UltraCart+Hosted+Credit+Card+Fields
 * See: https://github.com/UltraCart/sdk_samples/blob/master/hosted_fields/hosted_fields.html
 */

echo '<html><body>Please see script comments.</body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to insert |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isRefundableOrder()`

```php
isRefundableOrder($order_id): \ultracart\v2\models\OrderRefundableResponse
```

Determine if an order can be refunded

Determine if an order can be refunded based upon payment method and age


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
    isRefundable queries the UltraCart system whether an order is refundable or not.
    In addition to a simple boolean response, UltraCart also returns back any reasons why
    an order is not refundable.
    Finally, the response also contains any refund or return reasons configured on the account in the event
    that this merchant account is configured to require a reason for a return or refund.

 */


$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);


$order_id = 'DEMO-0009104976';
$api_response = $order_api->isRefundableOrder($order_id);

echo '<html lang="en"><body><pre>';
var_dump($api_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to check for refundable order. |

### Return type

[**\ultracart\v2\models\OrderRefundableResponse**](../Model/OrderRefundableResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processPayment()`

```php
processPayment($order_id, $process_payment_request): \ultracart\v2\models\OrderProcessPaymentResponse
```

Process payment

Process payment on order


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
 * OrderApi.processPayment() was designed to charge a customer for an order.  It was created to work in tandem with
 * duplicateOrder(), which does not accomplish payment on its own.  The use-case for this method is to
 * duplicate a customer's order and then charge them for it.  duplicateOrder() does not charge the customer again,
 * which is why processPayment() exists.
 *
 * These are the steps for cloning an existing order and charging the customer for it.
 * 1. duplicateOrder
 * 2. updateOrder (if you wish to change any part of it)
 * 3. processPayment to charge the customer.
 *
 * As a reminder, if you wish to create a new order from scratch, use the CheckoutApi or ChannelPartnerApi.
 * The OrderApi is for managing existing orders.
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderItem;
use ultracart\v2\models\Currency;
use ultracart\v2\models\Weight;
use ultracart\v2\models\OrderProcessPaymentRequest;

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$expansion = "items";   // for this example, we're going to change the items after we duplicate the order, so
// the only expansion properties we need are the items.
// See: https://www.ultracart.com/api/  for a list of all expansions.

// Step 1. Duplicate the order
$order_id_to_duplicate = 'DEMO-0009104436';
$api_response = $order_api->duplicateOrder($order_id_to_duplicate, $expansion);
$new_order = $api_response->getOrder();

// Step 2. Update the items.  I will create a new items array and assign it to the order to remove the old ones completely.
$items = array();
$item = new OrderItem();
$item->setMerchantItemId('simple_teapot');
$item->setQuantity(1);
$item->setDescription("A lovely teapot");
$item->setDistributionCenterCode('DFLT'); // where is this item shipping out of?

$cost = new Currency();
$cost->setCurrencyCode('USD');
$cost->setValue(9.99);
$item->setCost($cost);

$weight = new Weight();
$weight->setUom("OZ");
$weight->setValue(6);
$item->setWeight($weight);

$items[] = $item;
$new_order->setItems($items);
$update_response = $order_api->updateOrder($new_order->getOrderId(), $new_order, $expansion);

$updated_order = $update_response->getOrder();

// Step 3. process the payment.
// the request object below takes two optional arguments.
// The first is an amount if you wish to bill for an amount different from the order.
// We do not bill differently in this example.
// The second is card_verification_number_token, which is a token you can create by using our hosted fields to
// upload a CVV value.  This will create a token you may use here.  However, most merchants using the duplicate
// order method will be setting up an auto order for a customer.  Those will not make use of the CVV, so we're
// not including it here.  That is why the request object below is does not have any values set.
// For more info on hosted fields:
// See: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/1377775/UltraCart+Hosted+Credit+Card+Fields
// See: https://github.com/UltraCart/sdk_samples/blob/master/hosted_fields/hosted_fields.html

$process_payment_request = new OrderProcessPaymentRequest();
$payment_response = $order_api->processPayment($new_order->getOrderId(), $process_payment_request);
$transaction_details = $payment_response->getPaymentTransaction(); // do whatever you wish with this.

echo '<html lang="en"><body><pre>';
echo 'New Order (after updated items):<br>';
var_dump($updated_order);
echo '<br>Payment Response:<br>';
var_dump($payment_response);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to process payment on |
 **process_payment_request** | [**\ultracart\v2\models\OrderProcessPaymentRequest**](../Model/OrderProcessPaymentRequest.md)| Process payment parameters |

### Return type

[**\ultracart\v2\models\OrderProcessPaymentResponse**](../Model/OrderProcessPaymentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrder()`

```php
refundOrder($order_id, $order, $reject_after_refund, $skip_customer_notification, $auto_order_cancel, $manual_refund, $reverse_affiliate_transactions, $issue_store_credit, $auto_order_cancel_reason, $_expand): \ultracart\v2\models\OrderResponse
```

Refund an order

Perform a refund operation on an order and then update the order if successful.  All of the object properties ending in _refunded should be the TOTAL amount that should end up being refunded.  UltraCart will calculate the actual amount to refund based upon the prior refunds.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
 * refundOrder() allows for both partial and complete refunds.  Both are accomplished with the same steps.
 * 1) retrieve an order object using the SDK.
 * 2) input the refunded quantities for any or all items
 * 3) call refundOrder, passing in the modified object.
 * 4) To do a full refund, set all item refund quantities to their purchased quantities.
 *
 * This example will perform a full refund.
 *
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\Order;
use ultracart\v2\models\OrderItem;

$order_api = OrderApi::usingApiKey(Constants::API_KEY, 0, false);

// for the refund, I only need the items expanded to adjust their quantities.
// See: https://www.ultracart.com/api/  for a list of all expansions.
$expansion = "items";

// Step 1. Retrieve the order
$order_id = 'DEMO-0009104436';
$order = $order_api->getOrder($order_id, $expansion)->getOrder();


foreach($order->getItems() as $item){
    $item->setQuantityRefunded($item->getQuantity());
}

$reject_after_refund = false;
$skip_customer_notification = true;
$cancel_associated_auto_orders = true; // does not matter for this sample. the order is not a recurring order.
$consider_manual_refund_done_externally = false; // no, I want an actual refund done through my gateway
$reverse_affiliate_transactions = true; // can't let my affiliates get money on a refunded order.  bad business.

/** @noinspection PhpConditionAlreadyCheckedInspection */
$api_response = $order_api->refundOrder($order_id, $order, $reject_after_refund, $skip_customer_notification,
    $cancel_associated_auto_orders, $consider_manual_refund_done_externally, $reverse_affiliate_transactions, false, null, $expansion);

$refunded_order = $api_response->getOrder();

// examined the subtotals and ensure everything was refunded correctly.
echo '<html lang="en"><body><pre>';
var_dump($refunded_order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to refund. |
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to refund |
 **reject_after_refund** | **bool**| Reject order after refund | [optional] [default to false]
 **skip_customer_notification** | **bool**| Skip customer email notification | [optional] [default to false]
 **auto_order_cancel** | **bool**| Cancel associated auto orders | [optional] [default to false]
 **manual_refund** | **bool**| Consider a manual refund done externally | [optional] [default to false]
 **reverse_affiliate_transactions** | **bool**| Reverse affiliate transactions | [optional] [default to true]
 **issue_store_credit** | **bool**| Issue a store credit instead of refunding the original payment method, loyalty must be configured on merchant account | [optional] [default to false]
 **auto_order_cancel_reason** | **string**| Reason for auto orders cancellation | [optional]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceOrderItemMerchantItemId()`

```php
replaceOrderItemMerchantItemId($order_id, $replace_order_item_id_request, $_expand): \ultracart\v2\models\OrderResponse
```

Replaces an order item id

Replaces a single order item id with another merchant_item_id, leaving all other attributes and properties unchanged.  A custom method requested by a merchant to allow for item id updates due to shipping errors.  It is doubtful you will ever need this method.  The expansion variable affects the returned order object.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to update. |
 **replace_order_item_id_request** | [**\ultracart\v2\models\ReplaceOrderItemIdRequest**](../Model/ReplaceOrderItemIdRequest.md)| Replacement Request |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replacement()`

```php
replacement($order_id, $replacement): \ultracart\v2\models\OrderReplacementResponse
```

Replacement order

Create a replacement order based upon a previous order


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
 * The use-case for replacement() is to create another order for a customer to replace the items of the existing
 * order.  For example, a merchant is selling perishable goods and the goods arrive late, spoiled.  replacement()
 * helps to create another order to send more goods to the customer.
 *
 * You MUST supply the items you desire in the replacement order.  This is done with the OrderReplacement.items field.
 * All options are displayed below including whether to charge the customer for this replacement order or not.
 *
 */

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderReplacement;
use ultracart\v2\models\OrderReplacementItem;

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

// Step 1. Replace the order
$order_id_to_replace = 'DEMO-0009104436';
$replacement_options = new OrderReplacement();
$replacement_options->setOriginalOrderId($order_id_to_replace);

$items = array();

$item1 = new OrderReplacementItem();
$item1->setMerchantItemId('TSHIRT');
$item1->setQuantity(1);
// $item1->setArbitraryUnitCost(9.99);
$items[] = $item1;

$item2 = new OrderReplacementItem();
$item2->setMerchantItemId('BONE');
$item2->setQuantity(2);
$items[] = $item2;

$replacement_options->setItems($items);

// $replacement_options->getShippingMethod('FedEx: Ground');
$replacement_options->setImmediateCharge(true);
$replacement_options->setSkipPayment(true);
$replacement_options->setFree(true);
$replacement_options->setCustomField1('Whatever');
$replacement_options->setCustomField4('More Whatever');
$replacement_options->setAdditionalMerchantNotesNewOrder('Replacement order for spoiled ice cream');
$replacement_options->setAdditionalMerchantNotesOriginalOrder('This order was replaced.');

$api_response = $order_api->replacement($order_id_to_replace, $replacement_options);


echo '<html lang="en"><body><pre>';
echo 'Replacement Order: ' . $api_response->getOrderId();
echo 'Success flag: ' . $api_response->getSuccessful();
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to generate a replacement for. |
 **replacement** | [**\ultracart\v2\models\OrderReplacement**](../Model/OrderReplacement.md)| Replacement order details |

### Return type

[**\ultracart\v2\models\OrderReplacementResponse**](../Model/OrderReplacementResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendReceipt()`

```php
resendReceipt($order_id): \ultracart\v2\models\BaseResponse
```

Resend receipt

Resend the receipt for an order on the UltraCart account.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
 * OrderApi.resendReceipt() will resend (email) a receipt to a customer.
 *
 */

use ultracart\v2\api\OrderApi;

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$order_id = 'DEMO-0009104436';

$api_response = $order_api->resendReceipt($order_id);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    echo 'Order could not be adjusted.  See php error log.';
    exit();
}

echo '<html lang="en"><body><pre>';
if($api_response->getSuccess()){
    echo 'Receipt was resent.';
} else {
    echo 'Failed to resend receipt.';
}
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to resend the receipt for. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendShipmentConfirmation()`

```php
resendShipmentConfirmation($order_id): \ultracart\v2\models\BaseResponse
```

Resend shipment confirmation

Resend shipment confirmation for an order on the UltraCart account.


### Example

```php
<?php /** @noinspection DuplicatedCode */

require_once '../vendor/autoload.php';
require_once '../constants.php';

use ultracart\v2\api\OrderApi;

/*
 * OrderApi.resendShipmentConfirmation() will resend (email) a shipment confirmation to a customer.
 *
 */

$order_api = OrderApi::usingApiKey(Constants::API_KEY);

$order_id = 'DEMO-0009104436';

$api_response = $order_api->resendShipmentConfirmation($order_id);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    echo 'Order could not be adjusted.  See php error log.';
    exit();
}

echo '<html lang="en"><body><pre>';
if($api_response->getSuccess()){
    echo 'Shipment confirmation was resent.';
} else {
    echo 'Failed to resend shipment confirmation.';
}
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to resend the shipment notification for. |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockRefundOnOrder()`

```php
unblockRefundOnOrder($order_id)
```

Remove a refund block on an order

Removes a refund block on an order to prevent a user from performing a refund.


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/**
 * unblockRefundOnOrder removes an order property that is considered when a refund request is made.
 * If the property is present, the refund is denied.  Being an order property allows for querying
 * upon it within BigQuery for audit purposes.
 */
$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);


$order_id = 'DEMO-0009105222';
$order_api->unblockRefundOnOrder($order_id);

echo '<html lang="en"><body><pre>';
echo 'method executed successfully, returns back 204 No Content.';
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to unblock a refund on. |

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

## `updateAccountsReceivableRetryConfig()`

```php
updateAccountsReceivableRetryConfig($retry_config): \ultracart\v2\models\BaseResponse
```

Update A/R Retry Configuration

Update A/R Retry Configuration.  This is primarily an internal API call.  It is doubtful you would ever need to use it.


### Example

```php
// This is primarily an internal API call.  It is doubtful you would ever need to use it.
// We do not provide an example for this call.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retry_config** | [**\ultracart\v2\models\AccountsReceivableRetryConfig**](../Model/AccountsReceivableRetryConfig.md)| AccountsReceivableRetryConfig object |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($order_id, $order, $_expand): \ultracart\v2\models\OrderResponse
```

Update an order

Update a new order on the UltraCart account.  This is probably NOT the method you want.  It is rare to update a completed order.  This will not trigger charges, emails, or any other automation.


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);

$expansion = "checkout"; // see the getOrder sample for expansion discussion

$order_id = 'DEMO-0009104976';
$order = $order_api->getOrder($order_id, $expansion)->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);

// TODO: do some updates to the order.

$api_response = $order_api->updateOrder($order_id, $order, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$updated_order = $api_response->getOrder();

echo '<br>After Update<br><br>';
var_dump($updated_order);
echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order id to update. |
 **order** | [**\ultracart\v2\models\Order**](../Model/Order.md)| Order to update |
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateOrder()`

```php
validateOrder($validation_request): \ultracart\v2\models\OrderValidationResponse
```

Validate

Validate the order for errors.  Specific checks can be passed to fine tune what is validated. Read and write permissions are required because the validate method may fix obvious address issues automatically which require update permission.This rest call makes use of the built-in translation of rest objects to UltraCart internal objects which also contains a multitude of validation checks that cannot be trapped.  Therefore any time this call is made, you should also trap api exceptions and examine their content because it may contain validation issues.  So check the response object and trap any exceptions.


### Example

```php
<?php

ini_set('display_errors', 1);

use ultracart\v2\api\OrderApi;
use ultracart\v2\models\OrderValidationRequest;

require_once '../vendor/autoload.php';
require_once '../constants.php';

/*
    validateOrder may be used to check for any and all validation errors that may result from an insertOrder
    or updateOrder call.  Because those method are built on our existing infrastructure, some validation
    errors may not bubble up to the rest api call and instead be returned as generic "something went wrong" errors.
    This call will return detail validation issues needing correction.

    Within the ValidationRequest, you may leave the 'checks' array null to check for everything, or pass
    an array of the specific checks you desire.  Here is a list of the checks:

    "Billing Address Provided"
    "Billing Destination Restriction"
    "Billing Phone Numbers Provided"
    "Billing State Abbreviation Valid"
    "Billing Validate City State Zip"
    "Email provided if required"
    "Gift Message Length"
    "Item Quantity Valid"
    "Items Present"
    "Merchant Specific Item Relationships"
    "One per customer violations"
    "Referral Code Provided"
    "Shipping Address Provided"
    "Shipping Destination Restriction"
    "Shipping Method Ignore Invalid"
    "Shipping Method Provided"
    "Shipping State Abbreviation Valid"
    "Shipping Validate City State Zip"
    "Special Instructions Length"

 */


$order_api = OrderApi::usingApiKey(Constants::API_KEY, false, false);

$expansion = "checkout"; // see the getOrder sample for expansion discussion

$order_id = 'DEMO-0009104976';
$order = $order_api->getOrder($order_id, $expansion)->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);

// TODO: do some updates to the order.
$validationRequest = new OrderValidationRequest();
$validationRequest->setOrder($order);
$validationRequest->setChecks(null); // leaving this null to perform all validations.

$api_response = $order_api->validateOrder($validationRequest);

echo 'Validation errors:<br>';
if ($api_response->getErrors() != null) {
    foreach ($api_response->getErrors() as $error) {
        echo $error . "\n";
    }
}

echo 'Validation messages:<br>';
if ($api_response->getMessages() != null) {
    foreach ($api_response->getMessages() as $message) {
        echo $message . "\n";
    }
}

echo '</pre></body></html>';
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validation_request** | [**\ultracart\v2\models\OrderValidationRequest**](../Model/OrderValidationRequest.md)| Validation request |

### Return type

[**\ultracart\v2\models\OrderValidationResponse**](../Model/OrderValidationResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
