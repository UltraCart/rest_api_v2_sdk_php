# ultracart\v2\ConversationEmbedApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**embedOauthDeviceAuthorize()**](ConversationEmbedApi.md#embedOauthDeviceAuthorize) | **POST** /conversation_embed/oauth/device/authorize | Initiate a device authorization flow for an embed widget.
[**embedOauthRevoke()**](ConversationEmbedApi.md#embedOauthRevoke) | **POST** /conversation_embed/oauth/device/revoke | Revoke an embed widget access or refresh token.
[**embedOauthToken()**](ConversationEmbedApi.md#embedOauthToken) | **POST** /conversation_embed/oauth/device/token | Exchange a device_code or refresh_token for an access token (embed widget).
[**getEmbedPbxAuth()**](ConversationEmbedApi.md#getEmbedPbxAuth) | **PUT** /conversation_embed/pbx-auth | Get PBX authorization for the embedded softphone widget.


## `embedOauthDeviceAuthorize()`

```php
embedOauthDeviceAuthorize($client_id, $scope)
```

Initiate a device authorization flow for an embed widget.

RFC 8628 device authorization. Only the embed widget's client_id and the crm_embed scope are accepted.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The embed widget OAuth client_id. |
 **scope** | **string**| The application-level scope (must be &#39;crm_embed&#39;). |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `embedOauthRevoke()`

```php
embedOauthRevoke($client_id, $token)
```

Revoke an embed widget access or refresh token.

RFC 7009 style â€” the token itself is proof of possession. Accepts either an access token or a refresh token in the 'token' parameter.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The embed widget OAuth client_id. |
 **token** | **string**| The token to revoke (access token or refresh token). |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `embedOauthToken()`

```php
embedOauthToken($client_id, $grant_type, $device_code, $refresh_token)
```

Exchange a device_code or refresh_token for an access token (embed widget).

Accepts grant_type=urn:ietf:params:oauth:grant-type:device_code or grant_type=refresh_token. Other grant types are rejected. Access tokens issued here expire in 60 minutes.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The embed widget OAuth client_id. |
 **grant_type** | **string**| Grant type. |
 **device_code** | **string**| The device code received from /oauth/device/authorize (required for device_code grant). | [optional]
 **refresh_token** | **string**| The refresh token (required for refresh_token grant). | [optional]

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmbedPbxAuth()`

```php
getEmbedPbxAuth(): \ultracart\v2\models\ConversationEmbedPbxAuthResponse
```

Get PBX authorization for the embedded softphone widget.

Returns a narrow subset of agent auth fields â€” only what the softphone widget needs to connect to the PBX relay. Twilio tokens, conversation JWTs, and chat/customer permissions are intentionally excluded.


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ConversationEmbedPbxAuthResponse**](../Model/ConversationEmbedPbxAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
