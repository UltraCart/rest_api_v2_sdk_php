# OrderPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check** | [**\ultracart\admin\v2\models\OrderPaymentCheck**](OrderPaymentCheck.md) |  | [optional] 
**credit_card** | [**\ultracart\admin\v2\models\OrderPaymentCreditCard**](OrderPaymentCreditCard.md) |  | [optional] 
**echeck** | [**\ultracart\admin\v2\models\OrderPaymentECheck**](OrderPaymentECheck.md) |  | [optional] 
**hold_for_fraud_review** | **bool** | True if order has been held for fraud review | [optional] 
**payment_dts** | **string** | Date/time that the payment was successfully processed | [optional] 
**payment_method** | **string** | Payment method | [optional] 
**payment_method_accounting_code** | **string** | Payment method QuickBooks code | [optional] 
**payment_method_deposit_to_account** | **string** | Payment method QuickBooks deposit account | [optional] 
**payment_status** | **string** | Payment status | [optional] 
**purchase_order** | [**\ultracart\admin\v2\models\OrderPaymentPurchaseOrder**](OrderPaymentPurchaseOrder.md) |  | [optional] 
**rotating_transaction_gateway_code** | **string** | Rotating transaction gateway code used to process this order | [optional] 
**surcharge** | [**\ultracart\admin\v2\models\Currency**](Currency.md) |  | [optional] 
**surcharge_accounting_code** | **string** | Surcharge accounting code | [optional] 
**surcharge_transaction_fee** | **float** | Surcharge transaction fee | [optional] 
**surcharge_transaction_percentage** | **float** | Surcharge transaction percentage | [optional] 
**test_order** | **bool** | True if this is a test order | [optional] 
**transactions** | [**\ultracart\admin\v2\models\OrderPaymentTransaction[]**](OrderPaymentTransaction.md) | Transactions associated with processing this payment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


