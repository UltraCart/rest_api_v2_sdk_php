# ultracart\v2\ConversationApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAgentProfileKnowledgeBaseDocument()**](ConversationApi.md#deleteAgentProfileKnowledgeBaseDocument) | **DELETE** /conversation/agent/profiles/{user_id}/knowledge_base/{document_uuid} | Delete a knowledge base document
[**deleteConversationCannedMessage()**](ConversationApi.md#deleteConversationCannedMessage) | **DELETE** /conversation/canned_messages/{conversation_canned_message_oid} | Delete a conversation canned message
[**deleteDepartment()**](ConversationApi.md#deleteDepartment) | **DELETE** /conversation/departments/{conversation_department_oid} | Delete a conversation department
[**deleteEngagement()**](ConversationApi.md#deleteEngagement) | **DELETE** /conversation/engagements/{conversation_engagement_oid} | Delete a conversation engagement
[**deletePbxAgentVoicemail()**](ConversationApi.md#deletePbxAgentVoicemail) | **DELETE** /conversation/pbx/agent/voicemails/{recording_sid} | Delete Agent Voicemail
[**deletePbxAudio()**](ConversationApi.md#deletePbxAudio) | **DELETE** /conversation/pbx/audio/{conversationPbxAudioUuid} | Delete pbx audio
[**deletePbxMenu()**](ConversationApi.md#deletePbxMenu) | **DELETE** /conversation/pbx/menu/{conversationPbxMenuUuid} | Delete pbx menu
[**deletePbxQueue()**](ConversationApi.md#deletePbxQueue) | **DELETE** /conversation/pbx/queue/{conversationPbxQueueUuid} | Delete pbx queue
[**deletePbxQueueVoicemail()**](ConversationApi.md#deletePbxQueueVoicemail) | **DELETE** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid} | Delete Queue Voicemail
[**deletePbxTimeBased()**](ConversationApi.md#deletePbxTimeBased) | **DELETE** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Delete pbx timeBased
[**deletePbxTimeRange()**](ConversationApi.md#deletePbxTimeRange) | **DELETE** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Delete pbx timeRange
[**deletePbxVoicemailMailbox()**](ConversationApi.md#deletePbxVoicemailMailbox) | **DELETE** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Delete pbx voicemailMailbox
[**getAgentKeepAlive()**](ConversationApi.md#getAgentKeepAlive) | **GET** /conversation/agent/keepalive | Agent keep alive
[**getAgentProfile()**](ConversationApi.md#getAgentProfile) | **GET** /conversation/agent/profile | Get agent profile
[**getAgentProfileKnowledgeBase()**](ConversationApi.md#getAgentProfileKnowledgeBase) | **GET** /conversation/agent/profiles/{user_id}/knowledge_base | Get the list of knowledge base documents associated with this agent profile
[**getAgentProfileMcp()**](ConversationApi.md#getAgentProfileMcp) | **GET** /conversation/agent/profiles/{user_id}/mcps/{mcp_server_uuid} | Get an MCP server associated with this agent
[**getAgentProfileMcps()**](ConversationApi.md#getAgentProfileMcps) | **GET** /conversation/agent/profiles/{user_id}/mcps | Get the list of MCP servers associated with this agent
[**getAgentProfiles()**](ConversationApi.md#getAgentProfiles) | **GET** /conversation/agent/profiles | Get agent profiles
[**getAgentWebsocketAuthorization()**](ConversationApi.md#getAgentWebsocketAuthorization) | **PUT** /conversation/agent/auth | Get agent websocket authorization
[**getConversation()**](ConversationApi.md#getConversation) | **GET** /conversation/conversations/{conversation_uuid} | Retrieve a conversation
[**getConversationCannedMessages()**](ConversationApi.md#getConversationCannedMessages) | **GET** /conversation/canned_messages | Retrieve a list of canned messages ordered by short_code
[**getConversationContext()**](ConversationApi.md#getConversationContext) | **PUT** /conversation/conversations/{conversation_uuid}/context | Get a webchat conversation context
[**getConversationDepartmentMemberList()**](ConversationApi.md#getConversationDepartmentMemberList) | **GET** /conversation/department_members | Retrieve a list of possible department members
[**getConversationDepartments()**](ConversationApi.md#getConversationDepartments) | **GET** /conversation/departments | Retrieve a list of departments ordered by name
[**getConversationEngagement()**](ConversationApi.md#getConversationEngagement) | **GET** /conversation/engagements/{conversation_engagement_oid} | Retrieve an engagement
[**getConversationEngagements()**](ConversationApi.md#getConversationEngagements) | **GET** /conversation/engagements | Retrieve a list of engagements ordered by name
[**getConversationKnowledgeBaseDocumentUploadUrl()**](ConversationApi.md#getConversationKnowledgeBaseDocumentUploadUrl) | **GET** /conversation/agent/profiles/{user_id}/knowledge_base/upload_url/{extension} | Get a pre-signed conversation knowledge base document upload URL
[**getConversationMessages()**](ConversationApi.md#getConversationMessages) | **GET** /conversation/conversations/{conversation_uuid}/messages/{since} | Retrieve conversation messages
[**getConversationMultimediaUploadUrl()**](ConversationApi.md#getConversationMultimediaUploadUrl) | **GET** /conversation/upload_url/{extension} | Get a presigned conversation multimedia upload URL
[**getConversationPbxAudioUploadUrl()**](ConversationApi.md#getConversationPbxAudioUploadUrl) | **GET** /conversation/pbx/audio/upload_url/{extension} | Get a pre-signed conversation multimedia upload URL
[**getConversationPbxCustomerSnapshot()**](ConversationApi.md#getConversationPbxCustomerSnapshot) | **POST** /conversation/pbx/customer_snapshot | Get orders and customer information for a phone number
[**getConversationPermissions()**](ConversationApi.md#getConversationPermissions) | **GET** /conversation/permissions | Retrieve conversation permissions
[**getConversationWebchatQueueStatuses()**](ConversationApi.md#getConversationWebchatQueueStatuses) | **GET** /conversation/conversations/queues/statuses | Retrieve a conversation webchat queue statuses
[**getConversations()**](ConversationApi.md#getConversations) | **GET** /conversation/conversations | Retrieve a list of conversation summaries newest to oldest
[**getConversationsAutocomplete()**](ConversationApi.md#getConversationsAutocomplete) | **POST** /conversation/conversations/autocomplete | Retrieve a list of matching terms for a search field
[**getConversationsSearch()**](ConversationApi.md#getConversationsSearch) | **POST** /conversation/conversations/search | Search conversations
[**getLocationsForEngagement()**](ConversationApi.md#getLocationsForEngagement) | **POST** /conversation/locations | Get location data for engagement configuration
[**getPbxAgent()**](ConversationApi.md#getPbxAgent) | **GET** /conversation/pbx/agent/{conversationPbxAgentUuid} | Get pbx agent
[**getPbxAgentVoicemail()**](ConversationApi.md#getPbxAgentVoicemail) | **GET** /conversation/pbx/agent/voicemails/{recording_sid} | Get Agent Voicemail
[**getPbxAgentVoicemails()**](ConversationApi.md#getPbxAgentVoicemails) | **GET** /conversation/pbx/agent/voicemails | Get Agent Voicemails
[**getPbxAgents()**](ConversationApi.md#getPbxAgents) | **GET** /conversation/pbx/agent | Get pbx agents
[**getPbxAudio()**](ConversationApi.md#getPbxAudio) | **GET** /conversation/pbx/audio/{conversationPbxAudioUuid} | Get pbx audio
[**getPbxAudioUsage()**](ConversationApi.md#getPbxAudioUsage) | **GET** /conversation/pbx/audio/{conversationPbxAudioUuid}/usage | Get pbx audio usage
[**getPbxAudios()**](ConversationApi.md#getPbxAudios) | **GET** /conversation/pbx/audio | Get pbx audios
[**getPbxMenu()**](ConversationApi.md#getPbxMenu) | **GET** /conversation/pbx/menu/{conversationPbxMenuUuid} | Get pbx menu
[**getPbxMenus()**](ConversationApi.md#getPbxMenus) | **GET** /conversation/pbx/menu | Get pbx menus
[**getPbxPhoneNumber()**](ConversationApi.md#getPbxPhoneNumber) | **GET** /conversation/pbx/phone_number/{conversationPbxPhoneNumberUuid} | Get pbx phoneNumber
[**getPbxPhoneNumbers()**](ConversationApi.md#getPbxPhoneNumbers) | **GET** /conversation/pbx/phone_number | Get pbx phoneNumbers
[**getPbxQueue()**](ConversationApi.md#getPbxQueue) | **GET** /conversation/pbx/queue/{conversationPbxQueueUuid} | Get pbx queue
[**getPbxQueueVoicemail()**](ConversationApi.md#getPbxQueueVoicemail) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid} | Get Queue Voicemail
[**getPbxQueueVoicemails()**](ConversationApi.md#getPbxQueueVoicemails) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails | Get Queue Voicemails
[**getPbxQueues()**](ConversationApi.md#getPbxQueues) | **GET** /conversation/pbx/queue | Get pbx queues
[**getPbxTimeBased()**](ConversationApi.md#getPbxTimeBased) | **GET** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Get pbx timeBased
[**getPbxTimeBaseds()**](ConversationApi.md#getPbxTimeBaseds) | **GET** /conversation/pbx/time_based | Get pbx timeBaseds
[**getPbxTimeRange()**](ConversationApi.md#getPbxTimeRange) | **GET** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Get pbx timeRange
[**getPbxTimeRanges()**](ConversationApi.md#getPbxTimeRanges) | **GET** /conversation/pbx/time_range | Get pbx timeRanges
[**getPbxVoicemailMailbox()**](ConversationApi.md#getPbxVoicemailMailbox) | **GET** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Get pbx voicemailMailbox
[**getPbxVoicemailMailboxes()**](ConversationApi.md#getPbxVoicemailMailboxes) | **GET** /conversation/pbx/voicemail_mailbox | Get pbx voicemailMailboxes
[**getVirtualAgentBudget()**](ConversationApi.md#getVirtualAgentBudget) | **GET** /conversation/virtualagent/budget | Get virtual agent budget
[**getVirtualAgentCapabilities()**](ConversationApi.md#getVirtualAgentCapabilities) | **GET** /conversation/virtualagent/capabilities | Get virtual agent capabilities
[**insertAgentProfileKnowledgeBaseDocument()**](ConversationApi.md#insertAgentProfileKnowledgeBaseDocument) | **POST** /conversation/agent/profiles/{user_id}/knowledge_base | Insert a knowledge base document
[**insertAgentProfileMcp()**](ConversationApi.md#insertAgentProfileMcp) | **POST** /conversation/agent/profiles/{user_id}/mcps | Insert an agent MCP server
[**insertConversationCannedMessage()**](ConversationApi.md#insertConversationCannedMessage) | **POST** /conversation/canned_messages | Insert a canned message
[**insertConversationDepartment()**](ConversationApi.md#insertConversationDepartment) | **POST** /conversation/departments | Insert a department
[**insertConversationEngagement()**](ConversationApi.md#insertConversationEngagement) | **POST** /conversation/engagements | Insert a engagement
[**insertPbxAudio()**](ConversationApi.md#insertPbxAudio) | **POST** /conversation/pbx/audio | Insert pbx audio
[**insertPbxMenu()**](ConversationApi.md#insertPbxMenu) | **POST** /conversation/pbx/menu | Insert pbx menu
[**insertPbxQueue()**](ConversationApi.md#insertPbxQueue) | **POST** /conversation/pbx/queue | Insert pbx queue
[**insertPbxTimeBased()**](ConversationApi.md#insertPbxTimeBased) | **POST** /conversation/pbx/time_based | Insert pbx timeBased
[**insertPbxTimeRange()**](ConversationApi.md#insertPbxTimeRange) | **POST** /conversation/pbx/time_range | Insert pbx timeRange
[**insertPbxVoicemailMailbox()**](ConversationApi.md#insertPbxVoicemailMailbox) | **POST** /conversation/pbx/voicemail_mailbox | Insert pbx voicemailMailbox
[**joinConversation()**](ConversationApi.md#joinConversation) | **PUT** /conversation/conversations/{conversation_uuid}/join | Join a conversation
[**leaveConversation()**](ConversationApi.md#leaveConversation) | **DELETE** /conversation/conversations/{conversation_uuid}/leave | Leave a conversation
[**listenedPbxAgentVoicemail()**](ConversationApi.md#listenedPbxAgentVoicemail) | **GET** /conversation/pbx/agent/voicemails/{recording_sid}/listened | Listened Agent Voicemail
[**listenedPbxQueueVoicemail()**](ConversationApi.md#listenedPbxQueueVoicemail) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid}/listened | Listened Queue Voicemail
[**markReadConversation()**](ConversationApi.md#markReadConversation) | **PUT** /conversation/conversations/{conversation_uuid}/markread | Mark a conversation as read
[**resetConversationPbxQueueStatistics()**](ConversationApi.md#resetConversationPbxQueueStatistics) | **POST** /conversation/pbx/queues/{queue_uuid}/reset_statistics | reset statistics within the queue
[**searchConversationCannedMessages()**](ConversationApi.md#searchConversationCannedMessages) | **POST** /conversation/canned_messages/search | Search for canned messages by short_code
[**smsUnsubscribeConversation()**](ConversationApi.md#smsUnsubscribeConversation) | **PUT** /conversation/conversations/{conversation_uuid}/sms_unsubscribe | Unsubscribe any SMS participants in this conversation
[**startConversation()**](ConversationApi.md#startConversation) | **PUT** /conversation/conversations | Start a conversation
[**updateAgentProfile()**](ConversationApi.md#updateAgentProfile) | **PUT** /conversation/agent/profile | Update agent profile
[**updateAgentProfileMcp()**](ConversationApi.md#updateAgentProfileMcp) | **POST** /conversation/agent/profiles/{user_id}/mcps/{mcp_server_uuid} | Update an agent MCP server
[**updateConversationCannedMessage()**](ConversationApi.md#updateConversationCannedMessage) | **PUT** /conversation/canned_messages/{conversation_canned_message_oid} | Update a canned message
[**updateConversationDepartment()**](ConversationApi.md#updateConversationDepartment) | **PUT** /conversation/departments/{conversation_department_oid} | Update a department
[**updateConversationEngagement()**](ConversationApi.md#updateConversationEngagement) | **PUT** /conversation/engagements/{conversation_engagement_oid} | Update a engagement
[**updateConversationWebchatQueueStatus()**](ConversationApi.md#updateConversationWebchatQueueStatus) | **PUT** /conversation/conversations/queues/{queue_name}/status | Update status within the queue
[**updatePbxAgent()**](ConversationApi.md#updatePbxAgent) | **PUT** /conversation/pbx/agent/{conversationPbxAgentUuid} | Update pbx agent
[**updatePbxAudio()**](ConversationApi.md#updatePbxAudio) | **PUT** /conversation/pbx/audio/{conversationPbxAudioUuid} | Update pbx audio
[**updatePbxMenu()**](ConversationApi.md#updatePbxMenu) | **PUT** /conversation/pbx/menu/{conversationPbxMenuUuid} | Update pbx menu
[**updatePbxPhoneNumber()**](ConversationApi.md#updatePbxPhoneNumber) | **PUT** /conversation/pbx/phone_number/{conversationPbxPhoneNumberUuid} | Update pbx phoneNumber
[**updatePbxQueue()**](ConversationApi.md#updatePbxQueue) | **PUT** /conversation/pbx/queue/{conversationPbxQueueUuid} | Update pbx queue
[**updatePbxTimeBased()**](ConversationApi.md#updatePbxTimeBased) | **PUT** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Update pbx timeBased
[**updatePbxTimeRange()**](ConversationApi.md#updatePbxTimeRange) | **PUT** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Update pbx timeRange
[**updatePbxVoicemailMailbox()**](ConversationApi.md#updatePbxVoicemailMailbox) | **PUT** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Update pbx voicemailMailbox
[**updateVirtualAgentBudget()**](ConversationApi.md#updateVirtualAgentBudget) | **PUT** /conversation/virtualagent/budget | Update virtual agent budget
[**updateVirtualAgentCapabilities()**](ConversationApi.md#updateVirtualAgentCapabilities) | **PUT** /conversation/virtualagent/capabilities | Update virtual agent capabilities


## `deleteAgentProfileKnowledgeBaseDocument()`

```php
deleteAgentProfileKnowledgeBaseDocument($user_id, $document_uuid): \ultracart\v2\models\ConversationDeleteKnowledgeBaseDocumentResponse
```

Delete a knowledge base document

Delete a knowledge base document


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **document_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationDeleteKnowledgeBaseDocumentResponse**](../Model/ConversationDeleteKnowledgeBaseDocumentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConversationCannedMessage()`

```php
deleteConversationCannedMessage($conversation_canned_message_oid)
```

Delete a conversation canned message

Delete a conversation canned message


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDepartment()`

```php
deleteDepartment($conversation_department_oid)
```

Delete a conversation department

Delete a conversation department


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEngagement()`

```php
deleteEngagement($conversation_engagement_oid)
```

Delete a conversation engagement

Delete a conversation engagement


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxAgentVoicemail()`

```php
deletePbxAgentVoicemail($recording_sid)
```

Delete Agent Voicemail

Delete pbx agent Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recording_sid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxAudio()`

```php
deletePbxAudio($conversation_pbx_audio_uuid): \ultracart\v2\models\ConversationPbxAudioResponse
```

Delete pbx audio

Delete a pbx audio


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_audio_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioResponse**](../Model/ConversationPbxAudioResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxMenu()`

```php
deletePbxMenu($conversation_pbx_menu_uuid): \ultracart\v2\models\ConversationPbxMenuResponse
```

Delete pbx menu

Delete a pbx menu


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_menu_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxMenuResponse**](../Model/ConversationPbxMenuResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxQueue()`

```php
deletePbxQueue($conversation_pbx_queue_uuid): \ultracart\v2\models\ConversationPbxQueueResponse
```

Delete pbx queue

Delete a pbx queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_queue_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxQueueResponse**](../Model/ConversationPbxQueueResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxQueueVoicemail()`

```php
deletePbxQueueVoicemail($queue_uuid, $recording_sid)
```

Delete Queue Voicemail

Delete pbx queue Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_uuid** | **string**|  |
 **recording_sid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxTimeBased()`

```php
deletePbxTimeBased($conversation_pbx_time_based_uuid): \ultracart\v2\models\ConversationPbxTimeBasedResponse
```

Delete pbx timeBased

Delete a pbx timeBased


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_based_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeBasedResponse**](../Model/ConversationPbxTimeBasedResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxTimeRange()`

```php
deletePbxTimeRange($conversation_pbx_time_range_uuid): \ultracart\v2\models\ConversationPbxTimeRangeResponse
```

Delete pbx timeRange

Delete a pbx timeRange


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_range_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeRangeResponse**](../Model/ConversationPbxTimeRangeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePbxVoicemailMailbox()`

```php
deletePbxVoicemailMailbox($conversation_pbx_voicemail_mailbox_uuid): \ultracart\v2\models\ConversationPbxVoicemailMailboxResponse
```

Delete pbx voicemailMailbox

Delete a pbx voicemailMailbox


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_voicemail_mailbox_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMailboxResponse**](../Model/ConversationPbxVoicemailMailboxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentKeepAlive()`

```php
getAgentKeepAlive()
```

Agent keep alive

Called periodically by the conversation API to keep the session alive.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentProfile()`

```php
getAgentProfile(): \ultracart\v2\models\ConversationAgentProfileResponse
```

Get agent profile

Retrieve the agents profile


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationAgentProfileResponse**](../Model/ConversationAgentProfileResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentProfileKnowledgeBase()`

```php
getAgentProfileKnowledgeBase($user_id): \ultracart\v2\models\ConversationKnowledgeBaseDocumentsResponse
```

Get the list of knowledge base documents associated with this agent profile

Retrieve knowledge base documents


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\ultracart\v2\models\ConversationKnowledgeBaseDocumentsResponse**](../Model/ConversationKnowledgeBaseDocumentsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentProfileMcp()`

```php
getAgentProfileMcp($user_id, $mcp_server_uuid): \ultracart\v2\models\ConversationMcpServerResponse
```

Get an MCP server associated with this agent

Retrieve MCP server associated with this agent


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **mcp_server_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationMcpServerResponse**](../Model/ConversationMcpServerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentProfileMcps()`

```php
getAgentProfileMcps($user_id): \ultracart\v2\models\ConversationMcpServersResponse
```

Get the list of MCP servers associated with this agent

Retrieve MCP servers associated with this agent


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\ultracart\v2\models\ConversationMcpServersResponse**](../Model/ConversationMcpServersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentProfiles()`

```php
getAgentProfiles(): \ultracart\v2\models\ConversationAgentProfilesResponse
```

Get agent profiles

Retrieve the agents profile


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationAgentProfilesResponse**](../Model/ConversationAgentProfilesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentWebsocketAuthorization()`

```php
getAgentWebsocketAuthorization(): \ultracart\v2\models\ConversationAgentAuthResponse
```

Get agent websocket authorization

Retrieve a JWT to authorize an agent to make a websocket connection.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationAgentAuthResponse**](../Model/ConversationAgentAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversation()`

```php
getConversation($conversation_uuid, $limit): \ultracart\v2\models\ConversationResponse
```

Retrieve a conversation

Retrieve a conversation including the participants and messages


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationCannedMessages()`

```php
getConversationCannedMessages(): \ultracart\v2\models\ConversationCannedMessagesResponse
```

Retrieve a list of canned messages ordered by short_code

Retrieve a list of canned messages ordered by short_code


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationCannedMessagesResponse**](../Model/ConversationCannedMessagesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationContext()`

```php
getConversationContext($conversation_uuid): \ultracart\v2\models\ConversationWebchatContext
```

Get a webchat conversation context

Get a webchat conversation context


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationDepartmentMemberList()`

```php
getConversationDepartmentMemberList(): \ultracart\v2\models\ConversationDepartmentMembersResponse
```

Retrieve a list of possible department members

Retrieve a list of possible department members


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationDepartmentMembersResponse**](../Model/ConversationDepartmentMembersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationDepartments()`

```php
getConversationDepartments(): \ultracart\v2\models\ConversationDepartmentsResponse
```

Retrieve a list of departments ordered by name

Retrieve a list of departments ordered by name


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationDepartmentsResponse**](../Model/ConversationDepartmentsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationEngagement()`

```php
getConversationEngagement($conversation_engagement_oid): \ultracart\v2\models\ConversationEngagementResponse
```

Retrieve an engagement

Retrieve an engagement


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationEngagements()`

```php
getConversationEngagements(): \ultracart\v2\models\ConversationEngagementsResponse
```

Retrieve a list of engagements ordered by name

Retrieve a list of engagements ordered by name


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationEngagementsResponse**](../Model/ConversationEngagementsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationKnowledgeBaseDocumentUploadUrl()`

```php
getConversationKnowledgeBaseDocumentUploadUrl($user_id, $extension): \ultracart\v2\models\ConversationKnowledgeBaseDocumentUploadUrlResponse
```

Get a pre-signed conversation knowledge base document upload URL

Get a pre-signed conversation knowledge base document upload URL


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **extension** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationKnowledgeBaseDocumentUploadUrlResponse**](../Model/ConversationKnowledgeBaseDocumentUploadUrlResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationMessages()`

```php
getConversationMessages($conversation_uuid, $since, $limit): \ultracart\v2\models\ConversationMessagesResponse
```

Retrieve conversation messages

Retrieve conversation messages since a particular time


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationMultimediaUploadUrl()`

```php
getConversationMultimediaUploadUrl($extension): \ultracart\v2\models\ConversationMultimediaUploadUrlResponse
```

Get a presigned conversation multimedia upload URL

Get a presigned conversation multimedia upload URL


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationPbxAudioUploadUrl()`

```php
getConversationPbxAudioUploadUrl($extension): \ultracart\v2\models\ConversationPbxAudioUploadUrlResponse
```

Get a pre-signed conversation multimedia upload URL

Get a pre-signed conversation multimedia upload URL


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioUploadUrlResponse**](../Model/ConversationPbxAudioUploadUrlResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationPbxCustomerSnapshot()`

```php
getConversationPbxCustomerSnapshot($pbx_customer_snapshot_request): \ultracart\v2\models\ConversationPbxCustomerSnapshotResponse
```

Get orders and customer information for a phone number

Retrieves all the orders, auto orders, and customer profile for a given phone number


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_customer_snapshot_request** | [**\ultracart\v2\models\ConversationPbxCustomerSnapshotRequest**](../Model/ConversationPbxCustomerSnapshotRequest.md)| Conversation pbx customer snapshot request |

### Return type

[**\ultracart\v2\models\ConversationPbxCustomerSnapshotResponse**](../Model/ConversationPbxCustomerSnapshotResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationPermissions()`

```php
getConversationPermissions(): \ultracart\v2\models\ConversationPermissionsResponse
```

Retrieve conversation permissions

Retrieve conversation permissions


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPermissionsResponse**](../Model/ConversationPermissionsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationWebchatQueueStatuses()`

```php
getConversationWebchatQueueStatuses(): \ultracart\v2\models\ConversationWebchatQueueStatusesResponse
```

Retrieve a conversation webchat queue statuses

Retrieve a conversation webchat queue statuses including agent status and queue entries


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationWebchatQueueStatusesResponse**](../Model/ConversationWebchatQueueStatusesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversations()`

```php
getConversations($medium, $before, $_limit, $_offset): \ultracart\v2\models\ConversationsResponse
```

Retrieve a list of conversation summaries newest to oldest

Retrieve a list of conversation summaries that are ordered newest to oldest, include the most recent message and whether its been read.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationsAutocomplete()`

```php
getConversationsAutocomplete($autocomplete_request): \ultracart\v2\models\ConversationAutocompleteResponse
```

Retrieve a list of matching terms for a search field

Retrieve a list of matching terms for a search field


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversationsSearch()`

```php
getConversationsSearch($search_request): \ultracart\v2\models\ConversationSearchResponse
```

Search conversations

Search conversations


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationsForEngagement()`

```php
getLocationsForEngagement(): \ultracart\v2\models\ConversationLocationsResponse
```

Get location data for engagement configuration

Get location data for engagement configuration


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationLocationsResponse**](../Model/ConversationLocationsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAgent()`

```php
getPbxAgent($conversation_pbx_agent_uuid): \ultracart\v2\models\ConversationPbxAgentResponse
```

Get pbx agent

Retrieve a pbx agent


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_agent_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxAgentResponse**](../Model/ConversationPbxAgentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAgentVoicemail()`

```php
getPbxAgentVoicemail($recording_sid): \ultracart\v2\models\ConversationPbxVoicemailMessageResponse
```

Get Agent Voicemail

Retrieve pbx agent Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recording_sid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMessageResponse**](../Model/ConversationPbxVoicemailMessageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAgentVoicemails()`

```php
getPbxAgentVoicemails(): \ultracart\v2\models\ConversationPbxVoicemailMessageSummariesResponse
```

Get Agent Voicemails

Retrieve pbx agent Voicemails


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMessageSummariesResponse**](../Model/ConversationPbxVoicemailMessageSummariesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAgents()`

```php
getPbxAgents(): \ultracart\v2\models\ConversationPbxAgentsResponse
```

Get pbx agents

Retrieve pbx agents


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxAgentsResponse**](../Model/ConversationPbxAgentsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAudio()`

```php
getPbxAudio($conversation_pbx_audio_uuid): \ultracart\v2\models\ConversationPbxAudioResponse
```

Get pbx audio

Retrieve a pbx audio


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_audio_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioResponse**](../Model/ConversationPbxAudioResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAudioUsage()`

```php
getPbxAudioUsage($conversation_pbx_audio_uuid): \ultracart\v2\models\ConversationPbxAudioUsageResponse
```

Get pbx audio usage

Retrieve a pbx audio usage


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_audio_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioUsageResponse**](../Model/ConversationPbxAudioUsageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxAudios()`

```php
getPbxAudios(): \ultracart\v2\models\ConversationPbxAudiosResponse
```

Get pbx audios

Retrieve pbx audios


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxAudiosResponse**](../Model/ConversationPbxAudiosResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxMenu()`

```php
getPbxMenu($conversation_pbx_menu_uuid): \ultracart\v2\models\ConversationPbxMenuResponse
```

Get pbx menu

Retrieve a pbx menu


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_menu_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxMenuResponse**](../Model/ConversationPbxMenuResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxMenus()`

```php
getPbxMenus(): \ultracart\v2\models\ConversationPbxMenusResponse
```

Get pbx menus

Retrieve pbx menus


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxMenusResponse**](../Model/ConversationPbxMenusResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxPhoneNumber()`

```php
getPbxPhoneNumber($conversation_pbx_phone_number_uuid): \ultracart\v2\models\ConversationPbxPhoneNumberResponse
```

Get pbx phoneNumber

Retrieve a pbx phoneNumber


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_phone_number_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxPhoneNumberResponse**](../Model/ConversationPbxPhoneNumberResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxPhoneNumbers()`

```php
getPbxPhoneNumbers(): \ultracart\v2\models\ConversationPbxPhoneNumbersResponse
```

Get pbx phoneNumbers

Retrieve pbx phoneNumbers


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxPhoneNumbersResponse**](../Model/ConversationPbxPhoneNumbersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxQueue()`

```php
getPbxQueue($conversation_pbx_queue_uuid): \ultracart\v2\models\ConversationPbxQueueResponse
```

Get pbx queue

Retrieve a pbx queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_queue_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxQueueResponse**](../Model/ConversationPbxQueueResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxQueueVoicemail()`

```php
getPbxQueueVoicemail($queue_uuid, $recording_sid): \ultracart\v2\models\ConversationPbxVoicemailMessageResponse
```

Get Queue Voicemail

Retrieve pbx queue Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_uuid** | **string**|  |
 **recording_sid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMessageResponse**](../Model/ConversationPbxVoicemailMessageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxQueueVoicemails()`

```php
getPbxQueueVoicemails($queue_uuid): \ultracart\v2\models\ConversationPbxVoicemailMessageSummariesResponse
```

Get Queue Voicemails

Retrieve pbx queue voicemails


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMessageSummariesResponse**](../Model/ConversationPbxVoicemailMessageSummariesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxQueues()`

```php
getPbxQueues(): \ultracart\v2\models\ConversationPbxQueuesResponse
```

Get pbx queues

Retrieve pbx queues


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxQueuesResponse**](../Model/ConversationPbxQueuesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxTimeBased()`

```php
getPbxTimeBased($conversation_pbx_time_based_uuid): \ultracart\v2\models\ConversationPbxTimeBasedResponse
```

Get pbx timeBased

Retrieve a pbx timeBased


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_based_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeBasedResponse**](../Model/ConversationPbxTimeBasedResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxTimeBaseds()`

```php
getPbxTimeBaseds(): \ultracart\v2\models\ConversationPbxTimeBasedsResponse
```

Get pbx timeBaseds

Retrieve pbx timeBaseds


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxTimeBasedsResponse**](../Model/ConversationPbxTimeBasedsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxTimeRange()`

```php
getPbxTimeRange($conversation_pbx_time_range_uuid): \ultracart\v2\models\ConversationPbxTimeRangeResponse
```

Get pbx timeRange

Retrieve a pbx timeRange


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_range_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeRangeResponse**](../Model/ConversationPbxTimeRangeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxTimeRanges()`

```php
getPbxTimeRanges(): \ultracart\v2\models\ConversationPbxTimeRangesResponse
```

Get pbx timeRanges

Retrieve pbx timeRanges


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxTimeRangesResponse**](../Model/ConversationPbxTimeRangesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxVoicemailMailbox()`

```php
getPbxVoicemailMailbox($conversation_pbx_voicemail_mailbox_uuid): \ultracart\v2\models\ConversationPbxVoicemailMailboxResponse
```

Get pbx voicemailMailbox

Retrieve a pbx voicemailMailbox


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_voicemail_mailbox_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMailboxResponse**](../Model/ConversationPbxVoicemailMailboxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPbxVoicemailMailboxes()`

```php
getPbxVoicemailMailboxes(): \ultracart\v2\models\ConversationPbxVoicemailMailboxesResponse
```

Get pbx voicemailMailboxes

Retrieve pbx voicemailMailboxes


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMailboxesResponse**](../Model/ConversationPbxVoicemailMailboxesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualAgentBudget()`

```php
getVirtualAgentBudget(): \ultracart\v2\models\ConversationVirtualAgentBudgetResponse
```

Get virtual agent budget

Retrieve virtual agent budget


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationVirtualAgentBudgetResponse**](../Model/ConversationVirtualAgentBudgetResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualAgentCapabilities()`

```php
getVirtualAgentCapabilities(): \ultracart\v2\models\ConversationVirtualAgentCapabilitiesResponse
```

Get virtual agent capabilities

Retrieve virtual agent capabilities


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationVirtualAgentCapabilitiesResponse**](../Model/ConversationVirtualAgentCapabilitiesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertAgentProfileKnowledgeBaseDocument()`

```php
insertAgentProfileKnowledgeBaseDocument($user_id, $knowledge_base_document_request): \ultracart\v2\models\ConversationInsertKnowledgeBaseDocumentResponse
```

Insert a knowledge base document

Insert a knowledge base document


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **knowledge_base_document_request** | [**\ultracart\v2\models\ConversationInsertKnowledgeBaseDocumentRequest**](../Model/ConversationInsertKnowledgeBaseDocumentRequest.md)| Insert request |

### Return type

[**\ultracart\v2\models\ConversationInsertKnowledgeBaseDocumentResponse**](../Model/ConversationInsertKnowledgeBaseDocumentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertAgentProfileMcp()`

```php
insertAgentProfileMcp($user_id, $mcp_server): \ultracart\v2\models\ConversationMcpServerResponse
```

Insert an agent MCP server

Insert an agent MCP server


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **mcp_server** | [**\ultracart\v2\models\ConversationMcpServer**](../Model/ConversationMcpServer.md)| MCP Server |

### Return type

[**\ultracart\v2\models\ConversationMcpServerResponse**](../Model/ConversationMcpServerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertConversationCannedMessage()`

```php
insertConversationCannedMessage($canned_message): \ultracart\v2\models\ConversationCannedMessageResponse
```

Insert a canned message

Insert a canned message


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertConversationDepartment()`

```php
insertConversationDepartment($department): \ultracart\v2\models\ConversationDepartmentResponse
```

Insert a department

Insert a department


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertConversationEngagement()`

```php
insertConversationEngagement($engagement): \ultracart\v2\models\ConversationEngagementResponse
```

Insert a engagement

Insert a engagement


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxAudio()`

```php
insertPbxAudio($pbx_audio): \ultracart\v2\models\ConversationPbxAudioResponse
```

Insert pbx audio

Insert a pbx audio


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_audio** | [**\ultracart\v2\models\ConversationPbxAudio**](../Model/ConversationPbxAudio.md)| Pbx Audio |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioResponse**](../Model/ConversationPbxAudioResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxMenu()`

```php
insertPbxMenu($pbx_menu): \ultracart\v2\models\ConversationPbxMenuResponse
```

Insert pbx menu

Insert a pbx menu


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_menu** | [**\ultracart\v2\models\ConversationPbxMenu**](../Model/ConversationPbxMenu.md)| Pbx Menu |

### Return type

[**\ultracart\v2\models\ConversationPbxMenuResponse**](../Model/ConversationPbxMenuResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxQueue()`

```php
insertPbxQueue($pbx_queue): \ultracart\v2\models\ConversationPbxQueueResponse
```

Insert pbx queue

Insert a pbx queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_queue** | [**\ultracart\v2\models\ConversationPbxQueue**](../Model/ConversationPbxQueue.md)| Pbx Queue |

### Return type

[**\ultracart\v2\models\ConversationPbxQueueResponse**](../Model/ConversationPbxQueueResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxTimeBased()`

```php
insertPbxTimeBased($pbx_time_based): \ultracart\v2\models\ConversationPbxTimeBasedResponse
```

Insert pbx timeBased

Insert a pbx timeBased


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_time_based** | [**\ultracart\v2\models\ConversationPbxTimeBased**](../Model/ConversationPbxTimeBased.md)| Pbx TimeBased |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeBasedResponse**](../Model/ConversationPbxTimeBasedResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxTimeRange()`

```php
insertPbxTimeRange($pbx_time_range): \ultracart\v2\models\ConversationPbxTimeRangeResponse
```

Insert pbx timeRange

Insert a pbx timeRange


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_time_range** | [**\ultracart\v2\models\ConversationPbxTimeRange**](../Model/ConversationPbxTimeRange.md)| Pbx TimeRange |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeRangeResponse**](../Model/ConversationPbxTimeRangeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertPbxVoicemailMailbox()`

```php
insertPbxVoicemailMailbox($pbx_voicemail_mailbox): \ultracart\v2\models\ConversationPbxVoicemailMailboxResponse
```

Insert pbx voicemailMailbox

Insert a pbx voicemailMailbox


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pbx_voicemail_mailbox** | [**\ultracart\v2\models\ConversationPbxVoicemailMailbox**](../Model/ConversationPbxVoicemailMailbox.md)| Pbx VoicemailMailbox |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMailboxResponse**](../Model/ConversationPbxVoicemailMailboxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `joinConversation()`

```php
joinConversation($conversation_uuid, $join_request)
```

Join a conversation

Join a conversation


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveConversation()`

```php
leaveConversation($conversation_uuid)
```

Leave a conversation

Leave a conversation


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listenedPbxAgentVoicemail()`

```php
listenedPbxAgentVoicemail($recording_sid)
```

Listened Agent Voicemail

Listened pbx agent Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recording_sid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listenedPbxQueueVoicemail()`

```php
listenedPbxQueueVoicemail($queue_uuid, $recording_sid)
```

Listened Queue Voicemail

Listened pbx queue Voicemail


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_uuid** | **string**|  |
 **recording_sid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markReadConversation()`

```php
markReadConversation($conversation_uuid)
```

Mark a conversation as read

Mark a conversation as read


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetConversationPbxQueueStatistics()`

```php
resetConversationPbxQueueStatistics($queue_uuid)
```

reset statistics within the queue

reset statistics within the queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchConversationCannedMessages()`

```php
searchConversationCannedMessages($search_request): \ultracart\v2\models\ConversationCannedMessagesResponse
```

Search for canned messages by short_code

Search for canned messages by short_code


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smsUnsubscribeConversation()`

```php
smsUnsubscribeConversation($conversation_uuid)
```

Unsubscribe any SMS participants in this conversation

Unsubscribe any SMS participants in this conversation


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startConversation()`

```php
startConversation($start_request): \ultracart\v2\models\ConversationStartResponse
```

Start a conversation

Start a new conversation


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgentProfile()`

```php
updateAgentProfile($profile_request): \ultracart\v2\models\ConversationAgentProfileResponse
```

Update agent profile

Update agent profile


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgentProfileMcp()`

```php
updateAgentProfileMcp($user_id, $mcp_server_uuid, $mcp_server): \ultracart\v2\models\ConversationMcpServerResponse
```

Update an agent MCP server

Update an agent MCP server


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **mcp_server_uuid** | **string**|  |
 **mcp_server** | [**\ultracart\v2\models\ConversationMcpServer**](../Model/ConversationMcpServer.md)| MCP Server |

### Return type

[**\ultracart\v2\models\ConversationMcpServerResponse**](../Model/ConversationMcpServerResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversationCannedMessage()`

```php
updateConversationCannedMessage($conversation_canned_message_oid, $canned_message): \ultracart\v2\models\ConversationCannedMessageResponse
```

Update a canned message

Update a canned message


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversationDepartment()`

```php
updateConversationDepartment($conversation_department_oid, $department): \ultracart\v2\models\ConversationDepartmentResponse
```

Update a department

Update a department


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversationEngagement()`

```php
updateConversationEngagement($conversation_engagement_oid, $engagement): \ultracart\v2\models\ConversationEngagementResponse
```

Update a engagement

Update a engagement


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConversationWebchatQueueStatus()`

```php
updateConversationWebchatQueueStatus($queue_name, $status_request)
```

Update status within the queue

Update status within the queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxAgent()`

```php
updatePbxAgent($conversation_pbx_agent_uuid, $pbx_agent): \ultracart\v2\models\ConversationPbxAgentResponse
```

Update pbx agent

Update a pbx agent


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_agent_uuid** | **string**|  |
 **pbx_agent** | [**\ultracart\v2\models\ConversationPbxAgent**](../Model/ConversationPbxAgent.md)| Pbx Agent |

### Return type

[**\ultracart\v2\models\ConversationPbxAgentResponse**](../Model/ConversationPbxAgentResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxAudio()`

```php
updatePbxAudio($conversation_pbx_audio_uuid, $pbx_audio): \ultracart\v2\models\ConversationPbxAudioResponse
```

Update pbx audio

Update a pbx audio


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_audio_uuid** | **string**|  |
 **pbx_audio** | [**\ultracart\v2\models\ConversationPbxAudio**](../Model/ConversationPbxAudio.md)| Pbx Audio |

### Return type

[**\ultracart\v2\models\ConversationPbxAudioResponse**](../Model/ConversationPbxAudioResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxMenu()`

```php
updatePbxMenu($conversation_pbx_menu_uuid, $pbx_menu): \ultracart\v2\models\ConversationPbxMenuResponse
```

Update pbx menu

Update a pbx menu


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_menu_uuid** | **string**|  |
 **pbx_menu** | [**\ultracart\v2\models\ConversationPbxMenu**](../Model/ConversationPbxMenu.md)| Pbx Menu |

### Return type

[**\ultracart\v2\models\ConversationPbxMenuResponse**](../Model/ConversationPbxMenuResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxPhoneNumber()`

```php
updatePbxPhoneNumber($conversation_pbx_phone_number_uuid, $pbx_phone_number): \ultracart\v2\models\ConversationPbxPhoneNumberResponse
```

Update pbx phoneNumber

Update a pbx phoneNumber


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_phone_number_uuid** | **string**|  |
 **pbx_phone_number** | [**\ultracart\v2\models\ConversationPbxPhoneNumber**](../Model/ConversationPbxPhoneNumber.md)| Pbx PhoneNumber |

### Return type

[**\ultracart\v2\models\ConversationPbxPhoneNumberResponse**](../Model/ConversationPbxPhoneNumberResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxQueue()`

```php
updatePbxQueue($conversation_pbx_queue_uuid, $pbx_queue): \ultracart\v2\models\ConversationPbxQueueResponse
```

Update pbx queue

Update a pbx queue


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_queue_uuid** | **string**|  |
 **pbx_queue** | [**\ultracart\v2\models\ConversationPbxQueue**](../Model/ConversationPbxQueue.md)| Pbx Queue |

### Return type

[**\ultracart\v2\models\ConversationPbxQueueResponse**](../Model/ConversationPbxQueueResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxTimeBased()`

```php
updatePbxTimeBased($conversation_pbx_time_based_uuid, $pbx_time_based): \ultracart\v2\models\ConversationPbxTimeBasedResponse
```

Update pbx timeBased

Update a pbx timeBased


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_based_uuid** | **string**|  |
 **pbx_time_based** | [**\ultracart\v2\models\ConversationPbxTimeBased**](../Model/ConversationPbxTimeBased.md)| Pbx TimeBased |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeBasedResponse**](../Model/ConversationPbxTimeBasedResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxTimeRange()`

```php
updatePbxTimeRange($conversation_pbx_time_range_uuid, $pbx_time_range): \ultracart\v2\models\ConversationPbxTimeRangeResponse
```

Update pbx timeRange

Update a pbx timeRange


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_time_range_uuid** | **string**|  |
 **pbx_time_range** | [**\ultracart\v2\models\ConversationPbxTimeRange**](../Model/ConversationPbxTimeRange.md)| Pbx TimeRange |

### Return type

[**\ultracart\v2\models\ConversationPbxTimeRangeResponse**](../Model/ConversationPbxTimeRangeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePbxVoicemailMailbox()`

```php
updatePbxVoicemailMailbox($conversation_pbx_voicemail_mailbox_uuid, $pbx_voicemail_mailbox): \ultracart\v2\models\ConversationPbxVoicemailMailboxResponse
```

Update pbx voicemailMailbox

Update a pbx voicemailMailbox


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversation_pbx_voicemail_mailbox_uuid** | **string**|  |
 **pbx_voicemail_mailbox** | [**\ultracart\v2\models\ConversationPbxVoicemailMailbox**](../Model/ConversationPbxVoicemailMailbox.md)| Pbx VoicemailMailbox |

### Return type

[**\ultracart\v2\models\ConversationPbxVoicemailMailboxResponse**](../Model/ConversationPbxVoicemailMailboxResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVirtualAgentBudget()`

```php
updateVirtualAgentBudget($virtual_agent_budget): \ultracart\v2\models\ConversationVirtualAgentBudgetResponse
```

Update virtual agent budget

Update virtual agent budget


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_agent_budget** | [**\ultracart\v2\models\ConversationVirtualAgentBudget**](../Model/ConversationVirtualAgentBudget.md)| Virtual Agent Budget |

### Return type

[**\ultracart\v2\models\ConversationVirtualAgentBudgetResponse**](../Model/ConversationVirtualAgentBudgetResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVirtualAgentCapabilities()`

```php
updateVirtualAgentCapabilities($virtual_agent_capabilities): \ultracart\v2\models\ConversationVirtualAgentCapabilitiesResponse
```

Update virtual agent capabilities

Update virtual agent capabilities


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_agent_capabilities** | [**\ultracart\v2\models\ConversationVirtualAgentCapabilities**](../Model/ConversationVirtualAgentCapabilities.md)| Virtual Agent Capabilities |

### Return type

[**\ultracart\v2\models\ConversationVirtualAgentCapabilitiesResponse**](../Model/ConversationVirtualAgentCapabilitiesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
