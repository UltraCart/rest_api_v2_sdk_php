# # SfvbBlogPostDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_comments** | **bool** | Whether shoppers may comment.  Like every false value here, false is left out of the response. | [optional]
**author** | **string** | The post author. | [optional]
**blog_post_oid** | **int** | The blog post&#39;s oid.  This is what a page&#39;s blog post assignment names. | [optional]
**body** | **string** | The post body as HTML, exactly as stored. | [optional]
**created_dts** | **string** | When the post was created (ISO 8601, UTC). | [optional]
**excerpt** | **string** | The post excerpt as HTML, exactly as stored. | [optional]
**images** | [**\ultracart\v2\models\SfvbBlogPostImage[]**](SfvbBlogPostImage.md) | The post&#39;s images, the default image first. | [optional]
**last_modified_dts** | **string** | When the post was last changed (ISO 8601, UTC), or null if it never was. | [optional]
**publication_dts** | **string** | When the post is published (ISO 8601, UTC), or null for a draft. | [optional]
**seo_description** | **string** | The meta description (storefrontSEODescription).  Absent when not set. | [optional]
**seo_keywords** | **string** | The meta keywords (storefrontSEOKeywords).  Absent when not set. | [optional]
**seo_title** | **string** | The page head title (storefrontSEOTitle).  Absent when not set, and the head then uses the post title. | [optional]
**tags** | **string[]** | The post&#39;s tags, in alphabetical order.  The order they were sent in is not kept. | [optional]
**title** | **string** | The post title. | [optional]
**unassigned** | **bool** | True when no page shows this post yet. | [optional]
**url_part** | **string** | The post&#39;s name in its URL. | [optional]
**view_url** | **string** | The post&#39;s address on the storefront, or null until a page shows it. | [optional]
**visibility** | **string** | P public, L logged in customers only, D draft. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
