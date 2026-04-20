# # ConversationPbxMenu

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_direct_extensions** | **bool** | If true, the customer is allowed to input direct extensions within this menu | [optional]
**context_merchant_id** | **string** | Optional child merchant ID this resource is assigned to. Null &#x3D; shared across the linked merchant group. | [optional]
**conversation_pbx_menu_uuid** | **string** | Conversation Pbx Menu UUID | [optional]
**default_action** | **string** | The default action for this menu | [optional]
**default_action_target** | **string** | The default action target for this menu | [optional]
**mappings** | [**\ultracart\v2\models\ConversationPbxMenuMapping[]**](ConversationPbxMenuMapping.md) | Action mappings for this menu | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**name** | **string** | Menu name | [optional]
**play_audio_uuid** | **string** | An optional audio clip that plays when a customer enters this menu | [optional]
**say** | **string** | An optional saying that plays when a customer enters this menu | [optional]
**say_voice** | **string** | say voice | [optional]
**timeout** | **int** | The idle seconds before this menu times out | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
