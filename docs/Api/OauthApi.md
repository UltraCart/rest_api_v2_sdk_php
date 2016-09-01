# ultracart\admin\v2\OauthApi

All URIs are relative to *https://secure.ultracart.com/rest/admin/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthRevokePost**](OauthApi.md#oauthRevokePost) | **POST** /oauth/revoke | Revoke this OAuth application.
[**oauthTokenPost**](OauthApi.md#oauthTokenPost) | **POST** /oauth/token | Exchange authorization code for access token.


# **oauthRevokePost**
> \ultracart\admin\v2\models\OauthRevokeSuccessResponse oauthRevokePost($client_id, $token)

Revoke this OAuth application.

Revokes the OAuth application associated with the specified client_id and token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\OauthApi();
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

[**\ultracart\admin\v2\models\OauthRevokeSuccessResponse**](../Model/OauthRevokeSuccessResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthTokenPost**
> \ultracart\admin\v2\models\OauthTokenSuccessResponse oauthTokenPost($client_id, $grant_type, $code, $redirect_uri, $refresh_token)

Exchange authorization code for access token.

The final leg in the OAuth process which exchanges the specified access token for the access code needed to make API calls.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\admin\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\admin\v2\Api\OauthApi();
$client_id = "client_id_example"; // string | The OAuth application client_id.
$grant_type = "grant_type_example"; // string | must be authorization_code or refresh_token
$code = "code_example"; // string | required for authorization_code
$redirect_uri = "redirect_uri_example"; // string | required for authorization_code
$refresh_token = "refresh_token_example"; // string | required for refresh_token

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
 **grant_type** | **string**| must be authorization_code or refresh_token |
 **code** | **string**| required for authorization_code | [optional]
 **redirect_uri** | **string**| required for authorization_code | [optional]
 **refresh_token** | **string**| required for refresh_token | [optional]

### Return type

[**\ultracart\admin\v2\models\OauthTokenSuccessResponse**](../Model/OauthTokenSuccessResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

