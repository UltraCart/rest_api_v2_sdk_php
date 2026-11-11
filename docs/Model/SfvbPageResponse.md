# # SfvbPageResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\SfvbPageAttribute[]**](SfvbPageAttribute.md) | Every attribute this page has, including ones a template declares but nothing has set yet.  These are what the pageattribute element renders.  Sorted by name. | [optional]
**blog_post_template** | **string** | Template that renders the blog posts under this page.  Omitted when not set. | [optional]
**description** | **string** | The page description, the text a page template renders as the page&#39;s description.  Omitted when empty. | [optional]
**exclude_from_sitemap** | **bool** | True when the page is left out of the sitemap and marked noindex. | [optional]
**group_template** | **string** | Template file that renders the page itself, a bare .vm name found anywhere in the active theme. | [optional]
**item_template** | **string** | Template file that renders the item pages under this page. | [optional]
**items_per_page** | **int** | Items per page on a template that paginates.  Omitted when the template&#39;s default applies. | [optional]
**multimedia** | [**\ultracart\v2\models\SfvbPageMultimedia[]**](SfvbPageMultimedia.md) | The page&#39;s images, including codes a template declares but nothing has attached yet.  These are what the pageimage element renders - the default image when pageImageCode is empty, otherwise the image with that code.  The default image comes first. | [optional]
**page_type** | **string** | S for a static page, D for a dynamic one. | [optional]
**path** | **string** | The page path, normalized to begin and end with a slash. | [optional]
**review_template** | **string** | Template that renders the item review pages under this page.  Omitted when not set. | [optional]
**sort_order** | **int** | Position among its siblings when the parent sorts child pages by a custom order.  Omitted when not set. | [optional]
**sort_order_child_groups** | **string** | How the pages under this one are ordered.  TA or TD by title, DA or DD by description, C custom. | [optional]
**sort_order_child_items** | **string** | How the page&#39;s items are ordered.  IA or ID by item id, DA or DD by description, SA or SD by manufacturer SKU, PA or PD by price, RA or RD by review, NA or ND by inventory, C custom. | [optional]
**title** | **string** | The page title. | [optional]
**visible** | **bool** | False when the page is hidden.  A hidden page answers 404 to shoppers. | [optional]
**visible_dts** | **string** | When set, the page stays hidden until this time (ISO 8601, UTC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
