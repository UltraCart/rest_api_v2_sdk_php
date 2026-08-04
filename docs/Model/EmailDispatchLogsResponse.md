# # EmailDispatchLogsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dispatch_logs** | [**\ultracart\v2\models\EmailDispatchLog[]**](EmailDispatchLog.md) | Dispatch log rows on this page | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**more** | **bool** | True when another page exists after this one | [optional]
**page_number** | **int** | Page number (one based) | [optional]
**page_size** | **int** | Number of records per page | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
