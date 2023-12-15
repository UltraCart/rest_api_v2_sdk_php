# ultracart\v2\OauthApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthAccessToken**](OauthApi.md#oauthAccessToken) | **POST** /oauth/token | Exchange authorization code for access token.
[**oauthRevoke**](OauthApi.md#oauthRevoke) | **POST** /oauth/revoke | Revoke this OAuth application.


# **oauthAccessToken**
> \ultracart\v2\models\OauthTokenResponse oauthAccessToken($client_id, $grant_type, $code, $redirect_uri, $refresh_token)

Exchange authorization code for access token.

The final leg in the OAuth process which exchanges the specified access token for the access code needed to make API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OauthApi::usingApiKey($simple_key);

$client_id = "client_id_example"; // string | The OAuth application client_id.
$grant_type = "grant_type_example"; // string | Type of grant
$code = "code_example"; // string | Authorization code received back from the browser redirect
$redirect_uri = "redirect_uri_example"; // string | The URI that you redirect the browser to to start the authorization process
$refresh_token = "refresh_token_example"; // string | The refresh token received during the original grant_type=authorization_code that can be used to return a new access token

try {
    $result = $apiInstance->oauthAccessToken($client_id, $grant_type, $code, $redirect_uri, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The OAuth application client_id. |
 **grant_type** | **string**| Type of grant |
 **code** | **string**| Authorization code received back from the browser redirect | [optional]
 **redirect_uri** | **string**| The URI that you redirect the browser to to start the authorization process | [optional]
 **refresh_token** | **string**| The refresh token received during the original grant_type&#x3D;authorization_code that can be used to return a new access token | [optional]

### Return type

[**\ultracart\v2\models\OauthTokenResponse**](../Model/OauthTokenResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthRevoke**
> \ultracart\v2\models\OauthRevokeSuccessResponse oauthRevoke($client_id, $token)

Revoke this OAuth application.

Revokes the OAuth application associated with the specified client_id and token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\OauthApi::usingApiKey($simple_key);

$client_id = "client_id_example"; // string | The OAuth application client_id.
$token = "token_example"; // string | The OAuth access token that is to be revoked..

try {
    $result = $apiInstance->oauthRevoke($client_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthRevoke: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The OAuth application client_id. |
 **token** | **string**| The OAuth access token that is to be revoked.. |

### Return type

[**\ultracart\v2\models\OauthRevokeSuccessResponse**](../Model/OauthRevokeSuccessResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

