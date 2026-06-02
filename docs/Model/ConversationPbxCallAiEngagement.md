# # ConversationPbxCallAiEngagement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_name** | **string** | Display name of the AI agent | [optional]
**agent_uuid** | **string** | UUID of the AI agent configuration used | [optional]
**cost** | [**\ultracart\v2\models\ConversationPbxCallAiCost**](ConversationPbxCallAiCost.md) |  | [optional]
**ended_at_dts** | **string** | Timestamp when the AI engagement ended | [optional]
**engagement_type** | **string** | Type of AI engagement | [optional]
**session_uuid** | **string** | Unique identifier for this AI engagement session | [optional]
**started_at_dts** | **string** | Timestamp when the AI engagement started | [optional]
**status** | **string** | Status of the AI engagement | [optional]
**tool_calls** | [**\ultracart\v2\models\ConversationPbxCallAiToolCall[]**](ConversationPbxCallAiToolCall.md) | List of tool calls made by the AI agent during this engagement | [optional]
**whispers** | [**\ultracart\v2\models\ConversationPbxCallAiWhisper[]**](ConversationPbxCallAiWhisper.md) | List of coaching whispers sent during this engagement | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
