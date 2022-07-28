# # ConversationWebchatQueueStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_available_count** | **int** |  | [optional]
**agent_busy_count** | **int** |  | [optional]
**agent_count** | **int** |  | [optional]
**agent_unavailable_count** | **int** |  | [optional]
**agents** | [**\ultracart\v2\models\ConversationWebchatQueueStatusAgent[]**](ConversationWebchatQueueStatusAgent.md) |  | [optional]
**customer_abandon_count** | **int** |  | [optional]
**customer_active_count** | **int** |  | [optional]
**customer_average_abandon_time_seconds** | **int** |  | [optional]
**customer_average_chat_time_seconds** | **int** |  | [optional]
**customer_average_hold_time_seconds** | **int** |  | [optional]
**customer_waiting_count** | **int** |  | [optional]
**customer_waiting_join_dts** | **string** | Date/time that the oldest person joined the queue | [optional]
**queue_entries** | [**\ultracart\v2\models\ConversationWebchatQueueStatusQueueEntry[]**](ConversationWebchatQueueStatusQueueEntry.md) |  | [optional]
**queue_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
