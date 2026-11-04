# # SfvbSitemapsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | The host the sitemaps are built for. | [optional]
**notes** | **string[]** | What a person should know about these sitemaps, such as when they are rebuilt. | [optional]
**prevent_indexing** | **bool** | True when the storefront&#39;s Prevent Indexing setting is on.  The sitemaps are still served, but every page tells search engines not to index it. | [optional]
**robots_txt** | [**\ultracart\v2\models\SfvbRobotsTxt**](SfvbRobotsTxt.md) |  | [optional]
**sitemaps** | [**\ultracart\v2\models\SfvbSitemap[]**](SfvbSitemap.md) | The sitemaps that exist, sitemaps.org first.  Empty until the nightly build has run. | [optional]
**storefront_oid** | **int** | The storefront. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
