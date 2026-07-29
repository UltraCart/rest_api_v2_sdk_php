# # AutoOrderRebillResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_order** | [**\ultracart\v2\models\AutoOrder**](AutoOrder.md) |  | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**failure_reason** | **string** | Why the rebill attempt did not succeed | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**rebill_attempted** | **bool** | True if a rebill was attempted during this call | [optional]
**rebill_order_id** | **string** | The order id created by a successful rebill | [optional]
**rebill_success** | **bool** | True if the rebill attempt produced an order | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
