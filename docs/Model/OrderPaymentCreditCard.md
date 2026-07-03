# # OrderPaymentCreditCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_auth_ticket** | **string** | Card authorization ticket | [optional]
**card_authorization_amount** | **float** | Card authorization amount | [optional]
**card_authorization_dts** | **string** | Card authorization date/time | [optional]
**card_authorization_reference_number** | **string** | Card authorization reference number | [optional]
**card_expiration_month** | **int** | Card expiration month (1-12) | [optional]
**card_expiration_year** | **int** | Card expiration year (Four digit year) | [optional]
**card_number** | **string** | Card number (masked to last 4) | [optional]
**card_number_token** | **string** | Card number token from hosted fields used to update the card number | [optional]
**card_number_truncated** | **bool** | True if the card has been truncated | [optional]
**card_type** | **string** | Card type | [optional]
**card_verification_number_token** | **string** | Card verification number token from hosted fields, only for import/insert of new orders, completely ignored for updates, and always null/empty for queries | [optional]
**dual_vaulted** | [**\ultracart\v2\models\OrderPaymentCreditCardDualVaulted**](OrderPaymentCreditCardDualVaulted.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
