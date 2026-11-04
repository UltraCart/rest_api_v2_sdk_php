# # SfvbStepDispatchLogsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**counts** | [**\ultracart\v2\models\SfvbStepCounts**](SfvbStepCounts.md) |  | [optional]
**entries** | [**\ultracart\v2\models\SfvbStepDispatchLog[]**](SfvbStepDispatchLog.md) | The entries in the window, newest first. | [optional]
**next_offset** | **int** | Send this as offset for the next page.  Absent on the last page. | [optional]
**notes** | **string[]** | What a person should know about reading these entries. | [optional]
**sequence_uuid** | **string** | The communication sequence the step is in. | [optional]
**since** | **string** | The start of the window read, as ISO 8601. | [optional]
**step_type** | **string** | The step&#39;s type, such as email, sms or wait. | [optional]
**step_uuid** | **string** | The step. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
