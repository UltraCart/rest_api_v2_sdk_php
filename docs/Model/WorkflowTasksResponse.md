# # WorkflowTasksResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**task_context** | **string** | User friendly string of the task context if querying for a specific object type/id | [optional]
**tasks** | [**\ultracart\v2\models\WorkflowTask[]**](WorkflowTask.md) | tasks | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
