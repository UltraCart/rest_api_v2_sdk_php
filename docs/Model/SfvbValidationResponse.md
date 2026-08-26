# # SfvbValidationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Problems that will prevent a write. | [optional]
**used_elements** | **string[]** | Element types found in the document, sorted. | [optional]
**valid** | **bool** | True when there are no errors.  Warnings do not affect this flag. | [optional]
**warnings** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Quality problems that will not prevent a write but should be addressed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
