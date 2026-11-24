# # OrderProcessPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Specific amount to bill (optional).  If not specified the total of the order is billed. | [optional]
**card_verification_number_token** | **string** | Card verification number token from hosted fields used during credit card transaction processing (optional) | [optional]
**rotating_transaction_gateway_code** | **string** | Rotating transaction gateway code to process the payment through (optional).  Must be an active rotating transaction gateway on the account.  The charge is attempted on that gateway only, without cascading to other gateways, the same as choosing a gateway on the Accounts Receivable Process Payment screen. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
