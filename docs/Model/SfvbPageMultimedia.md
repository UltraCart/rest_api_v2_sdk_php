# # SfvbPageMultimedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The image code, which is what pageImageCode refers to.  Empty for the default image. | [optional]
**declared** | **bool** | True when a template declares this code.  An attached image whose code nothing declares renders nowhere unless a pageimage element names it. | [optional]
**default** | **bool** | True for the page&#39;s default image, which a pageimage element with no pageImageCode renders.  This is the thumbnail a subgroup tile shows. | [optional]
**description** | **string** | What the slot is for, as the declaring template describes it, otherwise the description stored with the image.  Rendered as the alt text. | [optional]
**dimensions** | **string** | Width x height in pixels, when the attached file is an image. | [optional]
**filename** | **string** | The attached file&#39;s name within the page&#39;s folder.  Empty when nothing is attached. | [optional]
**public_url** | **string** | Where the source file is served on the storefront.  Absent when nothing is attached. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
