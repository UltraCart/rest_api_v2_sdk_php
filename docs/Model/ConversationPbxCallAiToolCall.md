# # ConversationPbxCallAiToolCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**called_at_dts** | **string** | Timestamp when the tool was called | [optional]
**completed_at_dts** | **string** | Timestamp when the tool call completed | [optional]
**duration_ms** | **int** | Duration of the tool call in milliseconds | [optional]
**error_message** | **string** | Error message if the tool call failed | [optional]
**parameters** | **object** | Parameters passed to the tool (structure varies by tool) | [optional]
**result** | **object** | Result returned by the tool (structure varies by tool) | [optional]
**success** | **bool** | Whether the tool call succeeded | [optional]
**tool_call_uuid** | **string** | Unique identifier for this tool call | [optional]
**tool_name** | **string** | Name of the tool that was called | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
