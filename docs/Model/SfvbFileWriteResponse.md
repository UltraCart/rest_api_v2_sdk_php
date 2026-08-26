# # SfvbFileWriteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compiled_path** | **string** | Path of the compiled output, when writing a .cjson under a theme triggered a compile. | [optional]
**file** | [**\ultracart\v2\models\SfvbFileEntry**](SfvbFileEntry.md) |  | [optional]
**hash_sha256** | **string** | New SHA-256.  Use as the next If-Match value. | [optional]
**validation** | [**\ultracart\v2\models\SfvbValidationResponse**](SfvbValidationResponse.md) |  | [optional]
**velocity_errors** | **string** | Velocity errors recorded by the store.  Present means the file was written but is not valid. | [optional]
**version** | **int** | New version number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
