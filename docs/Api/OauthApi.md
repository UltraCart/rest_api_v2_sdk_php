# ultracart\v2\OauthApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthRevokePost**](OauthApi.md#oauthRevokePost) | **POST** /oauth/revoke | Revoke this OAuth application.
[**oauthTokenPost**](OauthApi.md#oauthTokenPost) | **POST** /oauth/token | Exchange authorization code for access token.


# **oauthRevokePost**
> \ultracart\v2\models\OauthRevokeSuccessResponse oauthRevokePost($client_id, $token)

Revoke this OAuth application.

Revokes the OAuth application associated with the specified client_id and token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OauthApi();
$client_id = "client_id_example"; // string | The OAuth application client_id.
$token = "token_example"; // string | The OAuth access token that is to be revoked..

try {
    $result = $api_instance->oauthRevokePost($client_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthRevokePost: ', $e->getMessage(), PHP_EOL;
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

# **oauthTokenPost**
> \ultracart\v2\models\OauthTokenResponse oauthTokenPost($client_id, $grant_type, $code, $redirect_uri, $refresh_token)

Exchange authorization code for access token.

The final leg in the OAuth process which exchanges the specified access token for the access code needed to make API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\Api\OauthApi();
$client_id = "client_id_example"; // string | The OAuth application client_id.
$grant_type = "grant_type_example"; // string | Type of grant
$code = "code_example"; // string | Authorization code received back from the browser redirect
$redirect_uri = "redirect_uri_example"; // string | The URI that you redirect the browser to to start the authorization process
$refresh_token = "refresh_token_example"; // string | The refresh token received during the original grant_type=authorization_code that can be used to return a new access token

try {
    $result = $api_instance->oauthTokenPost($client_id, $grant_type, $code, $redirect_uri, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
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

