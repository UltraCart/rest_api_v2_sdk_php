# ultracart\v2\ConversationApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteConversationCannedMessage**](ConversationApi.md#deleteConversationCannedMessage) | **DELETE** /conversation/canned_messages/{conversation_canned_message_oid} | Delete a conversation canned message
[**deleteDepartment**](ConversationApi.md#deleteDepartment) | **DELETE** /conversation/departments/{conversation_department_oid} | Delete a conversation department
[**deleteEngagement**](ConversationApi.md#deleteEngagement) | **DELETE** /conversation/engagements/{conversation_engagement_oid} | Delete a conversation engagement
[**getAgentKeepAlive**](ConversationApi.md#getAgentKeepAlive) | **GET** /conversation/agent/keepalive | Agent keep alive
[**getAgentProfile**](ConversationApi.md#getAgentProfile) | **GET** /conversation/agent/profile | Get agent profile
[**getAgentWebsocketAuthorization**](ConversationApi.md#getAgentWebsocketAuthorization) | **PUT** /conversation/agent/auth | Get agent websocket authorization
[**getConversation**](ConversationApi.md#getConversation) | **GET** /conversation/conversations/{conversation_uuid} | Retrieve a conversation
[**getConversationCannedMessages**](ConversationApi.md#getConversationCannedMessages) | **GET** /conversation/canned_messages | Retrieve a list of canned messages ordered by short_code
[**getConversationContext**](ConversationApi.md#getConversationContext) | **PUT** /conversation/conversations/{conversation_uuid}/context | Get a webchat conversation context
[**getConversationDepartmentMemberList**](ConversationApi.md#getConversationDepartmentMemberList) | **GET** /conversation/department_members | Retrieve a list of possible department members
[**getConversationDepartments**](ConversationApi.md#getConversationDepartments) | **GET** /conversation/departments | Retrieve a list of departments ordered by name
[**getConversationEngagement**](ConversationApi.md#getConversationEngagement) | **GET** /conversation/engagements/{conversation_engagement_oid} | Retrieve an engagement
[**getConversationEngagements**](ConversationApi.md#getConversationEngagements) | **GET** /conversation/engagements | Retrieve a list of engagements ordered by name
[**getConversationMessages**](ConversationApi.md#getConversationMessages) | **GET** /conversation/conversations/{conversation_uuid}/messages/{since} | Retrieve conversation messages
[**getConversationMultimediaUploadUrl**](ConversationApi.md#getConversationMultimediaUploadUrl) | **GET** /conversation/upload_url/{extension} | Get a presigned conersation multimedia upload URL
[**getConversationPermissions**](ConversationApi.md#getConversationPermissions) | **GET** /conversation/permissions | Retrieve conversation permissions
[**getConversationWebchatQueueStatuses**](ConversationApi.md#getConversationWebchatQueueStatuses) | **GET** /conversation/conversations/queues/statuses | Retrieve a conversation webchat queue statuses
[**getConversations**](ConversationApi.md#getConversations) | **GET** /conversation/conversations | Retrieve a list of conversation summaries newest to oldest
[**getConversationsAutocomplete**](ConversationApi.md#getConversationsAutocomplete) | **POST** /conversation/conversations/autocomplete | Retrieve a list of matching terms for a search field
[**getConversationsSearch**](ConversationApi.md#getConversationsSearch) | **POST** /conversation/conversations/search | Search conversations
[**getLocationsForEngagement**](ConversationApi.md#getLocationsForEngagement) | **POST** /conversation/locations | Get location data for engagement configuration
[**insertConversationCannedMessage**](ConversationApi.md#insertConversationCannedMessage) | **POST** /conversation/canned_messages | Insert a canned message
[**insertConversationDepartment**](ConversationApi.md#insertConversationDepartment) | **POST** /conversation/departments | Insert a department
[**insertConversationEngagement**](ConversationApi.md#insertConversationEngagement) | **POST** /conversation/engagements | Insert a engagement
[**joinConversation**](ConversationApi.md#joinConversation) | **PUT** /conversation/conversations/{conversation_uuid}/join | Join a conversation
[**leaveConversation**](ConversationApi.md#leaveConversation) | **DELETE** /conversation/conversations/{conversation_uuid}/leave | Leave a conversation
[**markReadConversation**](ConversationApi.md#markReadConversation) | **PUT** /conversation/conversations/{conversation_uuid}/markread | Mark a conversation as read
[**searchConversationCannedMessages**](ConversationApi.md#searchConversationCannedMessages) | **POST** /conversation/canned_messages/search | Search for canned messages by short_code
[**startConversation**](ConversationApi.md#startConversation) | **PUT** /conversation/conversations | Start a conversation
[**updateAgentProfile**](ConversationApi.md#updateAgentProfile) | **PUT** /conversation/agent/profile | Update agent profile
[**updateConversationCannedMessage**](ConversationApi.md#updateConversationCannedMessage) | **PUT** /conversation/canned_messages/{conversation_canned_message_oid} | Update a canned message
[**updateConversationDepartment**](ConversationApi.md#updateConversationDepartment) | **PUT** /conversation/departments/{conversation_department_oid} | Update a department
[**updateConversationEngagement**](ConversationApi.md#updateConversationEngagement) | **PUT** /conversation/engagements/{conversation_engagement_oid} | Update a engagement
[**updateConversationWebchatQueueStatus**](ConversationApi.md#updateConversationWebchatQueueStatus) | **PUT** /conversation/conversations/queues/{queue_name}/status | Update status within the queue


# **deleteConversationCannedMessage**
> deleteConversationCannedMessage($conversation_canned_message_oid)

Delete a conversation canned message

Delete a conversation canned message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_canned_message_oid = 56; // int | 

try {
    $apiInstance->deleteConversationCannedMessage($conversation_canned_message_oid);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->deleteConversationCannedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_canned_message_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDepartment**
> deleteDepartment($conversation_department_oid)

Delete a conversation department

Delete a conversation department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_department_oid = 56; // int | 

try {
    $apiInstance->deleteDepartment($conversation_department_oid);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->deleteDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_department_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEngagement**
> deleteEngagement($conversation_engagement_oid)

Delete a conversation engagement

Delete a conversation engagement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_engagement_oid = 56; // int | 

try {
    $apiInstance->deleteEngagement($conversation_engagement_oid);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->deleteEngagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_engagement_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentKeepAlive**
> getAgentKeepAlive()

Agent keep alive

Called periodically by the conversation API to keep the session alive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $apiInstance->getAgentKeepAlive();
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getAgentKeepAlive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentProfile**
> \ultracart\v2\models\ConversationAgentProfileResponse getAgentProfile()

Get agent profile

Retrieve the agents profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getAgentProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getAgentProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationAgentProfileResponse**](../Model/ConversationAgentProfileResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentWebsocketAuthorization**
> \ultracart\v2\models\ConversationAgentAuthResponse getAgentWebsocketAuthorization()

Get agent websocket authorization

Retrieve a JWT to authorize an agent to make a websocket connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getAgentWebsocketAuthorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getAgentWebsocketAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationAgentAuthResponse**](../Model/ConversationAgentAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversation**
> \ultracart\v2\models\ConversationResponse getConversation($conversation_uuid, $limit)

Retrieve a conversation

Retrieve a conversation including the participants and messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getConversation($conversation_uuid, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |
 **limit** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\ConversationResponse**](../Model/ConversationResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationCannedMessages**
> \ultracart\v2\models\ConversationCannedMessagesResponse getConversationCannedMessages()

Retrieve a list of canned messages ordered by short_code

Retrieve a list of canned messages ordered by short_code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationCannedMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationCannedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationCannedMessagesResponse**](../Model/ConversationCannedMessagesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationContext**
> \ultracart\v2\models\ConversationWebchatContext getConversationContext($conversation_uuid)

Get a webchat conversation context

Get a webchat conversation context

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 

try {
    $result = $apiInstance->getConversationContext($conversation_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationWebchatContext**](../Model/ConversationWebchatContext.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationDepartmentMemberList**
> \ultracart\v2\models\ConversationDepartmentMembersResponse getConversationDepartmentMemberList()

Retrieve a list of possible department members

Retrieve a list of possible department members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationDepartmentMemberList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationDepartmentMemberList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationDepartmentMembersResponse**](../Model/ConversationDepartmentMembersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationDepartments**
> \ultracart\v2\models\ConversationDepartmentsResponse getConversationDepartments()

Retrieve a list of departments ordered by name

Retrieve a list of departments ordered by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationDepartments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationDepartments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationDepartmentsResponse**](../Model/ConversationDepartmentsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationEngagement**
> \ultracart\v2\models\ConversationEngagementResponse getConversationEngagement($conversation_engagement_oid)

Retrieve an engagement

Retrieve an engagement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_engagement_oid = 56; // int | 

try {
    $result = $apiInstance->getConversationEngagement($conversation_engagement_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationEngagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_engagement_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ConversationEngagementResponse**](../Model/ConversationEngagementResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationEngagements**
> \ultracart\v2\models\ConversationEngagementsResponse getConversationEngagements()

Retrieve a list of engagements ordered by name

Retrieve a list of engagements ordered by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationEngagements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationEngagements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationEngagementsResponse**](../Model/ConversationEngagementsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationMessages**
> \ultracart\v2\models\ConversationMessagesResponse getConversationMessages($conversation_uuid, $since, $limit)

Retrieve conversation messages

Retrieve conversation messages since a particular time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 
$since = 789; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getConversationMessages($conversation_uuid, $since, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |
 **since** | **int**|  |
 **limit** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\ConversationMessagesResponse**](../Model/ConversationMessagesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationMultimediaUploadUrl**
> \ultracart\v2\models\ConversationMultimediaUploadUrlResponse getConversationMultimediaUploadUrl($extension)

Get a presigned conersation multimedia upload URL

Get a presigned conersation multimedia upload URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$extension = "extension_example"; // string | 

try {
    $result = $apiInstance->getConversationMultimediaUploadUrl($extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationMultimediaUploadUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationMultimediaUploadUrlResponse**](../Model/ConversationMultimediaUploadUrlResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationPermissions**
> \ultracart\v2\models\ConversationPermissionsResponse getConversationPermissions()

Retrieve conversation permissions

Retrieve conversation permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPermissionsResponse**](../Model/ConversationPermissionsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationWebchatQueueStatuses**
> \ultracart\v2\models\ConversationWebchatQueueStatusesResponse getConversationWebchatQueueStatuses()

Retrieve a conversation webchat queue statuses

Retrieve a conversation webchat queue statuses including agent status and queue entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getConversationWebchatQueueStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationWebchatQueueStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationWebchatQueueStatusesResponse**](../Model/ConversationWebchatQueueStatusesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversations**
> \ultracart\v2\models\ConversationsResponse getConversations($medium, $before, $_limit, $_offset)

Retrieve a list of conversation summaries newest to oldest

Retrieve a list of conversation summaries that are ordered newest to oldest, include the most recent message and whether its been read.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$medium = "medium_example"; // string | 
$before = "before_example"; // string | 
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.

try {
    $result = $apiInstance->getConversations($medium, $before, $_limit, $_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **medium** | **string**|  | [optional]
 **before** | **string**|  | [optional]
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]

### Return type

[**\ultracart\v2\models\ConversationsResponse**](../Model/ConversationsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsAutocomplete**
> \ultracart\v2\models\ConversationAutocompleteResponse getConversationsAutocomplete($autocomplete_request)

Retrieve a list of matching terms for a search field

Retrieve a list of matching terms for a search field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$autocomplete_request = new \ultracart\v2\models\ConversationAutocompleteRequest(); // \ultracart\v2\models\ConversationAutocompleteRequest | Autocomplete Request

try {
    $result = $apiInstance->getConversationsAutocomplete($autocomplete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationsAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **autocomplete_request** | [**\ultracart\v2\models\ConversationAutocompleteRequest**](../Model/ConversationAutocompleteRequest.md)| Autocomplete Request |

### Return type

[**\ultracart\v2\models\ConversationAutocompleteResponse**](../Model/ConversationAutocompleteResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsSearch**
> \ultracart\v2\models\ConversationSearchResponse getConversationsSearch($search_request)

Search conversations

Search conversations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$search_request = new \ultracart\v2\models\ConversationSearchRequest(); // \ultracart\v2\models\ConversationSearchRequest | Search Request

try {
    $result = $apiInstance->getConversationsSearch($search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getConversationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_request** | [**\ultracart\v2\models\ConversationSearchRequest**](../Model/ConversationSearchRequest.md)| Search Request |

### Return type

[**\ultracart\v2\models\ConversationSearchResponse**](../Model/ConversationSearchResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationsForEngagement**
> \ultracart\v2\models\ConversationLocationsResponse getLocationsForEngagement()

Get location data for engagement configuration

Get location data for engagement configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getLocationsForEngagement();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->getLocationsForEngagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationLocationsResponse**](../Model/ConversationLocationsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertConversationCannedMessage**
> \ultracart\v2\models\ConversationCannedMessageResponse insertConversationCannedMessage($canned_message)

Insert a canned message

Insert a canned message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$canned_message = new \ultracart\v2\models\ConversationCannedMessage(); // \ultracart\v2\models\ConversationCannedMessage | Canned message

try {
    $result = $apiInstance->insertConversationCannedMessage($canned_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->insertConversationCannedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **canned_message** | [**\ultracart\v2\models\ConversationCannedMessage**](../Model/ConversationCannedMessage.md)| Canned message |

### Return type

[**\ultracart\v2\models\ConversationCannedMessageResponse**](../Model/ConversationCannedMessageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertConversationDepartment**
> \ultracart\v2\models\ConversationDepartmentResponse insertConversationDepartment($department)

Insert a department

Insert a department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$department = new \ultracart\v2\models\ConversationDepartment(); // \ultracart\v2\models\ConversationDepartment | Department

try {
    $result = $apiInstance->insertConversationDepartment($department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->insertConversationDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | [**\ultracart\v2\models\ConversationDepartment**](../Model/ConversationDepartment.md)| Department |

### Return type

[**\ultracart\v2\models\ConversationDepartmentResponse**](../Model/ConversationDepartmentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertConversationEngagement**
> \ultracart\v2\models\ConversationEngagementResponse insertConversationEngagement($engagement)

Insert a engagement

Insert a engagement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$engagement = new \ultracart\v2\models\ConversationEngagement(); // \ultracart\v2\models\ConversationEngagement | Engagement

try {
    $result = $apiInstance->insertConversationEngagement($engagement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->insertConversationEngagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engagement** | [**\ultracart\v2\models\ConversationEngagement**](../Model/ConversationEngagement.md)| Engagement |

### Return type

[**\ultracart\v2\models\ConversationEngagementResponse**](../Model/ConversationEngagementResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinConversation**
> joinConversation($conversation_uuid, $join_request)

Join a conversation

Join a conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 
$join_request = new \ultracart\v2\models\ConversationJoinRequest(); // \ultracart\v2\models\ConversationJoinRequest | Join request

try {
    $apiInstance->joinConversation($conversation_uuid, $join_request);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->joinConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |
 **join_request** | [**\ultracart\v2\models\ConversationJoinRequest**](../Model/ConversationJoinRequest.md)| Join request | [optional]

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leaveConversation**
> leaveConversation($conversation_uuid)

Leave a conversation

Leave a conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 

try {
    $apiInstance->leaveConversation($conversation_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->leaveConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markReadConversation**
> markReadConversation($conversation_uuid)

Mark a conversation as read

Mark a conversation as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_uuid = "conversation_uuid_example"; // string | 

try {
    $apiInstance->markReadConversation($conversation_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->markReadConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchConversationCannedMessages**
> \ultracart\v2\models\ConversationCannedMessagesResponse searchConversationCannedMessages($search_request)

Search for canned messages by short_code

Search for canned messages by short_code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$search_request = new \ultracart\v2\models\ConversationCannedMessagesSearch(); // \ultracart\v2\models\ConversationCannedMessagesSearch | Search request

try {
    $result = $apiInstance->searchConversationCannedMessages($search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->searchConversationCannedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_request** | [**\ultracart\v2\models\ConversationCannedMessagesSearch**](../Model/ConversationCannedMessagesSearch.md)| Search request |

### Return type

[**\ultracart\v2\models\ConversationCannedMessagesResponse**](../Model/ConversationCannedMessagesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startConversation**
> \ultracart\v2\models\ConversationStartResponse startConversation($start_request)

Start a conversation

Start a new conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$start_request = new \ultracart\v2\models\ConversationStartRequest(); // \ultracart\v2\models\ConversationStartRequest | Start request

try {
    $result = $apiInstance->startConversation($start_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->startConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_request** | [**\ultracart\v2\models\ConversationStartRequest**](../Model/ConversationStartRequest.md)| Start request |

### Return type

[**\ultracart\v2\models\ConversationStartResponse**](../Model/ConversationStartResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgentProfile**
> \ultracart\v2\models\ConversationAgentProfileResponse updateAgentProfile($profile_request)

Update agent profile

Update agent profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$profile_request = new \ultracart\v2\models\ConversationAgentProfile(); // \ultracart\v2\models\ConversationAgentProfile | Profile request

try {
    $result = $apiInstance->updateAgentProfile($profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->updateAgentProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_request** | [**\ultracart\v2\models\ConversationAgentProfile**](../Model/ConversationAgentProfile.md)| Profile request |

### Return type

[**\ultracart\v2\models\ConversationAgentProfileResponse**](../Model/ConversationAgentProfileResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConversationCannedMessage**
> \ultracart\v2\models\ConversationCannedMessageResponse updateConversationCannedMessage($conversation_canned_message_oid, $canned_message)

Update a canned message

Update a canned message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_canned_message_oid = 56; // int | 
$canned_message = new \ultracart\v2\models\ConversationCannedMessage(); // \ultracart\v2\models\ConversationCannedMessage | Canned message

try {
    $result = $apiInstance->updateConversationCannedMessage($conversation_canned_message_oid, $canned_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->updateConversationCannedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_canned_message_oid** | **int**|  |
 **canned_message** | [**\ultracart\v2\models\ConversationCannedMessage**](../Model/ConversationCannedMessage.md)| Canned message |

### Return type

[**\ultracart\v2\models\ConversationCannedMessageResponse**](../Model/ConversationCannedMessageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConversationDepartment**
> \ultracart\v2\models\ConversationDepartmentResponse updateConversationDepartment($conversation_department_oid, $department)

Update a department

Update a department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_department_oid = 56; // int | 
$department = new \ultracart\v2\models\ConversationDepartment(); // \ultracart\v2\models\ConversationDepartment | Department

try {
    $result = $apiInstance->updateConversationDepartment($conversation_department_oid, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->updateConversationDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_department_oid** | **int**|  |
 **department** | [**\ultracart\v2\models\ConversationDepartment**](../Model/ConversationDepartment.md)| Department |

### Return type

[**\ultracart\v2\models\ConversationDepartmentResponse**](../Model/ConversationDepartmentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConversationEngagement**
> \ultracart\v2\models\ConversationEngagementResponse updateConversationEngagement($conversation_engagement_oid, $engagement)

Update a engagement

Update a engagement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$conversation_engagement_oid = 56; // int | 
$engagement = new \ultracart\v2\models\ConversationEngagement(); // \ultracart\v2\models\ConversationEngagement | Engagement

try {
    $result = $apiInstance->updateConversationEngagement($conversation_engagement_oid, $engagement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->updateConversationEngagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_engagement_oid** | **int**|  |
 **engagement** | [**\ultracart\v2\models\ConversationEngagement**](../Model/ConversationEngagement.md)| Engagement |

### Return type

[**\ultracart\v2\models\ConversationEngagementResponse**](../Model/ConversationEngagementResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConversationWebchatQueueStatus**
> updateConversationWebchatQueueStatus($queue_name, $status_request)

Update status within the queue

Update status within the queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\ConversationApi::usingApiKey($simple_key);

$queue_name = "queue_name_example"; // string | 
$status_request = new \ultracart\v2\models\ConversationWebchatQueueStatusUpdateRequest(); // \ultracart\v2\models\ConversationWebchatQueueStatusUpdateRequest | Status request

try {
    $apiInstance->updateConversationWebchatQueueStatus($queue_name, $status_request);
} catch (Exception $e) {
    echo 'Exception when calling ConversationApi->updateConversationWebchatQueueStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_name** | **string**|  |
 **status_request** | [**\ultracart\v2\models\ConversationWebchatQueueStatusUpdateRequest**](../Model/ConversationWebchatQueueStatusUpdateRequest.md)| Status request |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

