# ConversationPbxCall

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_sid** | **string** | Twilio account SID | [optional] 
**agents** | [**\ultracart\v2\models\ConversationPbxCallAgent[]**](ConversationPbxCallAgent.md) | List of agents who participated in this call | [optional] 
**ai_agent_engagements** | [**\ultracart\v2\models\ConversationPbxCallAiEngagement[]**](ConversationPbxCallAiEngagement.md) | List of AI agent engagements during the call | [optional] 
**call_sid** | **string** | Twilio call SID for the primary (customer) call leg | [optional] 
**call_uuid** | **string** | Unique identifier for this call record | [optional] 
**caller** | [**\ultracart\v2\models\ConversationPbxCallCaller**](ConversationPbxCallCaller.md) |  | [optional] 
**conference_sid** | **string** | Twilio conference SID if this call used conferencing | [optional] 
**created_at_dts** | **string** | Timestamp when the call record was created | [optional] 
**customer_name** | **string** | Customer name associated with this call | [optional] 
**customer_profile_oid** | **string** | UltraCart customer profile OID if the caller was matched to a customer | [optional] 
**disposition** | **string** | Call disposition describing how the call ended | [optional] 
**email** | **string** | Email address of the caller if known | [optional] 
**financial** | [**\ultracart\v2\models\ConversationPbxCallFinancial**](ConversationPbxCallFinancial.md) |  | [optional] 
**holds** | [**\ultracart\v2\models\ConversationPbxCallHold[]**](ConversationPbxCallHold.md) | List of hold events during the call | [optional] 
**merchant_id** | **string** | Merchant identifier | [optional] 
**recording_sids** | **string[]** | List of all Twilio recording SIDs associated with this call | [optional] 
**recordings** | [**\ultracart\v2\models\ConversationPbxCallRecording[]**](ConversationPbxCallRecording.md) | List of recordings made during the call | [optional] 
**routing** | [**\ultracart\v2\models\ConversationPbxCallRouting**](ConversationPbxCallRouting.md) |  | [optional] 
**status** | **string** | Final status of the call | [optional] 
**timeline** | [**\ultracart\v2\models\ConversationPbxCallTimeline**](ConversationPbxCallTimeline.md) |  | [optional] 
**transfers** | [**\ultracart\v2\models\ConversationPbxCallTransfer[]**](ConversationPbxCallTransfer.md) | List of transfer events during the call | [optional] 
**updated_at_dts** | **string** | Timestamp when the call record was last updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


