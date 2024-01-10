# WorkflowTasksRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assigned_to_group_id** | **int** | Assigned to group ID | [optional] 
**assigned_to_me** | **bool** | Tasks are assigned to me either by direct user id or a group that the user is a member of | [optional] 
**assigned_to_user_id** | **int** | Assigned to user ID | [optional] 
**created_by** | [**\ultracart\v2\models\WorkflowUser**](WorkflowUser.md) |  | [optional] 
**created_dts_begin** | **string** | Date/time that the workflow task was created | [optional] 
**created_dts_end** | **string** | Date/time that the workflow task was created | [optional] 
**delay_until_dts_begin** | **string** | Date/time that the workflow task should delay until | [optional] 
**delay_until_dts_end** | **string** | Date/time that the workflow task should delay until | [optional] 
**due_dts_begin** | **string** | Date/time that the workflow task is due | [optional] 
**due_dts_end** | **string** | Date/time that the workflow task is due | [optional] 
**last_update_dts_begin** | **string** | Date/time that the workflow task was last updated | [optional] 
**last_update_dts_end** | **string** | Date/time that the workflow task was last updated | [optional] 
**object_email** | **string** | Object is associated with customer email | [optional] 
**object_type** | **string** | Object Type | [optional] 
**priority** | **string** | Priority | [optional] 
**status** | **string** | Status of the workflow task | [optional] 
**tags** | **string[]** | Tasks that are tagged with the specified tags | [optional] 
**unassigned** | **bool** | Tasks that are unassigned to a user or group | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


