# # ConversationAgentStatusRollup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_name** | **string** | Agent display name | [optional]
**agent_user_id** | **string** | Agent user id | [optional]
**availability_pct** | **object** |  | [optional]
**available_seconds** | **int** | Seconds spent Available (incl. Busy per OVERVIEW reporting convention) | [optional]
**calls_taken** | **int** | Calls handled by the agent on this day (PBX channel only) | [optional]
**channel** | **string** | Channel | [optional]
**chats_handled** | **int** | Chats handled by the agent on this day (chat channel only) | [optional]
**rollup_date** | **string** | Day this rollup covers (YYYY-MM-DD) | [optional]
**status_breakdown** | **object** | Per-status duration breakdown in seconds (status name -&gt; seconds) | [optional]
**total_tracked_seconds** | **int** | Total seconds tracked across all statuses for the day | [optional]
**unavailable_seconds** | **int** | Seconds spent Unavailable | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
