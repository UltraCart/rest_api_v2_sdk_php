# # ConversationAgentStatusEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_name** | **string** | Agent display name at the time of the event | [optional]
**agent_type** | **string** | Agent type | [optional]
**agent_user_id** | **string** | Agent user id (links across channels) | [optional]
**channel** | **string** | Channel | [optional]
**custom_status_name** | **string** | Custom status name (when applicable) | [optional]
**custom_status_uuid** | **string** | Custom status uuid (when applicable) | [optional]
**duration_in_previous_seconds** | **int** | Time spent in the previous status, in seconds | [optional]
**event_dts** | **string** | Event timestamp (ISO 8601) | [optional]
**event_uuid** | **string** | Event UUID (natural key for ES + BQ) | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**new_routing_effect** | **string** | Canonical new routing semantic | [optional]
**new_status** | **string** | Channel-native new status name | [optional]
**parent_merchant_id** | **string** | Parent merchant id (denormalized for ES routing parity) | [optional]
**previous_routing_effect** | **string** | Canonical previous routing semantic | [optional]
**previous_status** | **string** | Channel-native previous status name | [optional]
**trigger** | **string** | What triggered the transition | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
