# # SfvbPageSelectors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blog_post_selectors** | [**\ultracart\v2\models\SfvbPageBlogPostSelector[]**](SfvbPageBlogPostSelector.md) | The conditions that choose the page&#39;s blog posts. | [optional]
**item_selectors** | [**\ultracart\v2\models\SfvbPageItemSelector[]**](SfvbPageItemSelector.md) | The conditions that choose the page&#39;s items.  While there are any, the page&#39;s items are recalculated from them and cannot be assigned by hand. | [optional]
**match_all_blog_post_selectors** | **bool** | True when a blog post must meet every blog post selector, false when any one is enough. | [optional]
**match_all_item_selectors** | **bool** | True when an item must meet every item selector, false when meeting any one is enough. | [optional]
**path** | **string** | The page path.  Read only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
