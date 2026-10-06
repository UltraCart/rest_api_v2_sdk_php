# # SfvbI18nMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edited** | **bool** | True when the English was changed from the template&#39;s text. | [optional]
**english_text** | **string** | The English text, the source every other language is translated from. | [optional]
**hash_sha256** | **string** | Send back as If-Match when setting or resetting this message. | [optional]
**imported** | **bool** | True when the message came from an older theme&#39;s locale file.  It cannot be reset. | [optional]
**key** | **string** | The message key. | [optional]
**theme_oid** | **int** | The theme the message belongs to.  Messages are kept per storefront and theme. | [optional]
**translations** | [**\ultracart\v2\models\SfvbI18nTranslation[]**](SfvbI18nTranslation.md) | Each enabled language other than English, with its text and where it comes from. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
