# # BulkJobsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bulk_jobs** | [**\ultracart\v2\models\BulkJob[]**](BulkJob.md) | Bulk jobs | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**next_cursor** | **string** | Opaque cursor for the next page, null when exhausted | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
