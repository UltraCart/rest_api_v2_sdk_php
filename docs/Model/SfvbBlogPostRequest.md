# # SfvbBlogPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_comments** | **bool** | Whether shoppers may comment.  Defaults to false on create. | [optional]
**author** | **string** | The author&#39;s name as plain text, up to 100 characters, with no quotes or angle brackets. | [optional]
**body** | **string** | The post body as HTML, up to 1 MB, rendered exactly as stored.  Refused with sfvb.unsafe_html if it could run script - script and other executable tags, on attributes, links that are not http, https, mailto, tel or relative, and iframes other than YouTube or Vimeo players.  Reference an attached image by the url the post&#39;s images report. | [optional]
**excerpt** | **string** | The post excerpt as HTML, up to 256 KB.  Held to the same rule as body. | [optional]
**publication_dts** | **string** | When the post is published, as an ISO 8601 UTC time in the same form publication_dts reads back.  Refused on a draft.  A post made public without one is published now. | [optional]
**tags** | **string[]** | The post&#39;s tags as plain text, up to 100 characters each, with no quotes or angle brackets and no repeats.  On an update the list replaces every tag, and an empty list clears them. | [optional]
**title** | **string** | The post title, up to 1000 characters.  Required on create. | [optional]
**url_part** | **string** | The post&#39;s name in its URL, which is the page path followed by this and .html.  Letters, digits, hyphens and underscores, up to 150.  Must not be used by another post on the storefront, compared without regard to case, and must not be an item id or an item&#39;s url part, because the storefront checks blog posts first and the post would replace the item&#39;s page.  index and index-N are reserved.  Required on create. | [optional]
**visibility** | **string** | P public, L logged in customers only, D draft.  Defaults to D on create.  Anything but D needs sfvb_publish, and so does any change to a post that is not a draft. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
