# # SfvbLibraryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookmarked** | **bool** | True when the calling user has bookmarked this entry. | [optional]
**cjson** | **string** | The fragment&#39;s CJSON.  Omitted from search results to keep them terse; fetch a single entry to get it. | [optional]
**description** | **string** | What this fragment is for. | [optional]
**library_oid** | **int** | Library entry oid. | [optional]
**name** | **string** | Entry name. | [optional]
**owned** | **bool** | True when the calling user owns this entry. | [optional]
**referenced_files** | **string[]** | Storefront file paths this fragment references.  Installing the fragment copies them into the storefront; reading it does not. | [optional]
**screenshot_key** | **string** | S3 listing key for the large screenshot, when one has been generated. | [optional]
**share_with_account** | **bool** | True when the entry is shared across the merchant account. | [optional]
**thumbnail_key** | **string** | S3 listing key for the medium thumbnail, when one has been generated.  Thumbnails are produced asynchronously and can lag a save by a minute or two. | [optional]
**widget_type** | **string** | Element type at the root of the fragment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
