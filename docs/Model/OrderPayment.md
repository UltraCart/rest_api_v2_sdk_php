# # OrderPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check** | [**\ultracart\v2\models\OrderPaymentCheck**](OrderPaymentCheck.md) |  | [optional]
**credit_card** | [**\ultracart\v2\models\OrderPaymentCreditCard**](OrderPaymentCreditCard.md) |  | [optional]
**echeck** | [**\ultracart\v2\models\OrderPaymentECheck**](OrderPaymentECheck.md) |  | [optional]
**health_benefit_card** | [**\ultracart\v2\models\OrderPaymentHealthBenefitCard**](OrderPaymentHealthBenefitCard.md) |  | [optional]
**hold_for_fraud_review** | **bool** | True if order has been held for fraud review | [optional]
**insurance** | [**\ultracart\v2\models\OrderPaymentInsurance**](OrderPaymentInsurance.md) |  | [optional]
**payment_dts** | **string** | Date/time that the payment was successfully processed, for new orders, this field is only considered if channel_partner.skip_payment_processing is true | [optional]
**payment_method** | **string** | Payment method | [optional]
**payment_method_accounting_code** | **string** | Payment method QuickBooks code | [optional]
**payment_method_deposit_to_account** | **string** | Payment method QuickBooks deposit account | [optional]
**payment_status** | **string** | Payment status | [optional]
**paypal** | [**\ultracart\v2\models\OrderPaymentPayPal**](OrderPaymentPayPal.md) |  | [optional]
**purchase_order** | [**\ultracart\v2\models\OrderPaymentPurchaseOrder**](OrderPaymentPurchaseOrder.md) |  | [optional]
**rotating_transaction_gateway_code** | **string** | Rotating transaction gateway code used to process this order | [optional]
**surcharge** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**surcharge_accounting_code** | **string** | Surcharge accounting code | [optional]
**surcharge_transaction_fee** | **float** | Surcharge transaction fee | [optional]
**surcharge_transaction_percentage** | **float** | Surcharge transaction percentage | [optional]
**test_order** | **bool** | True if this is a test order | [optional]
**transactions** | [**\ultracart\v2\models\OrderPaymentTransaction[]**](OrderPaymentTransaction.md) | Transactions associated with processing this payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
