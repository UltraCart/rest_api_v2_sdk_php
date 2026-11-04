# # SfvbSiteSeo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval_needed** | **bool** | On a change, true when it needs an approved site_seo.change request. | [optional]
**canonical** | **bool** | True when pages output canonical links. | [optional]
**changed** | **bool** | On a change, true when anything was saved, or would be on a dry run. | [optional]
**changes** | [**\ultracart\v2\models\SfvbSiteSeoChange[]**](SfvbSiteSeoChange.md) | On a change, each switch it changed, or would change on a dry run. | [optional]
**description** | **string** | The default meta description, the storefrontSEODescription site attribute. | [optional]
**dry_run** | **bool** | True when nothing was saved because the request was a dry run. | [optional]
**hash_sha256** | **string** | The hash of the three switches.  Send it as If-Match on a change. | [optional]
**keywords** | **string** | The default meta keywords, the storefrontSEOKeywords site attribute. | [optional]
**notes** | **string[]** | What a person should know about these settings. | [optional]
**prevent_indexing** | **bool** | True when every page tells search engines not to index it.  For a development store only. | [optional]
**schema_org** | **bool** | True when pages output Schema.org structured data. | [optional]
**storefront_oid** | **int** | The storefront. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
