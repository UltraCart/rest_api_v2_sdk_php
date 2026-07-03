# # ConversationEmbedPbxAuthResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | Merchant identifier the agent belongs to. | [optional]
**pbx_admin** | **bool** | True if this agent has PBX admin privileges. | [optional]
**pbx_jwt** | **string** | JWT used by the softphone widget to authenticate to the PBX WebSocket relay. | [optional]
**pbx_supervisor** | **bool** | True if this agent has PBX supervisor privileges. | [optional]
**pbx_user** | **bool** | True if this agent has baseline PBX access. | [optional]
**pbx_voice_identity** | **string** | Voice identity string identifying this agent to the PBX (e.g., client:user_123). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
