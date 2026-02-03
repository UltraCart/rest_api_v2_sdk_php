# # ConversationPbxCosAuditLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Action taken | [optional]
**agent_login** | **string** | Login of the agent who attempted the call | [optional]
**audit_log_uuid** | **string** | Audit log entry unique identifier | [optional]
**class_of_service_name** | **string** | Name of the class of service (denormalized for display) | [optional]
**class_of_service_uuid** | **string** | UUID of the class of service that was evaluated | [optional]
**destination** | **string** | Phone number the agent tried to dial | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**rule_triggered** | **string** | Rule that triggered the action | [optional]
**supervisor_login** | **string** | Login of supervisor who approved/denied (null for timeouts and direct blocks) | [optional]
**timestamp** | **string** | ISO 8601 timestamp of the event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
