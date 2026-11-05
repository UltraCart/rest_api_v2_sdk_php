# # SfvbTransactionalEmailDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_options** | [**\ultracart\v2\models\SfvbTransactionalDeliveryOption[]**](SfvbTransactionalDeliveryOption.md) | Its delivery options.  Empty for an email that has none. | [optional]
**file_name** | **string** | The HTML template file, such as receipt_html.vm. | [optional]
**hash_sha256** | **string** | The hash of the subject, the options and the sender.  Send it as If-Match to change them. | [optional]
**name** | **string** | The display name, such as Order - Receipt. | [optional]
**sender** | [**\ultracart\v2\models\SfvbTransactionalSender**](SfvbTransactionalSender.md) |  | [optional]
**sender_shared_with** | **string[]** | Every storefront on this account that shares the sender, this one included. | [optional]
**subject** | **string** | The subject line. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
