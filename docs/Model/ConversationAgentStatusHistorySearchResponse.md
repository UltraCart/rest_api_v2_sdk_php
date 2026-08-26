# # ConversationAgentStatusHistorySearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**events** | [**\ultracart\v2\models\ConversationAgentStatusEvent[]**](ConversationAgentStatusEvent.md) | Status transition events | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**total** | **int** | Total matching events (pre-pagination) | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
