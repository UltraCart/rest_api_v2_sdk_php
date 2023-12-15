# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliates** | [**\ultracart\v2\models\OrderAffiliate[]**](OrderAffiliate.md) | Affiliates if any were associated with the order.  The first one in the array sent the order and each subsequent affiliate is the recruiter that earns a downline commission. | [optional] 
**auto_order** | [**\ultracart\v2\models\OrderAutoOrder**](OrderAutoOrder.md) |  | [optional] 
**billing** | [**\ultracart\v2\models\OrderBilling**](OrderBilling.md) |  | [optional] 
**buysafe** | [**\ultracart\v2\models\OrderBuysafe**](OrderBuysafe.md) |  | [optional] 
**channel_partner** | [**\ultracart\v2\models\OrderChannelPartner**](OrderChannelPartner.md) |  | [optional] 
**checkout** | [**\ultracart\v2\models\OrderCheckout**](OrderCheckout.md) |  | [optional] 
**coupons** | [**\ultracart\v2\models\OrderCoupon[]**](OrderCoupon.md) | Coupons | [optional] 
**creation_dts** | **string** | Date/time that the order was created | [optional] 
**currency_code** | **string** | Currency code that the customer used if different than the merchant&#39;s base currency code | [optional] 
**current_stage** | **string** | Current stage that the order is in. | [optional] 
**customer_profile** | [**\ultracart\v2\models\Customer**](Customer.md) |  | [optional] 
**digital_order** | [**\ultracart\v2\models\OrderDigitalOrder**](OrderDigitalOrder.md) |  | [optional] 
**edi** | [**\ultracart\v2\models\OrderEdi**](OrderEdi.md) |  | [optional] 
**exchange_rate** | **float** | Exchange rate at the time the order was placed if currency code is different than the base currency | [optional] 
**fraud_score** | [**\ultracart\v2\models\OrderFraudScore**](OrderFraudScore.md) |  | [optional] 
**gift** | [**\ultracart\v2\models\OrderGift**](OrderGift.md) |  | [optional] 
**gift_certificate** | [**\ultracart\v2\models\OrderGiftCertificate**](OrderGiftCertificate.md) |  | [optional] 
**internal** | [**\ultracart\v2\models\OrderInternal**](OrderInternal.md) |  | [optional] 
**items** | [**\ultracart\v2\models\OrderItem[]**](OrderItem.md) | Items | [optional] 
**language_iso_code** | **string** | Three letter ISO-639 language code used by the customer during the checkout if different than the default language | [optional] 
**linked_shipment** | [**\ultracart\v2\models\OrderLinkedShipment**](OrderLinkedShipment.md) |  | [optional] 
**marketing** | [**\ultracart\v2\models\OrderMarketing**](OrderMarketing.md) |  | [optional] 
**merchant_id** | **string** | UltraCart merchant ID owning this order | [optional] 
**order_id** | **string** | Order ID | [optional] 
**payment** | [**\ultracart\v2\models\OrderPayment**](OrderPayment.md) |  | [optional] 
**point_of_sale** | [**\ultracart\v2\models\OrderPointOfSale**](OrderPointOfSale.md) |  | [optional] 
**properties** | [**\ultracart\v2\models\OrderProperty[]**](OrderProperty.md) | Properties, available only through update, not through insert due to the nature of how properties are handled internally | [optional] 
**quote** | [**\ultracart\v2\models\OrderQuote**](OrderQuote.md) |  | [optional] 
**refund_dts** | **string** | If the order was refunded, the date/time that the last refund occurred | [optional] 
**refund_reason** | **string** | Refund reason code.  This can only be written during a refund operation otherwise this field is read only. | [optional] 
**reject_dts** | **string** | If the order was rejected, the date/time that the rejection occurred | [optional] 
**reject_reason** | **string** | Reject reason code.  This can only be written during a reject operation otherwise this field is read only. | [optional] 
**salesforce** | [**\ultracart\v2\models\OrderSalesforce**](OrderSalesforce.md) |  | [optional] 
**shipping** | [**\ultracart\v2\models\OrderShipping**](OrderShipping.md) |  | [optional] 
**summary** | [**\ultracart\v2\models\OrderSummary**](OrderSummary.md) |  | [optional] 
**tags** | [**\ultracart\v2\models\OrderTag[]**](OrderTag.md) | tags, available only through update, not through insert due to the nature of how tags are handled internally | [optional] 
**taxes** | [**\ultracart\v2\models\OrderTaxes**](OrderTaxes.md) |  | [optional] 
**utms** | [**\ultracart\v2\models\OrderUtm[]**](OrderUtm.md) | UTM clicks.  The zero index is the most recent (last) UTM click | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


