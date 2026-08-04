# # ConversationAgentStatusSummaryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agents** | [**\ultracart\v2\models\AgentSummary[]**](AgentSummary.md) | Per-agent enriched summary (status totals + activity metrics) | [optional]
**avg_available_pct** | **object** |  | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**status_breakdown** | **object** | Total seconds-in-status across all agents, keyed by status name | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**total_agents** | **int** | Distinct agents with at least one transition in the range | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
