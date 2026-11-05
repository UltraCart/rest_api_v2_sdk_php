# # SfvbCommsProviderImportResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | True when nothing was imported. | [optional]
**lists** | [**\ultracart\v2\models\SfvbCommsProviderList[]**](SfvbCommsProviderList.md) | The lists imported, each into a new list of the same name. | [optional]
**notes** | **string[]** | What the import does. | [optional]
**provider** | **string** | The provider. | [optional]
**queued** | **bool** | True when the import was started.  It runs in the background and emails the signed-in user when done. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
