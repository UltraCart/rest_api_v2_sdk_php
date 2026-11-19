# # SfvbCodeLibraryEmailDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_cjson** | **string** | The item&#39;s body as stored.  Starting a new email from it gives its elements new ids. | [optional]
**description** | **string** | The item&#39;s description. | [optional]
**files** | [**\ultracart\v2\models\SfvbCodeLibraryFile[]**](SfvbCodeLibraryFile.md) | The image files the item carries, without their contents. | [optional]
**library_item_oid** | **int** | The item, to send as library_item_oid on the step insert. | [optional]
**preview_text** | **string** | The preview text a new email takes from the item, or null when it has none. | [optional]
**source** | **string** | owned (this account&#39;s own), shared (shared with this account) or public (published and approved by UltraCart). | [optional]
**subject** | **string** | The subject a new email takes from the item, or null when it has none. | [optional]
**title** | **string** | The item&#39;s title. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
