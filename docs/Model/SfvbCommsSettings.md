# # SfvbCommsSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash_sha256** | **string** | The hash of the settings.  Send it as If-Match to change them. | [optional]
**machine_open_ignore** | **bool** | True when opens by mail privacy proxies are ignored.  Account-wide; changed in the admin. | [optional]
**marketing_sender** | [**\ultracart\v2\models\SfvbCommsSender**](SfvbCommsSender.md) |  | [optional]
**postcard_return_address** | [**\ultracart\v2\models\SfvbPostcardAddress**](SfvbPostcardAddress.md) |  | [optional]
**postcard_return_address_complete** | **bool** | True when the name, street, city, state and postal code are all set.  Until then postcards fall back as the send code does. | [optional]
**reviews_io_configured** | **bool** | True when a Reviews.io key is set for the account. | [optional]
**sms_phone_number** | **string** | The default SMS number the admin offers for a new flow or campaign.  No send reads it.  An SMS step sends from its flow&#39;s or campaign&#39;s own number. | [optional]
**sms_twilio_uuid** | **string** | The Twilio account that holds sms_phone_number. | [optional]
**transactional_sender** | [**\ultracart\v2\models\SfvbCommsSender**](SfvbCommsSender.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
