# # ConversationPbxQueue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ai_priority** | **string** | AI Agent Priority compared to human agents | [optional]
**ai_timeout_seconds** | **int** | AI timeout seconds | [optional]
**announce_queue_position** | **bool** | If true, the customer is told their queue position upon entering the queue | [optional]
**automatic_coach_agent_uuid** | **string** | AI Agent UUID to automatically engage to provide coaching | [optional]
**callback_announce_audio_uuid** | **string** | Custom audio file UUID for the callback offer prompt | [optional]
**callback_announce_say** | **string** | Custom TTS text for the callback offer prompt | [optional]
**callback_confirm_audio_uuid** | **string** | Custom audio file UUID for the callback confirmation message | [optional]
**callback_confirm_say** | **string** | Custom TTS text for the callback confirmation message | [optional]
**callback_enabled** | **bool** | If true, the callback option is enabled for this queue | [optional]
**callback_hours_only** | **bool** | When true, only offer callbacks during business hours | [optional]
**callback_max_attempts** | **int** | Maximum number of times the system will attempt to call the customer back | [optional]
**callback_max_offers** | **int** | Maximum number of times the callback option is offered to a caller per call | [optional]
**callback_max_pending** | **int** | Maximum number of pending callbacks allowed per queue | [optional]
**callback_offer_after_seconds** | **int** | Seconds a caller must wait in queue before the callback option is offered | [optional]
**callback_offer_interval_seconds** | **int** | Seconds between repeat callback offers to the same caller | [optional]
**callback_retry_delay_seconds** | **int** | Delay in seconds between callback retry attempts | [optional]
**conversation_pbx_queue_uuid** | **string** | Conversation Pbx Queue unique identifier | [optional]
**conversation_voicemail_mailbox_uuid** | **string** | The voicemail mailbox associated with this queue | [optional]
**hold_conversation_pbx_audio_uuid** | **string** | The audio to play while holding in a queue | [optional]
**max_hold_seconds** | **int** | The maximum number of seconds for a customer to hold in a queue | [optional]
**members** | [**\ultracart\v2\models\ConversationPbxQueueMembers**](ConversationPbxQueueMembers.md) |  | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**name** | **string** | Name of queue | [optional]
**no_agent_available_play_audio_uuid** | **string** | When no agent is available after the max_hold_seconds, say this | [optional]
**no_agent_available_say** | **string** | When no agent is available after the max_hold_seconds, say this | [optional]
**no_agent_available_say_voice** | **string** | The type of voice used to say text when no agent is available | [optional]
**play_audio_uuid** | **string** | Audio played when customer enters a queue | [optional]
**record_call** | **bool** | If true, any calls in this queue are recorded | [optional]
**say** | **string** | Say text when a customer enters queue | [optional]
**say_voice** | **string** | The type of voice to use when say text is spoken | [optional]
**twilio_taskrouter_workflow_sid** | **string** | Twilio taskrouter workflow sid | [optional]
**twilio_workspace_queue_sid** | **string** | Twilio workspace queue sid | [optional]
**voicemail** | **bool** | If true, this queue has a voicemail associated with it | [optional]
**wait_critical_seconds** | **int** | Wait time in seconds before critical | [optional]
**wait_warning_seconds** | **int** | Wait time in seconds before warning | [optional]
**wrap_up_seconds** | **int** | Wrap up time in seconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
