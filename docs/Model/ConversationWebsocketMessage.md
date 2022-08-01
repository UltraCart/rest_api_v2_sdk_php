# ConversationWebsocketMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversation_uuid** | **string** | Conversation UUID if the websocket message is tied to a specific conversation | [optional] 
**event_conversation_closed** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional] 
**event_new_conversation** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional] 
**event_new_message** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional] 
**event_queue_position** | [**\ultracart\v2\models\ConversationEventQueuePosition**](ConversationEventQueuePosition.md) |  | [optional] 
**event_queue_status_update** | [**\ultracart\v2\models\ConversationWebchatQueueStatus**](ConversationWebchatQueueStatus.md) |  | [optional] 
**event_rrweb** | [**\ultracart\v2\models\ConversationEventRRWeb**](ConversationEventRRWeb.md) |  | [optional] 
**event_type** | **string** | Type of event | [optional] 
**event_updated_message** | [**\ultracart\v2\models\ConversationMessage**](ConversationMessage.md) |  | [optional] 
**message** | [**\ultracart\v2\models\ConversationMessage**](ConversationMessage.md) |  | [optional] 
**type** | **string** | Type of message | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


