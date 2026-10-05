# # SfvbLibraryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookmarked** | **bool** | True when the calling user has bookmarked this entry. | [optional]
**cjson** | **string** | The fragment&#39;s CJSON.  Omitted from search results to keep them terse; fetch a single entry to get it. | [optional]
**content_manifest** | [**\ultracart\v2\models\SfvbLibraryContentManifest**](SfvbLibraryContentManifest.md) |  | [optional]
**description** | **string** | What this fragment is for. | [optional]
**hash_sha256** | **string** | Hash of the draft&#39;s writable fields.  Send it back as If-Match to update, delete or publish.  Present only for the owner. | [optional]
**last_modified_dts** | **string** | When the draft was last saved, ISO 8601. | [optional]
**library_oid** | **int** | Library entry oid. | [optional]
**name** | **string** | Entry name. | [optional]
**owned** | **bool** | True when the calling user owns this entry. | [optional]
**parameters** | [**\ultracart\v2\models\SfvbLibraryParameter[]**](SfvbLibraryParameter.md) | Named values the fragment expects the installer to supply. | [optional]
**published_revision_number** | **int** | The latest published revision, or null when the entry has never been published. | [optional]
**referenced_files** | **string[]** | Storefront file paths this fragment references.  Installing the fragment copies them into the storefront; reading it does not. | [optional]
**retired** | **bool** | True when the owner deleted an entry that had been published or installed.  It is kept so existing installs still resolve, and it leaves search. | [optional]
**revision_number** | **int** | The revision returned.  For the owner this is the draft, which every save increments.  For anyone else it is the published revision. | [optional]
**screenshot_height** | **int** | Screenshot height in pixels. | [optional]
**screenshot_key** | **string** | S3 listing key for the large screenshot, when one has been generated. | [optional]
**screenshot_sha256** | **string** | Hash of the uploaded screenshot. | [optional]
**screenshot_stale** | **bool** | True on an update that changed the fragment of an entry with a screenshot.  Retake it and set it again with the library screenshot endpoint. | [optional]
**screenshot_width** | **int** | Screenshot width in pixels. | [optional]
**share_with_account** | **bool** | True when the entry is shared across the merchant account. | [optional]
**shared_with** | [**\ultracart\v2\models\SfvbLibraryShareTarget[]**](SfvbLibraryShareTarget.md) | Linked accounts the entry is shared with.  Present only for the owner. | [optional]
**taxonomy** | [**\ultracart\v2\models\SfvbLibraryTaxonomy**](SfvbLibraryTaxonomy.md) |  | [optional]
**thumbnail_key** | **string** | S3 listing key for the medium thumbnail, when one has been generated.  Thumbnails are produced asynchronously and can lag a save by a minute or two. | [optional]
**visibility** | **string** | private, shared or public. | [optional]
**widget_type** | **string** | Element type at the root of the fragment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
