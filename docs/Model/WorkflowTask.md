# # WorkflowTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assigned_to_group** | **string** | Assigned to group | [optional]
**assigned_to_group_id** | **int** | Assigned to group ID | [optional]
**assigned_to_user** | **string** | Assigned to user | [optional]
**assigned_to_user_id** | **int** | Assigned to user ID | [optional]
**attachments** | [**\ultracart\v2\models\WorkflowAttachment[]**](WorkflowAttachment.md) | Attachments to the Workflow Task | [optional]
**created_by** | [**\ultracart\v2\models\WorkflowUser**](WorkflowUser.md) |  | [optional]
**created_dts** | **string** | Date/time that the workflow task was created | [optional]
**delay_until_dts** | **string** | Date/time that the workflow task should delay until | [optional]
**due_dts** | **string** | Date/time that the workflow task is due | [optional]
**histories** | [**\ultracart\v2\models\WorkflowTaskHistory[]**](WorkflowTaskHistory.md) | Array of history records for the task | [optional]
**last_update_dts** | **string** | Date/time that the workflow task was last updated | [optional]
**merchant_id** | **string** | Merchant ID | [optional]
**notes** | [**\ultracart\v2\models\WorkflowNote[]**](WorkflowNote.md) | Notes on the Workflow Task | [optional]
**object_email** | **string** | Object is associated with customer email | [optional]
**object_id** | **string** | Object ID | [optional]
**object_type** | **string** | Object Type | [optional]
**object_url** | **string** | Object URL | [optional]
**priority** | **string** | Priority | [optional]
**status** | **string** | Status of the workflow task | [optional]
**task_context** | **string** | User friendly string of the task context | [optional]
**task_details** | **string** | Task Details | [optional]
**task_name** | **string** | Task Name | [optional]
**workflow_task_uuid** | **string** | Workflow Task UUID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
