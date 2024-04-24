# OrderRefundableResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional] 
**item_level_refund_reason_required** | **bool** | True if the item level refund reason is required | [optional] 
**item_level_refund_reasons** | [**\ultracart\v2\models\OrderReason[]**](OrderReason.md) | Reason codes available at the item level. | [optional] 
**item_level_return_reasons** | [**\ultracart\v2\models\OrderReason[]**](OrderReason.md) | Return codes available at the item level. | [optional] 
**manual_because_multiple_charges** | **bool** | If true, this refund will have to be manually done because of additional charges with the virtual terminal were made | [optional] 
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional] 
**order_level_refund_reason_required** | **bool** | True if the order level refund reason is required | [optional] 
**order_level_refund_reasons** | [**\ultracart\v2\models\OrderReason[]**](OrderReason.md) | Reason codes available at the order level. | [optional] 
**order_level_reject_reason_required** | **bool** | True if the order level reject reason is required | [optional] 
**order_level_reject_reasons** | [**\ultracart\v2\models\OrderReason[]**](OrderReason.md) | Reject codes available at the order level. | [optional] 
**refundable** | **bool** | Whether the order is refundable or not.  Null should be interpreted as false. | [optional] 
**success** | **bool** | Indicates if API call was successful | [optional] 
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


