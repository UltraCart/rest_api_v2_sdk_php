# # ItemPaymentProcessing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_prepaid** | **bool** | True if prepaid cards should be blocked from buying this item | [optional]
**block_refunds** | **bool** | True if this item should block any refund attempts, set to false otherwise, null value will not update the field | [optional]
**credit_card_transaction_type** | **string** | Credit card transaction type | [optional]
**hsa_fsa_eligibility** | **string** | HSA/FSA eligibility. eligible_with_lmn means the customer needs a Letter of Medical Necessity. Kept in sync automatically when Truemed is configured. Empty string clears it, null value will not update the field | [optional]
**no_realtime_charge** | **bool** | True if no real-time charge should be performed on this item. | [optional]
**payment_method_validity** | **string[]** | Payment method validity | [optional]
**rotating_transaction_gateway_codes** | **string[]** | Rotating transaction gateway codes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
