# # SfvbLibraryScreenshotRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The staging key files/upload_url/png returned, after the PNG was PUT to its URL.  Redeemed once. | [optional]
**sha256** | **string** | SHA-256 of the PNG bytes uploaded, lower case hex.  The upload is refused if it does not match. | [optional]
**source** | **string** | Where the image came from.  own for a screenshot you took, licensed or stock otherwise.  Needed before the entry can be made public. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
