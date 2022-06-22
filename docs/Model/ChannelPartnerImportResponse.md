# # ChannelPartnerImportResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**import_errors** | **string[]** | Array of errors if errors occurred | [optional]
**import_warnings** | **string[]** | Array of warnings if warnings occurred | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**order_id** | **string** | The order id of the newly imported order if successful | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
