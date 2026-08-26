# # BulkUploadUrlResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**expires_at** | **string** | When the presigned URL expires | [optional]
**max_records** | **int** | Per-job record cap | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**s3_key** | **string** | Opaque reference to pass back on POST /rest/v2/bulk/{object} | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**upload_url** | **string** | Presigned S3 PUT URL (short-lived) | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
