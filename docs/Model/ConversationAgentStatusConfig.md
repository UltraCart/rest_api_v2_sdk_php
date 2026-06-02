# # ConversationAgentStatusConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the status is active and selectable. DELETE soft-deactivates by setting this to false. | [optional]
**channel** | **string** | Channel this status applies to | [optional]
**color** | **string** | Hex color for UI (e.g. &#39;#FF5733&#39;) | [optional]
**conversation_status_uuid** | **string** | Conversation agent status unique identifier | [optional]
**created_at** | **string** | Created at | [optional]
**icon** | **string** | Icon name | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**name** | **string** | Display name shown to agents | [optional]
**parent_status** | **string** | Channel-native parent status | [optional]
**routing_effect** | **string** | Canonical routing semantic. Derived server-side from (channel, parent_status). | [optional]
**sort_order** | **int** | Sort order in lists; lower &#x3D; first | [optional]
**twilio_activity_sid** | **string** | Twilio TaskRouter Activity SID (PBX-only; null for chat-only statuses) | [optional]
**updated_at** | **string** | Updated at | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
