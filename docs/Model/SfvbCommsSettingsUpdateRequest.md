# # SfvbCommsSettingsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | Check the change and show it without writing or using an approval. | [optional]
**marketing_sender** | [**\ultracart\v2\models\SfvbCommsSenderUpdate**](SfvbCommsSenderUpdate.md) |  | [optional]
**postcard_return_address** | [**\ultracart\v2\models\SfvbPostcardAddress**](SfvbPostcardAddress.md) |  | [optional]
**sms_phone_number** | **string** | The default SMS number, one of the account&#39;s Twilio numbers, or an empty string to clear it. | [optional]
**transactional_sender** | [**\ultracart\v2\models\SfvbCommsSenderUpdate**](SfvbCommsSenderUpdate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
