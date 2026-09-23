# # SfvbPageResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\SfvbPageAttribute[]**](SfvbPageAttribute.md) | Every attribute this page has, including ones a template declares but nothing has set yet.  These are what the pageattribute element renders.  Sorted by name. | [optional]
**description** | **string** | The page description, the text a page template renders as the page&#39;s description.  Omitted when empty. | [optional]
**exclude_from_sitemap** | **bool** | True when the page is left out of the sitemap and marked noindex. | [optional]
**group_template** | **string** | Template file that renders the page itself, a bare .vm name found anywhere in the active theme. | [optional]
**item_template** | **string** | Template file that renders the item pages under this page. | [optional]
**multimedia** | [**\ultracart\v2\models\SfvbPageMultimedia[]**](SfvbPageMultimedia.md) | The page&#39;s images, including codes a template declares but nothing has attached yet.  These are what the pageimage element renders - the default image when pageImageCode is empty, otherwise the image with that code.  The default image comes first. | [optional]
**path** | **string** | The page path, normalized to begin and end with a slash. | [optional]
**title** | **string** | The page title. | [optional]
**visible** | **bool** | False when the page is hidden.  A hidden page answers 404 to shoppers. | [optional]
**visible_dts** | **string** | When set, the page stays hidden until this time (ISO 8601, UTC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
