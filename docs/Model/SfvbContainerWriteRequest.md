# # SfvbContainerWriteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_warnings** | **bool** | Store the container even if quality warnings were raised.  Warnings never block by default; this field exists so a caller can opt into treating them as blocking by setting it false. | [optional]
**cjson** | **string** | The container JSON to store. | [optional]
**comment** | **string** | Optional comment recorded against the version this write creates. | [optional]
**marketing_email** | **bool** | For email containers, whether this is a marketing email.  Selects whether CAN-SPAM footer rules apply. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
