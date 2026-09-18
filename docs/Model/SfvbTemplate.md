# # SfvbTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_blog_posts** | **bool** | True when the template shows the page&#39;s blog posts. | [optional]
**display_items** | **bool** | True when the template shows the page&#39;s items. | [optional]
**display_subgroups** | **bool** | True when the template shows the pages under this one. | [optional]
**metadata_available** | **bool** | False when the template has no metadata, so the capability flags below are unknown. | [optional]
**name** | **string** | The bare file name.  This is the value a page&#39;s group_template or item_template holds. | [optional]
**page_type** | **string** | The page type the template declares, such as group, item or static.  system for the fixed templates the storefront itself uses, such as checkout and my account.  Null when the template has no metadata. | [optional]
**pagination** | **bool** | True when the template pages through a long list of items. | [optional]
**system** | **bool** | True for the fixed templates the storefront itself uses.  Never assign one to a page. | [optional]
**theme_relative_path** | **string** | Where the file sits inside the theme. | [optional]
**visual_builder** | **bool** | True when the template renders visual builder containers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
