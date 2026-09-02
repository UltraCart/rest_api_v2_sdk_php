# # SfvbFileUploadUrlResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_in_seconds** | **int** | Seconds until the upload URL stops working.  Ask for a new one rather than holding this across a long job. | [optional]
**http_method** | **string** | HTTP method the upload URL expects. | [optional]
**key** | **string** | Quote this back to the upload endpoint once the bytes are in place.  It identifies the uploaded object and is bound to your account. | [optional]
**upload_url** | **string** | Send the raw bytes to this URL.  It is short lived and single use, and it is not part of this API - do not send an Authorization header with it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
