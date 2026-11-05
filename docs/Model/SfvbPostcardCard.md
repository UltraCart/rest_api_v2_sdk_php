# # SfvbPostcardCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversion_dts** | **string** | When the customer ordered after it. | [optional]
**cost** | **float** | What the account is billed for this card. | [optional]
**customer_uuid** | **string** | The customer it was mailed to. | [optional]
**delivered_dts** | **string** | When it was delivered. | [optional]
**from** | [**\ultracart\v2\models\SfvbPostcardAddress**](SfvbPostcardAddress.md) |  | [optional]
**mailed_dts** | **string** | When it was mailed. | [optional]
**order_id** | **string** | The order it converted to. | [optional]
**print_record_uuid** | **string** | The print vendor&#39;s record for this card. | [optional]
**status** | **string** | The vendor&#39;s latest status. | [optional]
**submit_dts** | **string** | When it was sent to the printer. | [optional]
**to** | [**\ultracart\v2\models\SfvbPostcardAddress**](SfvbPostcardAddress.md) |  | [optional]
**tracking_description** | **string** | The vendor&#39;s own words for the latest status.  Only when customer data was asked for, since it can name where the card went. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
