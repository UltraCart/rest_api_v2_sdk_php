# # SfvbEmailRenderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**draft** | **bool** | True when an unsaved draft was rendered. | [optional]
**html** | **string** | The HTML body. | [optional]
**order_id** | **string** | The order the email rendered with, when it used one. | [optional]
**order_source** | **string** | Where that order came from.  test (the order given), dummy (made up) or none. | [optional]
**preview_text** | **string** | The preview text an inbox shows after the subject, when the email has one. | [optional]
**subject** | **string** | The subject line. | [optional]
**text** | **string** | The plain text body. | [optional]
**validation** | [**\ultracart\v2\models\SfvbValidationResponse**](SfvbValidationResponse.md) |  | [optional]
**warnings** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Problems a real send would hit, such as a missing required footer token, and placeholders used in place of values a send creates. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
