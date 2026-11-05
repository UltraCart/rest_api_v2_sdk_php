# # SfvbTransactionalEmailUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_options** | [**\ultracart\v2\models\SfvbTransactionalDeliveryOption[]**](SfvbTransactionalDeliveryOption.md) | Options to turn on or off, each by name with selected. | [optional]
**dry_run** | **bool** | True to check the change and show it without writing anything or using an approval. | [optional]
**sending_domain_uuid** | **string** | A sending domain on this account. | [optional]
**sending_name** | **string** | The from name. | [optional]
**sending_user** | **string** | The part of the from address before the at sign. | [optional]
**subject** | **string** | The subject line, 1 to 150 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
