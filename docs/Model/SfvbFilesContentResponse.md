# # SfvbFilesContentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\ultracart\v2\models\SfvbFileContentResult[]**](SfvbFileContentResult.md) | One entry per path read, in the order asked. | [optional]
**remaining_paths** | **string[]** | Paths not read because the response reached its size limit, in the order asked.  Send them again to read them.  Omitted when every path was read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
