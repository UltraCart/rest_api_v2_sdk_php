# # EmailCommseqEnrollmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**already_enrolled** | **bool** | True if the customer was already enrolled and therefore not enrolled again | [optional]
**enrolled** | **bool** | True if the customer was newly enrolled into the sequence | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**esp_customer_uuid** | **string** | The resolved ESP customer UUID for the enrolled email | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
