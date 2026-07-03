# # ConversationPbxCallAiSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_items** | **string[]** | Action items identified during the call | [optional]
**call_category** | **string** | Category of the call (e.g. support, sales, billing) | [optional]
**completion_tokens** | **int** | Number of output tokens used to generate the summary | [optional]
**cost** | **float** | Cost of generating the summary in the specified currency | [optional]
**cost_currency** | **string** | Currency code for the summary cost (always USD) | [optional]
**generated_at_dts** | **string** | Timestamp when the summary was generated | [optional]
**key_topics** | **string[]** | Key topics discussed during the call | [optional]
**model** | **string** | AI model used to generate the summary (e.g. grok-4.1-fast) | [optional]
**prompt_tokens** | **int** | Number of input tokens used to generate the summary | [optional]
**sentiment** | **string** | Overall sentiment of the call | [optional]
**summary** | **string** | 2-3 sentence synopsis of the call | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
