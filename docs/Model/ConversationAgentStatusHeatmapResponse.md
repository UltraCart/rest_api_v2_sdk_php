# # ConversationAgentStatusHeatmapResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agents** | **string[]** | Y-axis labels (one per agent) | [optional]
**data** | **object[]** | Sparse cells. Each row is [agent_index, hour, value]; empty cells are omitted. | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**hours** | **int[]** | X-axis values (hours of day, 0-23) | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
