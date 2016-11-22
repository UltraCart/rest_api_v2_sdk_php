# SwaggerClient-php
This is the next generation UltraCart REST API...

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Build date: 2016-11-22T13:30:07.357-05:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://www.ultracart.com](http://www.ultracart.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/UltraCart/rest_api_v2_sdk_php.git"
    }
  ],
  "require": {
    "UltraCart/rest_api_v2_sdk_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\CheckoutApi();
$browser_key_request = new \ultracart\v2\models\CheckoutSetupBrowserKeyRequest(); // \ultracart\v2\models\CheckoutSetupBrowserKeyRequest | Setup browser key request

try {
    $result = $api_instance->checkoutBrowserKeyPut($browser_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->checkoutBrowserKeyPut: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CheckoutApi* | [**checkoutBrowserKeyPut**](docs/Api/CheckoutApi.md#checkoutbrowserkeyput) | **PUT** /checkout/browser_key | Setup Browser Application
*CheckoutApi* | [**checkoutCartCartIdGet**](docs/Api/CheckoutApi.md#checkoutcartcartidget) | **GET** /checkout/cart/{cart_id} | Get a cart
*CheckoutApi* | [**checkoutCartFinalizeOrderPost**](docs/Api/CheckoutApi.md#checkoutcartfinalizeorderpost) | **POST** /checkout/cart/finalizeOrder | Finalize Order
*CheckoutApi* | [**checkoutCartGet**](docs/Api/CheckoutApi.md#checkoutcartget) | **GET** /checkout/cart | Create a new cart
*CheckoutApi* | [**checkoutCartHandoffPost**](docs/Api/CheckoutApi.md#checkoutcarthandoffpost) | **POST** /checkout/cart/handoff | Handoff cart
*CheckoutApi* | [**checkoutCartProfileLoginPost**](docs/Api/CheckoutApi.md#checkoutcartprofileloginpost) | **POST** /checkout/cart/profile/login | Profile login
*CheckoutApi* | [**checkoutCartProfileLogoutPost**](docs/Api/CheckoutApi.md#checkoutcartprofilelogoutpost) | **POST** /checkout/cart/profile/logout | Profile logout
*CheckoutApi* | [**checkoutCartProfileRegisterPost**](docs/Api/CheckoutApi.md#checkoutcartprofileregisterpost) | **POST** /checkout/cart/profile/register | Profile registration
*CheckoutApi* | [**checkoutCartPut**](docs/Api/CheckoutApi.md#checkoutcartput) | **PUT** /checkout/cart | Update cart (by cookie)
*CheckoutApi* | [**checkoutCartValidatePost**](docs/Api/CheckoutApi.md#checkoutcartvalidatepost) | **POST** /checkout/cart/validate | Validate
*CheckoutApi* | [**checkoutReturnReturnCodeGet**](docs/Api/CheckoutApi.md#checkoutreturnreturncodeget) | **GET** /checkout/return/{return_code} | Get a cart by return code
*FulfillmentApi* | [**fulfillmentDistributionCentersDistributionCenterCodeAcknowledgementsPut**](docs/Api/FulfillmentApi.md#fulfillmentdistributioncentersdistributioncentercodeacknowledgementsput) | **PUT** /fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
*FulfillmentApi* | [**fulfillmentDistributionCentersDistributionCenterCodeInventoryPost**](docs/Api/FulfillmentApi.md#fulfillmentdistributioncentersdistributioncentercodeinventorypost) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory
*FulfillmentApi* | [**fulfillmentDistributionCentersDistributionCenterCodeOrdersGet**](docs/Api/FulfillmentApi.md#fulfillmentdistributioncentersdistributioncentercodeordersget) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
*FulfillmentApi* | [**fulfillmentDistributionCentersDistributionCenterCodeShipmentsPost**](docs/Api/FulfillmentApi.md#fulfillmentdistributioncentersdistributioncentercodeshipmentspost) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
*FulfillmentApi* | [**fulfillmentDistributionCentersGet**](docs/Api/FulfillmentApi.md#fulfillmentdistributioncentersget) | **GET** /fulfillment/distribution_centers | Retrieve distribution centers
*ItemApi* | [**autoOrderAutoOrdersAutoOrderOidGet**](docs/Api/ItemApi.md#autoorderautoordersautoorderoidget) | **GET** /auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order
*ItemApi* | [**autoOrderAutoOrdersAutoOrderOidPut**](docs/Api/ItemApi.md#autoorderautoordersautoorderoidput) | **PUT** /auto_order/auto_orders/{auto_order_oid} | Update an auto order
*ItemApi* | [**autoOrderAutoOrdersGet**](docs/Api/ItemApi.md#autoorderautoordersget) | **GET** /auto_order/auto_orders | Retrieve auto orders
*ItemApi* | [**itemItemsGet**](docs/Api/ItemApi.md#itemitemsget) | **GET** /item/items | Retrieve items
*ItemApi* | [**itemItemsMerchantItemOidDelete**](docs/Api/ItemApi.md#itemitemsmerchantitemoiddelete) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
*ItemApi* | [**itemItemsMerchantItemOidGet**](docs/Api/ItemApi.md#itemitemsmerchantitemoidget) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
*ItemApi* | [**itemItemsMerchantItemOidPut**](docs/Api/ItemApi.md#itemitemsmerchantitemoidput) | **PUT** /item/items/{merchant_item_oid} | Update an item
*ItemApi* | [**itemItemsPost**](docs/Api/ItemApi.md#itemitemspost) | **POST** /item/items | Create an item
*ItemApi* | [**itemTempMultimediaPost**](docs/Api/ItemApi.md#itemtempmultimediapost) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.
*OauthApi* | [**oauthRevokePost**](docs/Api/OauthApi.md#oauthrevokepost) | **POST** /oauth/revoke | Revoke this OAuth application.
*OauthApi* | [**oauthTokenPost**](docs/Api/OauthApi.md#oauthtokenpost) | **POST** /oauth/token | Exchange authorization code for access token.
*OrderApi* | [**orderOrdersGet**](docs/Api/OrderApi.md#orderordersget) | **GET** /order/orders | Retrieve orders
*OrderApi* | [**orderOrdersOrderIdCancelPost**](docs/Api/OrderApi.md#orderordersorderidcancelpost) | **POST** /order/orders/{order_id}/cancel | Cancel an order
*OrderApi* | [**orderOrdersOrderIdDelete**](docs/Api/OrderApi.md#orderordersorderiddelete) | **DELETE** /order/orders/{order_id} | Delete an order
*OrderApi* | [**orderOrdersOrderIdGet**](docs/Api/OrderApi.md#orderordersorderidget) | **GET** /order/orders/{order_id} | Retrieve an order
*OrderApi* | [**orderOrdersOrderIdPut**](docs/Api/OrderApi.md#orderordersorderidput) | **PUT** /order/orders/{order_id} | Update an order
*OrderApi* | [**orderOrdersOrderIdResendReceiptPost**](docs/Api/OrderApi.md#orderordersorderidresendreceiptpost) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
*OrderApi* | [**orderOrdersOrderIdResendShipmentConfirmationPost**](docs/Api/OrderApi.md#orderordersorderidresendshipmentconfirmationpost) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation
*WebhookApi* | [**webhookWebhooksGet**](docs/Api/WebhookApi.md#webhookwebhooksget) | **GET** /webhook/webhooks | Retrieve webhooks
*WebhookApi* | [**webhookWebhooksPost**](docs/Api/WebhookApi.md#webhookwebhookspost) | **POST** /webhook/webhooks | Add a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidDelete**](docs/Api/WebhookApi.md#webhookwebhookswebhookoiddelete) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidLogsGet**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidlogsget) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
*WebhookApi* | [**webhookWebhooksWebhookOidLogsRequestIdGet**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidlogsrequestidget) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
*WebhookApi* | [**webhookWebhooksWebhookOidPut**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidput) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook
*WebhookApi* | [**webhookWebhooksWebhookOidReflowEventNamePost**](docs/Api/WebhookApi.md#webhookwebhookswebhookoidrefloweventnamepost) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.


## Documentation For Models

 - [ApiUserApplicationProfile](docs/Model/ApiUserApplicationProfile.md)
 - [AutoOrder](docs/Model/AutoOrder.md)
 - [AutoOrderItem](docs/Model/AutoOrderItem.md)
 - [AutoOrderItemOption](docs/Model/AutoOrderItemOption.md)
 - [AutoOrderResponse](docs/Model/AutoOrderResponse.md)
 - [AutoOrdersResponse](docs/Model/AutoOrdersResponse.md)
 - [BaseResponse](docs/Model/BaseResponse.md)
 - [Cart](docs/Model/Cart.md)
 - [CartAffiliate](docs/Model/CartAffiliate.md)
 - [CartBilling](docs/Model/CartBilling.md)
 - [CartBuysafe](docs/Model/CartBuysafe.md)
 - [CartCheckout](docs/Model/CartCheckout.md)
 - [CartCoupon](docs/Model/CartCoupon.md)
 - [CartCustomerProfile](docs/Model/CartCustomerProfile.md)
 - [CartCustomerProfileAddress](docs/Model/CartCustomerProfileAddress.md)
 - [CartCustomerProfileCreditCard](docs/Model/CartCustomerProfileCreditCard.md)
 - [CartFinalizeOrderRequest](docs/Model/CartFinalizeOrderRequest.md)
 - [CartFinalizeOrderRequestOptions](docs/Model/CartFinalizeOrderRequestOptions.md)
 - [CartFinalizeOrderResponse](docs/Model/CartFinalizeOrderResponse.md)
 - [CartGift](docs/Model/CartGift.md)
 - [CartGiftCertificate](docs/Model/CartGiftCertificate.md)
 - [CartItem](docs/Model/CartItem.md)
 - [CartItemAttribute](docs/Model/CartItemAttribute.md)
 - [CartItemMultimedia](docs/Model/CartItemMultimedia.md)
 - [CartItemMultimediaThumbnail](docs/Model/CartItemMultimediaThumbnail.md)
 - [CartItemOption](docs/Model/CartItemOption.md)
 - [CartItemOptionValue](docs/Model/CartItemOptionValue.md)
 - [CartItemPhysical](docs/Model/CartItemPhysical.md)
 - [CartItemVariationSelection](docs/Model/CartItemVariationSelection.md)
 - [CartKitComponentOption](docs/Model/CartKitComponentOption.md)
 - [CartMarketing](docs/Model/CartMarketing.md)
 - [CartPayment](docs/Model/CartPayment.md)
 - [CartPaymentAmazon](docs/Model/CartPaymentAmazon.md)
 - [CartPaymentCheck](docs/Model/CartPaymentCheck.md)
 - [CartPaymentCreditCard](docs/Model/CartPaymentCreditCard.md)
 - [CartPaymentPurchaseOrder](docs/Model/CartPaymentPurchaseOrder.md)
 - [CartProfileLoginRequest](docs/Model/CartProfileLoginRequest.md)
 - [CartProfileLoginResponse](docs/Model/CartProfileLoginResponse.md)
 - [CartProfileRegisterRequest](docs/Model/CartProfileRegisterRequest.md)
 - [CartProfileRegisterResponse](docs/Model/CartProfileRegisterResponse.md)
 - [CartResponse](docs/Model/CartResponse.md)
 - [CartSettings](docs/Model/CartSettings.md)
 - [CartSettingsBilling](docs/Model/CartSettingsBilling.md)
 - [CartSettingsGift](docs/Model/CartSettingsGift.md)
 - [CartSettingsGiftWrap](docs/Model/CartSettingsGiftWrap.md)
 - [CartSettingsPayment](docs/Model/CartSettingsPayment.md)
 - [CartSettingsPaymentAmazon](docs/Model/CartSettingsPaymentAmazon.md)
 - [CartSettingsPaymentCreditCard](docs/Model/CartSettingsPaymentCreditCard.md)
 - [CartSettingsPaymentPayPal](docs/Model/CartSettingsPaymentPayPal.md)
 - [CartSettingsProvince](docs/Model/CartSettingsProvince.md)
 - [CartSettingsShipping](docs/Model/CartSettingsShipping.md)
 - [CartSettingsShippingCalendar](docs/Model/CartSettingsShippingCalendar.md)
 - [CartSettingsShippingEstimate](docs/Model/CartSettingsShippingEstimate.md)
 - [CartSettingsTaxes](docs/Model/CartSettingsTaxes.md)
 - [CartSettingsTerms](docs/Model/CartSettingsTerms.md)
 - [CartShipping](docs/Model/CartShipping.md)
 - [CartSummary](docs/Model/CartSummary.md)
 - [CartTaxes](docs/Model/CartTaxes.md)
 - [CartUpsellAfter](docs/Model/CartUpsellAfter.md)
 - [CartValidationRequest](docs/Model/CartValidationRequest.md)
 - [CartValidationResponse](docs/Model/CartValidationResponse.md)
 - [CheckoutHandoffRequest](docs/Model/CheckoutHandoffRequest.md)
 - [CheckoutHandoffResponse](docs/Model/CheckoutHandoffResponse.md)
 - [CheckoutSetupBrowserKeyRequest](docs/Model/CheckoutSetupBrowserKeyRequest.md)
 - [Currency](docs/Model/Currency.md)
 - [CustomerProfile](docs/Model/CustomerProfile.md)
 - [Distance](docs/Model/Distance.md)
 - [DistributionCenter](docs/Model/DistributionCenter.md)
 - [DistributionCentersResponse](docs/Model/DistributionCentersResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FulfillmentInventory](docs/Model/FulfillmentInventory.md)
 - [FulfillmentShipment](docs/Model/FulfillmentShipment.md)
 - [HTTPHeader](docs/Model/HTTPHeader.md)
 - [Item](docs/Model/Item.md)
 - [ItemAccounting](docs/Model/ItemAccounting.md)
 - [ItemAmember](docs/Model/ItemAmember.md)
 - [ItemAutoOrder](docs/Model/ItemAutoOrder.md)
 - [ItemAutoOrderStep](docs/Model/ItemAutoOrderStep.md)
 - [ItemAutoOrderStepArbitraryUnitCostSchedule](docs/Model/ItemAutoOrderStepArbitraryUnitCostSchedule.md)
 - [ItemAutoOrderStepGrandfatherPricing](docs/Model/ItemAutoOrderStepGrandfatherPricing.md)
 - [ItemCCBill](docs/Model/ItemCCBill.md)
 - [ItemChannelPartnerMapping](docs/Model/ItemChannelPartnerMapping.md)
 - [ItemChargeback](docs/Model/ItemChargeback.md)
 - [ItemChargebackAddendum](docs/Model/ItemChargebackAddendum.md)
 - [ItemChargebackAdjustmentRequest](docs/Model/ItemChargebackAdjustmentRequest.md)
 - [ItemCheckout](docs/Model/ItemCheckout.md)
 - [ItemContent](docs/Model/ItemContent.md)
 - [ItemContentAssignment](docs/Model/ItemContentAssignment.md)
 - [ItemContentAttribute](docs/Model/ItemContentAttribute.md)
 - [ItemContentMultimedia](docs/Model/ItemContentMultimedia.md)
 - [ItemContentMultimediaThumbnail](docs/Model/ItemContentMultimediaThumbnail.md)
 - [ItemDigitalDelivery](docs/Model/ItemDigitalDelivery.md)
 - [ItemDigitalItem](docs/Model/ItemDigitalItem.md)
 - [ItemEbay](docs/Model/ItemEbay.md)
 - [ItemEbayCategorySpecific](docs/Model/ItemEbayCategorySpecific.md)
 - [ItemEbayMarketListing](docs/Model/ItemEbayMarketListing.md)
 - [ItemEbayMarketPlaceAnalysis](docs/Model/ItemEbayMarketPlaceAnalysis.md)
 - [ItemEmailNotifications](docs/Model/ItemEmailNotifications.md)
 - [ItemEnrollment123](docs/Model/ItemEnrollment123.md)
 - [ItemGiftCertificate](docs/Model/ItemGiftCertificate.md)
 - [ItemGoogleProductSearch](docs/Model/ItemGoogleProductSearch.md)
 - [ItemIdentifiers](docs/Model/ItemIdentifiers.md)
 - [ItemInstantPaymentNotification](docs/Model/ItemInstantPaymentNotification.md)
 - [ItemInstantPaymentNotifications](docs/Model/ItemInstantPaymentNotifications.md)
 - [ItemInternal](docs/Model/ItemInternal.md)
 - [ItemKitComponent](docs/Model/ItemKitComponent.md)
 - [ItemKitDefinition](docs/Model/ItemKitDefinition.md)
 - [ItemOption](docs/Model/ItemOption.md)
 - [ItemOptionValue](docs/Model/ItemOptionValue.md)
 - [ItemOptionValueAdditionalItem](docs/Model/ItemOptionValueAdditionalItem.md)
 - [ItemOptionValueDigitalItem](docs/Model/ItemOptionValueDigitalItem.md)
 - [ItemPaymentProcessing](docs/Model/ItemPaymentProcessing.md)
 - [ItemPhysical](docs/Model/ItemPhysical.md)
 - [ItemPricing](docs/Model/ItemPricing.md)
 - [ItemPricingTier](docs/Model/ItemPricingTier.md)
 - [ItemPricingTierDiscount](docs/Model/ItemPricingTierDiscount.md)
 - [ItemPricingTierLimit](docs/Model/ItemPricingTierLimit.md)
 - [ItemRealtimePricing](docs/Model/ItemRealtimePricing.md)
 - [ItemRelated](docs/Model/ItemRelated.md)
 - [ItemRelatedItem](docs/Model/ItemRelatedItem.md)
 - [ItemReporting](docs/Model/ItemReporting.md)
 - [ItemResponse](docs/Model/ItemResponse.md)
 - [ItemRestriction](docs/Model/ItemRestriction.md)
 - [ItemRestrictionItem](docs/Model/ItemRestrictionItem.md)
 - [ItemRevguard](docs/Model/ItemRevguard.md)
 - [ItemReviews](docs/Model/ItemReviews.md)
 - [ItemSalesforce](docs/Model/ItemSalesforce.md)
 - [ItemShipping](docs/Model/ItemShipping.md)
 - [ItemShippingCase](docs/Model/ItemShippingCase.md)
 - [ItemShippingDestinationMarkup](docs/Model/ItemShippingDestinationMarkup.md)
 - [ItemShippingDestinationRestriction](docs/Model/ItemShippingDestinationRestriction.md)
 - [ItemShippingDistributionCenter](docs/Model/ItemShippingDistributionCenter.md)
 - [ItemShippingMethod](docs/Model/ItemShippingMethod.md)
 - [ItemShippingPackageRequirement](docs/Model/ItemShippingPackageRequirement.md)
 - [ItemTax](docs/Model/ItemTax.md)
 - [ItemTaxExemption](docs/Model/ItemTaxExemption.md)
 - [ItemThirdPartyEmailMarketing](docs/Model/ItemThirdPartyEmailMarketing.md)
 - [ItemVariantItem](docs/Model/ItemVariantItem.md)
 - [ItemVariation](docs/Model/ItemVariation.md)
 - [ItemVariationOption](docs/Model/ItemVariationOption.md)
 - [ItemWishlistMember](docs/Model/ItemWishlistMember.md)
 - [ItemsResponse](docs/Model/ItemsResponse.md)
 - [OauthRevokeSuccessResponse](docs/Model/OauthRevokeSuccessResponse.md)
 - [OauthTokenResponse](docs/Model/OauthTokenResponse.md)
 - [Order](docs/Model/Order.md)
 - [OrderAffiliate](docs/Model/OrderAffiliate.md)
 - [OrderAffiliateLedger](docs/Model/OrderAffiliateLedger.md)
 - [OrderAutoOrder](docs/Model/OrderAutoOrder.md)
 - [OrderBilling](docs/Model/OrderBilling.md)
 - [OrderBuysafe](docs/Model/OrderBuysafe.md)
 - [OrderChannelPartner](docs/Model/OrderChannelPartner.md)
 - [OrderCheckout](docs/Model/OrderCheckout.md)
 - [OrderCoupon](docs/Model/OrderCoupon.md)
 - [OrderDigitalItem](docs/Model/OrderDigitalItem.md)
 - [OrderDigitalOrder](docs/Model/OrderDigitalOrder.md)
 - [OrderEdi](docs/Model/OrderEdi.md)
 - [OrderFraudScore](docs/Model/OrderFraudScore.md)
 - [OrderGift](docs/Model/OrderGift.md)
 - [OrderGiftCertificate](docs/Model/OrderGiftCertificate.md)
 - [OrderInternal](docs/Model/OrderInternal.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderItemEdi](docs/Model/OrderItemEdi.md)
 - [OrderItemEdiIdentification](docs/Model/OrderItemEdiIdentification.md)
 - [OrderItemEdiLot](docs/Model/OrderItemEdiLot.md)
 - [OrderItemOption](docs/Model/OrderItemOption.md)
 - [OrderItemOptionFileAttachment](docs/Model/OrderItemOptionFileAttachment.md)
 - [OrderLinkedShipment](docs/Model/OrderLinkedShipment.md)
 - [OrderMarketing](docs/Model/OrderMarketing.md)
 - [OrderPayment](docs/Model/OrderPayment.md)
 - [OrderPaymentCheck](docs/Model/OrderPaymentCheck.md)
 - [OrderPaymentCreditCard](docs/Model/OrderPaymentCreditCard.md)
 - [OrderPaymentECheck](docs/Model/OrderPaymentECheck.md)
 - [OrderPaymentPurchaseOrder](docs/Model/OrderPaymentPurchaseOrder.md)
 - [OrderPaymentTransaction](docs/Model/OrderPaymentTransaction.md)
 - [OrderPaymentTransactionDetail](docs/Model/OrderPaymentTransactionDetail.md)
 - [OrderQuote](docs/Model/OrderQuote.md)
 - [OrderResponse](docs/Model/OrderResponse.md)
 - [OrderSalesforce](docs/Model/OrderSalesforce.md)
 - [OrderShipping](docs/Model/OrderShipping.md)
 - [OrderSummary](docs/Model/OrderSummary.md)
 - [OrderTaxes](docs/Model/OrderTaxes.md)
 - [OrdersResponse](docs/Model/OrdersResponse.md)
 - [ResponseMetadata](docs/Model/ResponseMetadata.md)
 - [ResultSet](docs/Model/ResultSet.md)
 - [TempMultimedia](docs/Model/TempMultimedia.md)
 - [TempMultimediaResponse](docs/Model/TempMultimediaResponse.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookEventCategory](docs/Model/WebhookEventCategory.md)
 - [WebhookEventSubscription](docs/Model/WebhookEventSubscription.md)
 - [WebhookLog](docs/Model/WebhookLog.md)
 - [WebhookLogResponse](docs/Model/WebhookLogResponse.md)
 - [WebhookLogSummariesResponse](docs/Model/WebhookLogSummariesResponse.md)
 - [WebhookLogSummary](docs/Model/WebhookLogSummary.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [WebhookSampleRequest](docs/Model/WebhookSampleRequest.md)
 - [WebhookSampleRequestResponse](docs/Model/WebhookSampleRequestResponse.md)
 - [WebhooksResponse](docs/Model/WebhooksResponse.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization


## ultraCartBrowserApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-browser-key
- **Location**: HTTP header

## ultraCartOauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://secure.ultracart.com/rest/v2/oauth/authorize
- **Scopes**: 
 - **auto_order_read**: Allows you to read auto order information.
 - **auto_order_write**: Allows you to write auto order information.
 - **checkout_read**: Allows you to read checkout information.
 - **checkout_write**: Allows you to write checkout information.
 - **fulfillment_read**: Allows you to read fulfillment information.
 - **fulfillment_write**: Allows you to write fulfillment information.
 - **order_read**: Allows you to read order information.
 - **order_write**: Allows you to write order information.
 - **item_read**: Allows you to read item information.
 - **item_write**: Allows you to write item information.
 - **webhook_read**: Allows you to read webhook information.
 - **webhook_write**: Allows you to write webhook information.
 - **ultrabooks_read**: 1 of 2 required to use UltraBooks
 - **ultrabooks_write**: 2 of 2 required to use UltraBooks

## ultraCartSimpleApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-simple-key
- **Location**: HTTP header


## Author

support@ultracart.com


