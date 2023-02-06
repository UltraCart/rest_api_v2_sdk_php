# # ConversationWebsocketMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversation_arn** | **string** | Conversation ARN | [optional]
**conversation_uuid** | **string** | Conversation UUID if the websocket message is tied to a specific conversation | [optional]
**event_add_coupon** | [**\ultracart\v2\models\ConversationEventAddCoupon**](ConversationEventAddCoupon.md) |  | [optional]
**event_add_item** | [**\ultracart\v2\models\ConversationEventAddItem**](ConversationEventAddItem.md) |  | [optional]
**event_conversation_closed** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_engage_customer** | [**\ultracart\v2\models\ConversationWebchatQueueStatusQueueEntry**](ConversationWebchatQueueStatusQueueEntry.md) |  | [optional]
**event_new_conversation** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_new_message** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_participant_join** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_participant_join_participant** | [**\ultracart\v2\models\ConversationParticipant**](ConversationParticipant.md) |  | [optional]
**event_participant_left** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_participant_left_participant** | [**\ultracart\v2\models\ConversationParticipant**](ConversationParticipant.md) |  | [optional]
**event_participant_update** | [**\ultracart\v2\models\ConversationSummary**](ConversationSummary.md) |  | [optional]
**event_queue_position** | [**\ultracart\v2\models\ConversationEventQueuePosition**](ConversationEventQueuePosition.md) |  | [optional]
**event_queue_status_update** | [**\ultracart\v2\models\ConversationWebchatQueueStatus**](ConversationWebchatQueueStatus.md) |  | [optional]
**event_read_message** | [**\ultracart\v2\models\ConversationEventReadMessage**](ConversationEventReadMessage.md) |  | [optional]
**event_rrweb** | [**\ultracart\v2\models\ConversationEventRRWeb**](ConversationEventRRWeb.md) |  | [optional]
**event_type** | **string** | Type of event | [optional]
**event_typing** | [**\ultracart\v2\models\ConversationEventTyping**](ConversationEventTyping.md) |  | [optional]
**event_updated_message** | [**\ultracart\v2\models\ConversationMessage**](ConversationMessage.md) |  | [optional]
**event_webchat_context** | [**\ultracart\v2\models\ConversationEventWebchatContext**](ConversationEventWebchatContext.md) |  | [optional]
**message** | [**\ultracart\v2\models\ConversationMessage**](ConversationMessage.md) |  | [optional]
**type** | **string** | Type of message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
