# # ConversationAgentTestSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_id** | **string** | Cart established for this session, soft logged in as the chosen customer profile.  Real, and anything the agent adds to it persists. | [optional]
**conversation_webchat_queue_uuid** | **string** | Queue entry created for this session | [optional]
**customer_auth** | [**\ultracart\v2\models\ConversationCustomerAuth**](ConversationCustomerAuth.md) |  | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**storefront_host_name** | **string** | Storefront the session is running against | [optional]
**success** | **bool** |  | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
