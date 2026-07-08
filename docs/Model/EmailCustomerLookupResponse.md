# # EmailCustomerLookupResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email that was looked up | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**esp_customer_uuid** | **string** | ESP customer UUID, or null when the email is not on file | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
