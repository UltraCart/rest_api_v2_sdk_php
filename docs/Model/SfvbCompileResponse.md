# # SfvbCompileResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_id** | **string** | Container id the document compiled under. | [optional]
**directives** | **string[]** | Velocity directives the compiled output declares. | [optional]
**success** | **bool** | True when compilation produced output. | [optional]
**used_elements** | **string[]** | Element types used, sorted. | [optional]
**validation** | [**\ultracart\v2\models\SfvbValidationResponse**](SfvbValidationResponse.md) |  | [optional]
**velocity** | **string** | The compiled Velocity.  This is the body only; the cache wrapper a stored .cjson gets is not included. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
