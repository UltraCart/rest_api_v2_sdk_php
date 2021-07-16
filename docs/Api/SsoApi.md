# ultracart\v2\SsoApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSsoSessionUser**](SsoApi.md#getSsoSessionUser) | **GET** /sso/session/user | Get single sign on session user
[**ssoAuthorize**](SsoApi.md#ssoAuthorize) | **PUT** /sso/authorize | Authorize a single sign on session
[**ssoSessionRevoke**](SsoApi.md#ssoSessionRevoke) | **DELETE** /sso/session/revoke | Revoke single sign on session
[**ssoToken**](SsoApi.md#ssoToken) | **PUT** /sso/token | Exchange a single sign on code for a simple key token


# **getSsoSessionUser**
> \ultracart\v2\models\User getSsoSessionUser()

Get single sign on session user

This is the equivalent of logging out of the single sign on session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\SsoApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getSsoSessionUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoApi->getSsoSessionUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\User**](../Model/User.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ssoAuthorize**
> \ultracart\v2\models\SingleSignOnAuthorizeResponse ssoAuthorize($authorization_request)

Authorize a single sign on session

Starts the process of authorizing a single sign on session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\SsoApi::usingApiKey($simple_key);

$authorization_request = new \ultracart\v2\models\SingleSignOnAuthorizeRequest(); // \ultracart\v2\models\SingleSignOnAuthorizeRequest | Authorization request

try {
    $result = $apiInstance->ssoAuthorize($authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoApi->ssoAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_request** | [**\ultracart\v2\models\SingleSignOnAuthorizeRequest**](../Model/SingleSignOnAuthorizeRequest.md)| Authorization request |

### Return type

[**\ultracart\v2\models\SingleSignOnAuthorizeResponse**](../Model/SingleSignOnAuthorizeResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ssoSessionRevoke**
> ssoSessionRevoke()

Revoke single sign on session

This is the equivalent of logging out of the single sign on session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\SsoApi::usingApiKey($simple_key);


try {
    $apiInstance->ssoSessionRevoke();
} catch (Exception $e) {
    echo 'Exception when calling SsoApi->ssoSessionRevoke: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ssoToken**
> \ultracart\v2\models\SingleSignOnTokenResponse ssoToken($token_request)

Exchange a single sign on code for a simple key token

Called by your application after receiving the code back on the redirect URI to obtain a simple key token to make API calls with

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\SsoApi::usingApiKey($simple_key);

$token_request = new \ultracart\v2\models\SingleSignOnTokenRequest(); // \ultracart\v2\models\SingleSignOnTokenRequest | Token request

try {
    $result = $apiInstance->ssoToken($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoApi->ssoToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\ultracart\v2\models\SingleSignOnTokenRequest**](../Model/SingleSignOnTokenRequest.md)| Token request |

### Return type

[**\ultracart\v2\models\SingleSignOnTokenResponse**](../Model/SingleSignOnTokenResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

