# # WorkflowTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assigned_to_group** | **string** | Assigned to group | [optional]
**assigned_to_group_id** | **int** | Assigned to group ID | [optional]
**assigned_to_user** | **string** | Assigned to user | [optional]
**assigned_to_user_id** | **int** | Assigned to user ID | [optional]
**assigned_to_user_or_group** | **string** | Assigned to user or group (used for sorting) | [optional]
**attachments** | [**\ultracart\v2\models\WorkflowAttachment[]**](WorkflowAttachment.md) | Attachments to the Workflow Task | [optional]
**created_by** | [**\ultracart\v2\models\WorkflowUser**](WorkflowUser.md) |  | [optional]
**created_dts** | **string** | Date/time that the workflow task was created | [optional]
**delay_until_dts** | **string** | Date/time that the workflow task should delay until | [optional]
**dependant_workflow_task_uuid** | **string** | Dependant Workflow Task UUID (must be completed before this task can be completed) | [optional]
**due_dts** | **string** | Date/time that the workflow task is due | [optional]
**expiration_dts** | **string** | Date/time that the workflow task will expire and be closed.  This is set by system generated tasks. | [optional]
**global_task_number** | **int** | Global task numer | [optional]
**histories** | [**\ultracart\v2\models\WorkflowTaskHistory[]**](WorkflowTaskHistory.md) | Array of history records for the task | [optional]
**last_update_dts** | **string** | Date/time that the workflow task was last updated | [optional]
**merchant_id** | **string** | Merchant ID | [optional]
**notes** | [**\ultracart\v2\models\WorkflowNote[]**](WorkflowNote.md) | Notes on the Workflow Task | [optional]
**object_email** | **string** | Object is associated with customer email | [optional]
**object_id** | **string** | Object ID | [optional]
**object_task_number** | **int** | Object specific task numer | [optional]
**object_type** | **string** | Object Type | [optional]
**object_url** | **string** | Object URL | [optional]
**priority** | **string** | Priority | [optional]
**properties** | [**\ultracart\v2\models\Property[]**](Property.md) | Properties | [optional]
**related_workflow_task_uuid** | **string** | Related Workflow Task UUID | [optional]
**status** | **string** | Status of the workflow task | [optional]
**system_task_type** | **string** | Constant for the type of system generated task | [optional]
**tags** | **string[]** | Tags | [optional]
**task_context** | **string** | User friendly string of the task context | [optional]
**task_details** | **string** | Task Details | [optional]
**task_name** | **string** | Task Name | [optional]
**workflow_task_uuid** | **string** | Workflow Task UUID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
