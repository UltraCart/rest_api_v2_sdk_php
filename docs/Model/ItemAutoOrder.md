# ItemAutoOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_future_amount** | **float** | Amount to try and authorize for the future rebill | [optional] 
**auth_test_amount** | **float** | Amount to try and test authorize | [optional] 
**auto_order_cancel_charge_minimum_balance** | **bool** | If true, the cost of the cancel item will be the remaining balance of the minimum rebill or lifetime value | [optional] 
**auto_order_cancel_item_id** | **string** | Item id to attempt charging the customer for if they cancel | [optional] 
**auto_order_cancel_item_oid** | **int** | Item object identifier to attempt charging the customer for if they cancel | [optional] 
**auto_order_cancel_minimum_life_time_value** | **float** | The minimum life time value that must be paid in order to not be charged the cancellation item. | [optional] 
**auto_order_cancel_minimum_rebill_value** | **float** | The minimum rebill value that must be paid in order to not be charged the cancellation item. | [optional] 
**auto_order_downgrade_items** | **string[]** | List of downgrade items presented to customer service representatives | [optional] 
**auto_order_paused** | **bool** | True if the rebill processing of this item is paused | [optional] 
**auto_order_prohibit_expiring_cards** | **int** | Minimum number of months before expiration for the card.  Overrides the account level setting if higher.  Set to zero to disable. | [optional] 
**auto_order_schedules** | **string[]** | The user selectable schedules that are available | [optional] 
**auto_order_upgrade_items** | **string[]** | List of upgrade items presented to customer service representatives | [optional] 
**auto_order_upsell** | **bool** | True if this item uses a fixed upsell step schedule | [optional] 
**auto_order_upsell_no_easy_cancel** | **bool** | Do not send the easy cancel email to the customer | [optional] 
**auto_order_upsell_one_per_customer** | **bool** | Limit the purchase of this item to one per customer | [optional] 
**auto_orderable** | **bool** | True if this item can be automatically ordered by the customer | [optional] 
**cancel_other_auto_orders** | **bool** | True if other auto orders for this customer should be canceled when this item is ordered | [optional] 
**free_shipping_auto_order** | **bool** | True if the customer should be given free shipping | [optional] 
**refund_other_auto_orders** | **bool** | True if other auto orders for this customer should refunded if this item is refunded. | [optional] 
**steps** | [**\ultracart\v2\models\ItemAutoOrderStep[]**](ItemAutoOrderStep.md) | The rebill steps if this auto order is an upsell | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


