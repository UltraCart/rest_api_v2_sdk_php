# # LibraryItemPublishedMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count_of_versions** | **int** | The number of published versions a source item has, or zero if this item is not a source or is private | [optional]
**library_item_published_oid** | **int** | The oid pointing to the most recent published version, or zero if this is not a published source item. | [optional]
**library_item_review_oid** | **int** | The oid pointing to the review data if this is a source library item and currently under review | [optional]
**rejected** | **bool** | True if this is a source item and is under review and was rejected. | [optional]
**rejected_reason** | **string** | The reason for rejection if this item is a source item, is under review, and was rejected.  For all other cases, this value will be null or missing. | [optional]
**release_version** | **int** | If this library item is a source item and it is published, this is the most recent release version number | [optional]
**review_version** | **int** | If this library item is a source item and has a published item currently under review, this is that version number | [optional]
**under_review** | **bool** | True if this library item is a source item and is currently under review | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
