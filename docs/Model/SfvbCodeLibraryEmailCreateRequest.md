# # SfvbCodeLibraryEmailCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_cjson** | **string** | The email body, a container that passes the email container rules. | [optional]
**description** | **string** | Up to 1000 characters on one line, or empty. | [optional]
**preview_text** | **string** | The preview text a new email started from the item takes, 5 to 150 characters on one line. | [optional]
**subject** | **string** | The subject a new email started from the item takes, 5 to 150 characters on one line. | [optional]
**title** | **string** | The title the new-email picker shows, 4 to 100 characters on one line. | [optional]
**uuid** | **string** | A UUID the caller makes for this save.  Sending the same uuid again returns the item it saved, unchanged, so a retry after an uncertain response never makes a second item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
