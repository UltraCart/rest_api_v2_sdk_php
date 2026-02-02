# ultracart\v2\WorkflowApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorkflowAgentWebsocketAuthorization()**](WorkflowApi.md#getWorkflowAgentWebsocketAuthorization) | **PUT** /workflow/agent/auth | Get agent websocket authorization
[**getWorkflowAssignmentGroups()**](WorkflowApi.md#getWorkflowAssignmentGroups) | **GET** /workflow/assignment_groups | Retrieve a list of groups that workflow tasks can be assigned to
[**getWorkflowAssignmentUsers()**](WorkflowApi.md#getWorkflowAssignmentUsers) | **GET** /workflow/assignment_users | Retrieve a list of users that workflow tasks can be assigned to
[**getWorkflowMe()**](WorkflowApi.md#getWorkflowMe) | **GET** /workflow/me | Retrieve a user object for myself
[**getWorkflowTask()**](WorkflowApi.md#getWorkflowTask) | **GET** /workflow/tasks/{task_uuid} | Retrieve a workflow task
[**getWorkflowTaskAttachmentUploadUrl()**](WorkflowApi.md#getWorkflowTaskAttachmentUploadUrl) | **GET** /workflow/tasks/attachments/{extension} | Get a presigned workflow task attachment upload URL
[**getWorkflowTaskByObjectType()**](WorkflowApi.md#getWorkflowTaskByObjectType) | **GET** /workflow/tasks/by/{object_type}/{object_id} | Retrieve a workflow task by object type and id
[**getWorkflowTaskOpenCount()**](WorkflowApi.md#getWorkflowTaskOpenCount) | **GET** /workflow/tasks/open_count | Retrieve workflow task open count
[**getWorkflowTaskTags()**](WorkflowApi.md#getWorkflowTaskTags) | **GET** /workflow/tasks/tags | Get a list of existing workflow task tags
[**getWorkflowTasks()**](WorkflowApi.md#getWorkflowTasks) | **POST** /workflow/tasks/search | Search workflow tasks
[**insertWorkflowTask()**](WorkflowApi.md#insertWorkflowTask) | **POST** /workflow/tasks | Insert a workflow task
[**updateWorkflowTask()**](WorkflowApi.md#updateWorkflowTask) | **PUT** /workflow/tasks/{task_uuid} | Update a workflow task


## `getWorkflowAgentWebsocketAuthorization()`

```php
getWorkflowAgentWebsocketAuthorization(): \ultracart\v2\models\WorkflowAgentAuthResponse
```

Get agent websocket authorization

Retrieve a JWT to authorize an agent to make a websocket connection.


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\WorkflowAgentAuthResponse**](../Model/WorkflowAgentAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowAssignmentGroups()`

```php
getWorkflowAssignmentGroups($_limit, $_offset): \ultracart\v2\models\WorkflowGroupsResponse
```

Retrieve a list of groups that workflow tasks can be assigned to

Retrieve a list of groups that workflow tasks can be assigned to


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]

### Return type

[**\ultracart\v2\models\WorkflowGroupsResponse**](../Model/WorkflowGroupsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowAssignmentUsers()`

```php
getWorkflowAssignmentUsers($_limit, $_offset): \ultracart\v2\models\WorkflowUsersResponse
```

Retrieve a list of users that workflow tasks can be assigned to

Retrieve a list of users that workflow tasks can be assigned to


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]

### Return type

[**\ultracart\v2\models\WorkflowUsersResponse**](../Model/WorkflowUsersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowMe()`

```php
getWorkflowMe(): \ultracart\v2\models\WorkflowUserResponse
```

Retrieve a user object for myself

Retrieve a user object for myself


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\WorkflowUserResponse**](../Model/WorkflowUserResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTask()`

```php
getWorkflowTask($task_uuid): \ultracart\v2\models\WorkflowTaskResponse
```

Retrieve a workflow task

Retrieve a workflow task


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\WorkflowTaskResponse**](../Model/WorkflowTaskResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTaskAttachmentUploadUrl()`

```php
getWorkflowTaskAttachmentUploadUrl($extension): \ultracart\v2\models\WorkflowAttachmentUploadUrlResponse
```

Get a presigned workflow task attachment upload URL

Get a presigned workflow task attachment upload URL


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**|  |

### Return type

[**\ultracart\v2\models\WorkflowAttachmentUploadUrlResponse**](../Model/WorkflowAttachmentUploadUrlResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTaskByObjectType()`

```php
getWorkflowTaskByObjectType($object_type, $object_id): \ultracart\v2\models\WorkflowTasksResponse
```

Retrieve a workflow task by object type and id

Retrieve a workflow task by object type and id


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_type** | **string**|  |
 **object_id** | **string**|  |

### Return type

[**\ultracart\v2\models\WorkflowTasksResponse**](../Model/WorkflowTasksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTaskOpenCount()`

```php
getWorkflowTaskOpenCount(): \ultracart\v2\models\WorkflowTaskOpenCountResponse
```

Retrieve workflow task open count

Retrieve workflow task open count


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\WorkflowTaskOpenCountResponse**](../Model/WorkflowTaskOpenCountResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTaskTags()`

```php
getWorkflowTaskTags(): \ultracart\v2\models\WorkflowTaskTagsResponse
```

Get a list of existing workflow task tags

Retrieves a unique list of all the existing workflow task tags.


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\WorkflowTaskTagsResponse**](../Model/WorkflowTaskTagsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTasks()`

```php
getWorkflowTasks($workflow_tasks_query, $_limit, $_offset, $_sort): \ultracart\v2\models\WorkflowTasksResponse
```

Search workflow tasks

Retrieves a set of workflow tasks from the account based on a query object.


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_tasks_query** | [**\ultracart\v2\models\WorkflowTasksRequest**](../Model/WorkflowTasksRequest.md)| Workflow tasks query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 500) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\WorkflowTasksResponse**](../Model/WorkflowTasksResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertWorkflowTask()`

```php
insertWorkflowTask($workflow_task): \ultracart\v2\models\WorkflowTaskResponse
```

Insert a workflow task

Insert a workflow task


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workflow_task** | [**\ultracart\v2\models\WorkflowTask**](../Model/WorkflowTask.md)| workflow task |

### Return type

[**\ultracart\v2\models\WorkflowTaskResponse**](../Model/WorkflowTaskResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowTask()`

```php
updateWorkflowTask($task_uuid, $workflow_task): \ultracart\v2\models\WorkflowTaskResponse
```

Update a workflow task

Update a workflow task


### Example

```php
<?php
// The Workflow REST is used internally by UltraCart for our own UI.
// We're not including any examples for using the Workflow Api. We doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_uuid** | **string**|  |
 **workflow_task** | [**\ultracart\v2\models\WorkflowTask**](../Model/WorkflowTask.md)| Workflow task |

### Return type

[**\ultracart\v2\models\WorkflowTaskResponse**](../Model/WorkflowTaskResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
