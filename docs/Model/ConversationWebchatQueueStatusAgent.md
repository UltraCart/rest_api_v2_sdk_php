# # ConversationWebchatQueueStatusAgent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_status** | **string** | Status of the agent | [optional]
**agent_user_id** | **string** | Agent user id (populated by Java so the dispatch-scheduler Lambda can read it directly without parsing conversation_participant_arn) | [optional]
**conversation_participant_arn** | **string** |  | [optional]
**conversation_participant_name** | **string** |  | [optional]
**custom_status_name** | **string** | Active custom status display name for this agent (denormalized) | [optional]
**custom_status_uuid** | **string** | Active custom status uuid for this agent (null when on a system status) | [optional]
**last_chat_dts** | **string** | Date/time that this agent took their last chat | [optional]
**next_round_robin** | **bool** |  | [optional]
**profile_image_url** | **string** | Profile image URL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
