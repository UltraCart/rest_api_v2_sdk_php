# # SfvbItemMultimediaDescriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The image code, the value an itemimage element&#39;s itemImageCode names. | [optional]
**current_sha256** | **string** | The description_sha256 you read.  When it is sent and the description has changed since, nothing is written and the call fails with a version conflict. | [optional]
**default** | **bool** | The item&#39;s default image, which an itemimage element with no code renders. | [optional]
**description** | **string** | The new description, rendered as the image&#39;s alt text.  An empty string clears it, so the image falls back to the machine description or the element&#39;s own fallback.  Longer text is cut to 500 characters. | [optional]
**merchant_item_multimedia_oid** | **int** | The stored image&#39;s id, as an item read reports it.  Name this, or one of code or default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
