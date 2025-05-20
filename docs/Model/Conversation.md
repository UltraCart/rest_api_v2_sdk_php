# Conversation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_language_iso_code** | **string** | The base language iso code for the StoreFront that everything is translated into | [optional] 
**closed** | **bool** |  | [optional] 
**conversation_arn** | **string** |  | [optional] 
**conversation_uuid** | **string** |  | [optional] 
**customer_first_message_unresponded_to_dts** | **string** | Date/time of the first customer message that is unresponded to. | [optional] 
**last_conversation_message_body** | **string** |  | [optional] 
**last_conversation_participant_arn** | **string** |  | [optional] 
**last_conversation_participant_name** | **string** |  | [optional] 
**last_interactive_message_dts** | **string** | Last interactive message date/time | [optional] 
**last_message_dts** | **string** | Last message date/time | [optional] 
**medium** | **string** | The communication medium of the customer. | [optional] 
**merchant_id** | **string** |  | [optional] 
**message_count** | **int** |  | [optional] 
**messages** | [**\ultracart\v2\models\ConversationMessage[]**](ConversationMessage.md) |  | [optional] 
**participants** | [**\ultracart\v2\models\ConversationParticipant[]**](ConversationParticipant.md) |  | [optional] 
**sentiment** | [**\ultracart\v2\models\ConversationSentiment**](ConversationSentiment.md) |  | [optional] 
**start_dts** | **string** | Start of the conversation date/time | [optional] 
**unread_messages** | **bool** |  | [optional] 
**virtual_agent** | **bool** | True if a virtual agent answered the conversation | [optional] 
**virtual_agent_cost** | **float** | The cost of this conversation performed by the virtual agent | [optional] 
**visible** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


