# # SfvbRedirectCheckResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Findings that block the rule. | [optional]
**source** | **string** | The source as it matches, lower case without a trailing index.html. | [optional]
**type** | **string** | exact or pattern. | [optional]
**valid** | **bool** | True when nothing blocks the rule. | [optional]
**warnings** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Findings that do not block it.  A chain carries the final target as its suggestion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
