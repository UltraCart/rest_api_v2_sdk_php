# # AutoOrderPaymentUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attempt_rebill** | **bool** | Attempt to rebill the auto order immediately after the payment information is updated.  Defaults to false. | [optional]
**card_expiration_month** | **int** | Card expiration month (1-12) | [optional]
**card_expiration_year** | **int** | Card expiration year (four digit) | [optional]
**card_number_token** | **string** | Hosted field token for the credit card number.  Tokens are valid for two hours. | [optional]
**card_type** | **string** | Credit card type.  Optional.  When the hosted field token carries the card type, the token wins. | [optional]
**card_verification_number_token** | **string** | Hosted field token for the card verification number (CVV).  Required when the order has a vaulted card that must be re-vaulted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
