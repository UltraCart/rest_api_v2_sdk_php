# # ConversationAgentProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ai** | **bool** | AI powered chat bot | [optional]
**ai_chat_instructions** | **string** | Additional instructions for this AI when handle web chats | [optional]
**ai_persona** | **string** | Persona of this AI agent | [optional]
**ai_sms_instructions** | **string** | Additional instructions for this AI when handle SMS messages | [optional]
**ai_ticket_instructions** | **string** | Additional instructions for this AI when handling ticket draft replies | [optional]
**chat_limit** | **int** | The number of engagement chats that can be pushed on them at any given time. | [optional]
**default_language_iso_code** | **string** | The default language the agent is chatting in | [optional]
**default_status** | **string** | Default status when the agent loads conversations app. | [optional]
**display_name** | **string** | An alternate name that the agent wants to use in chat. | [optional]
**name** | **string** | Their actual user name for profile settings display as placeholder test | [optional]
**profile_image_upload_key** | **string** | An upload key used to update the profile image. | [optional]
**profile_image_url** | **string** | Their current profile image URL | [optional]
**user_id** | **int** | User ID associated with the agent.  Populated by getAgentProfiles call only. | [optional]
**zohodesk_classifications** | **string[]** | Restrict this agent to drafting replies only to tickets with these classifications | [optional]
**zohodesk_departments** | **string[]** | Restrict this agent to drafting replies only to these department ids | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
