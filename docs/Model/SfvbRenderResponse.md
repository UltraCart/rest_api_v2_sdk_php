# # SfvbRenderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Why the render failed.  Always populated when success is false. | [optional]
**html** | **string** | Rendered HTML. | [optional]
**pending_translation_count** | **int** | Number of strings still awaiting translation in the requested language. | [optional]
**success** | **bool** | True when HTML was produced. | [optional]
**truncated** | **bool** | True when the HTML was cut short. | [optional]
**warnings** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Quality warnings about the rendered node. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
