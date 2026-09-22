# # SfvbItemMultimediaRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Attach under this image code, the value an itemimage element&#39;s itemImageCode names. | [optional]
**default** | **bool** | Attach as the item&#39;s default image, which is what an itemimage element with no code renders.  Name exactly one of this or code. | [optional]
**description** | **string** | Stored with the image and rendered as its alt text.  Left out, the slot keeps the description it already had. | [optional]
**path** | **string** | Storefront file system path of the image to attach, such as /assets/img/mug-front.jpg.  Upload it with files/upload first.  Unlike a page image this does not have to sit in any particular folder, because an item has no folder of its own - the bytes are copied into the item&#39;s own storage on attach. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
