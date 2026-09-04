# # ConversationAgentTestSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_profile_oid** | **int** | Customer profile to converse as.  The cart is established as a soft login for this customer, so the agent sees their real order history. | [optional]
**question** | **string** | Optional opening question, the same way a customer types one before joining the queue. | [optional]
**queue_name** | **string** | Webchat queue to join.  The agent is selected explicitly, so this does not have to be a queue the agent is assigned to. | [optional]
**storefront_host_name** | **string** | Host name of the storefront to test against, with no protocol prefix.  Determines which catalog the agent searches. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
