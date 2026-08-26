# # SfvbPreviewSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bytes_stored** | **int** | Bytes stored in this session by the request that returned this response. | [optional]
**expires_in_seconds** | **int** | Seconds until this session expires. | [optional]
**max_bytes** | **int** | Maximum bytes one preview session may hold. | [optional]
**owner_login** | **string** | Login this session belongs to.  Sessions are keyed by user, not by token. | [optional]
**preview_session_id** | **string** | The preview session id. | [optional]
**skipped** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Containers that were sent but could not be stored, with the reason. | [optional]
**stored_keys** | **string[]** | Preview map keys that were stored.  A container whose owner type could not be resolved is silently dropped by the underlying store, so compare this against what you sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
