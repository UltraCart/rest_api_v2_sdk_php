# # SfvbPageResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\SfvbPageAttribute[]**](SfvbPageAttribute.md) | Every attribute this page has, including ones a template declares but nothing has set yet.  These are what the pageattribute element renders.  Sorted by name. | [optional]
**multimedia** | [**\ultracart\v2\models\SfvbPageMultimedia[]**](SfvbPageMultimedia.md) | The page&#39;s images, including codes a template declares but nothing has attached yet.  These are what the pageimage element renders - the default image when pageImageCode is empty, otherwise the image with that code.  The default image comes first. | [optional]
**path** | **string** | The page path, normalized to begin and end with a slash. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
