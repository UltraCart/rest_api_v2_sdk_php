# # ConversationAgentStatusTimelineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_events** | [**\ultracart\v2\models\ConversationAgentCallEvent[]**](ConversationAgentCallEvent.md) | PBX call records for the agent on the requested day | [optional]
**chat_events** | [**\ultracart\v2\models\ConversationAgentChatEvent[]**](ConversationAgentChatEvent.md) | Chat conversations for the agent on the requested day | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**status_events** | [**\ultracart\v2\models\ConversationAgentStatusEvent[]**](ConversationAgentStatusEvent.md) | Status transitions for the agent on the requested day | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**summary** | [**\ultracart\v2\models\TimelineSummary**](TimelineSummary.md) |  | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
