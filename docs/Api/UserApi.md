# ultracart\v2\UserApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGroup**](UserApi.md#deleteGroup) | **DELETE** /user/groups/{group_oid} | Delete a group
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /user/users/{user_id} | Delete a user
[**getGroup**](UserApi.md#getGroup) | **GET** /user/groups/{group_oid} | Retrieve a group
[**getGroups**](UserApi.md#getGroups) | **GET** /user/groups | Get groups
[**getUser**](UserApi.md#getUser) | **GET** /user/users/{user_id} | Retrieve a user
[**getUserLogins**](UserApi.md#getUserLogins) | **GET** /user/users/{user_id}/logins | Retrieve a user&#39;s login history
[**getUsers**](UserApi.md#getUsers) | **GET** /user/users | Get users
[**insertGroup**](UserApi.md#insertGroup) | **POST** /user/groups | Insert a group
[**insertUser**](UserApi.md#insertUser) | **POST** /user/users | Insert a user
[**updateGroup**](UserApi.md#updateGroup) | **PUT** /user/groups/{group_oid} | Update a group
[**updateUser**](UserApi.md#updateUser) | **PUT** /user/users/{user_id} | Update a user


# **deleteGroup**
> deleteGroup($group_oid)

Delete a group

Delete a group on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$group_oid = 56; // int | The group_oid to delete.

try {
    $apiInstance->deleteGroup($group_oid);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($user_id)

Delete a user

Delete a user on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$user_id = 56; // int | The user_id to delete.

try {
    $apiInstance->deleteUser($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> getGroup($group_oid)

Retrieve a group

Retrieves a single group using the specified group id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$group_oid = 56; // int | The group id to retrieve.

try {
    $apiInstance->getGroup($group_oid);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \ultracart\v2\models\GroupsResponse getGroups()

Get groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\GroupsResponse**](../Model/GroupsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \ultracart\v2\models\UserResponse getUser($user_id)

Retrieve a user

Retrieves a single user using the specified user id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$user_id = 56; // int | The user id to retrieve.

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserLogins**
> \ultracart\v2\models\UserLoginsResponse getUserLogins($user_id)

Retrieve a user's login history

Retrieves logins for a single user using the specified user id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$user_id = 56; // int | The user id to retrieve.

try {
    $result = $apiInstance->getUserLogins($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserLogins: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \ultracart\v2\models\UsersResponse getUsers()

Get users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertGroup**
> \ultracart\v2\models\GroupResponse insertGroup($group)

Insert a group

Insert a group on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$group = new \ultracart\v2\models\Group(); // \ultracart\v2\models\Group | Group to insert

try {
    $result = $apiInstance->insertGroup($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->insertGroup: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertUser**
> \ultracart\v2\models\UserResponse insertUser($user)

Insert a user

Insert a user on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$user = new \ultracart\v2\models\User(); // \ultracart\v2\models\User | User to insert

try {
    $result = $apiInstance->insertUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->insertUser: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \ultracart\v2\models\GroupResponse updateGroup($group, $group_oid)

Update a group

Update a group on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$group = new \ultracart\v2\models\Group(); // \ultracart\v2\models\Group | Group to update
$group_oid = 56; // int | The group_oid to update.

try {
    $result = $apiInstance->updateGroup($group, $group_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | [**\ultracart\v2\models\Group**](../Model/Group.md)| Group to update |
 **group_oid** | **int**| The group_oid to update. |

### Return type

[**\ultracart\v2\models\GroupResponse**](../Model/GroupResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \ultracart\v2\models\UserResponse updateUser($user, $user_id)

Update a user

Update a user on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\UserApi::usingApiKey($simple_key);

$user = new \ultracart\v2\models\User(); // \ultracart\v2\models\User | User to update
$user_id = 56; // int | The user_id to update.

try {
    $result = $apiInstance->updateUser($user, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\ultracart\v2\models\User**](../Model/User.md)| User to update |
 **user_id** | **int**| The user_id to update. |

### Return type

[**\ultracart\v2\models\UserResponse**](../Model/UserResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

