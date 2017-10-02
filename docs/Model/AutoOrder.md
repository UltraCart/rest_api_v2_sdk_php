# AutoOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_order_code** | **string** | Unique code assigned to this auto order | [optional] 
**auto_order_oid** | **int** | Auto order object identifier | [optional] 
**cancel_after_next_x_orders** | **int** | Cancel this auto order after X additional rebills | [optional] 
**cancel_downgrade** | **bool** | True if the auto order was canceled because the customer purchased a downgrade item | [optional] 
**cancel_upgrade** | **bool** | True if the auto order was canceled because the customer purchased an upgrade item | [optional] 
**canceled_by_user** | **string** | The user that canceled the auto order | [optional] 
**canceled_dts** | **string** | The date/time that the auto order was canceled | [optional] 
**credit_card_attempt** | **int** | The number of credit card attempts that have taken place | [optional] 
**disabled_dts** | **string** | The date/time the auto order was disabled due to failed rebills | [optional] 
**enabled** | **bool** | True if this auto order is enabled | [optional] 
**failure_reason** | **string** | The reason this auto order failed during the last rebill attempt | [optional] 
**items** | [**\ultracart\v2\models\AutoOrderItem[]**](AutoOrderItem.md) | The items that are setup to rebill | [optional] 
**next_attempt** | **string** | The next time that the auto order will be attempted for processing | [optional] 
**original_order** | [**\ultracart\v2\models\Order**](Order.md) |  | [optional] 
**original_order_id** | **string** | The original order id that this auto order is associated with. | [optional] 
**override_affiliate_id** | **int** | Override the affiliate id given credit for rebills of this auto order | [optional] 
**rebill_orders** | [**\ultracart\v2\models\Order[]**](Order.md) | Rebill orders that have taken place on this auto order | [optional] 
**rotating_transaction_gateway_code** | **string** | The RTG code associated with this order for future rebills | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


