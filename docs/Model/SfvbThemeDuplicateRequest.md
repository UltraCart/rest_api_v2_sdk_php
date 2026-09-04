# # SfvbThemeDuplicateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**folder** | **string** | Directory name for the new theme under /themes/.  Letters and numbers, one path segment.  Used verbatim - anything that is not already a valid directory name is refused rather than adjusted, because this call does not return the new theme&#39;s oid and you find your copy by matching the target_path you asked for.  Must not already exist - a collision is refused rather than resolved, because silently creating a differently named theme leaves you unsure what you made. | [optional]
**target_storefront_oid** | **int** | Storefront to create the copy on.  Defaults to the storefront in the path.  Supply it only when copying a theme between storefronts you own. | [optional]
**theme_name** | **string** | Name for the new theme. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
