# ultracart\v2\UserApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGroup()**](UserApi.md#deleteGroup) | **DELETE** /user/groups/{group_oid} | Delete a group
[**deleteUser()**](UserApi.md#deleteUser) | **DELETE** /user/users/{user_id} | Delete a user
[**getGroup()**](UserApi.md#getGroup) | **GET** /user/groups/{group_oid} | Retrieve a group
[**getGroups()**](UserApi.md#getGroups) | **GET** /user/groups | Get groups
[**getUser()**](UserApi.md#getUser) | **GET** /user/users/{user_id} | Retrieve a user
[**getUserLogins()**](UserApi.md#getUserLogins) | **GET** /user/users/{user_id}/logins | Retrieve a user&#39;s login history
[**getUsers()**](UserApi.md#getUsers) | **GET** /user/users | Get users
[**insertGroup()**](UserApi.md#insertGroup) | **POST** /user/groups | Insert a group
[**insertUser()**](UserApi.md#insertUser) | **POST** /user/users | Insert a user
[**updateGroup()**](UserApi.md#updateGroup) | **PUT** /user/groups/{group_oid} | Update a group
[**updateUser()**](UserApi.md#updateUser) | **PUT** /user/users/{user_id} | Update a user


## `deleteGroup()`

```php
deleteGroup($group_oid)
```

Delete a group

Delete a group on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_oid** | **int**| The group_oid to delete. |

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

## `deleteUser()`

```php
deleteUser($user_id)
```

Delete a user

Delete a user on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user_id to delete. |

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

## `getGroup()`

```php
getGroup($group_oid)
```

Retrieve a group

Retrieves a single group using the specified group id.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_oid** | **int**| The group id to retrieve. |

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

## `getGroups()`

```php
getGroups(): \ultracart\v2\models\GroupsResponse
```

Get groups


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\GroupsResponse**](../Model/GroupsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user_id): \ultracart\v2\models\UserResponse
```

Retrieve a user

Retrieves a single user using the specified user id.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id to retrieve. |

### Return type

[**\ultracart\v2\models\UserResponse**](../Model/UserResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserLogins()`

```php
getUserLogins($user_id): \ultracart\v2\models\UserLoginsResponse
```

Retrieve a user's login history

Retrieves logins for a single user using the specified user id.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id to retrieve. |

### Return type

[**\ultracart\v2\models\UserLoginsResponse**](../Model/UserLoginsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers(): \ultracart\v2\models\UsersResponse
```

Get users


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertGroup()`

```php
insertGroup($group): \ultracart\v2\models\GroupResponse
```

Insert a group

Insert a group on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | [**\ultracart\v2\models\Group**](../Model/Group.md)| Group to insert |

### Return type

[**\ultracart\v2\models\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertUser()`

```php
insertUser($user): \ultracart\v2\models\UserResponse
```

Insert a user

Insert a user on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\ultracart\v2\models\User**](../Model/User.md)| User to insert |

### Return type

[**\ultracart\v2\models\UserResponse**](../Model/UserResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($group_oid, $group): \ultracart\v2\models\GroupResponse
```

Update a group

Update a group on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_oid** | **int**| The group_oid to update. |
 **group** | [**\ultracart\v2\models\Group**](../Model/Group.md)| Group to update |

### Return type

[**\ultracart\v2\models\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_id, $user): \ultracart\v2\models\UserResponse
```

Update a user

Update a user on the UltraCart account.


### Example

```php
<?php
// The UserRestAPI is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the User Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user_id to update. |
 **user** | [**\ultracart\v2\models\User**](../Model/User.md)| User to update |

### Return type

[**\ultracart\v2\models\UserResponse**](../Model/UserResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
