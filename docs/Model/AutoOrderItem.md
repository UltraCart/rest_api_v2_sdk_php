# AutoOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arbitrary_item_id** | **string** | Arbitrary item id that should be rebilled instead of the normal schedule | [optional] 
**arbitrary_percentage_discount** | **float** | An arbitrary percentage discount to provide on future rebills | [optional] 
**arbitrary_quantity** | **float** | Arbitrary quantity to rebill | [optional] 
**arbitrary_schedule_days** | **int** | The number of days to rebill if the frequency is set to an arbitrary number of days | [optional] 
**arbitrary_unit_cost** | **float** | Arbitrary unit cost that rebills of this item should occur at | [optional] 
**arbitrary_unit_cost_remaining_orders** | **int** | The number of rebills to give the arbitrary unit cost on before reverting to normal pricing. | [optional] 
**auto_order_item_oid** | **int** | Primary key of AutoOrderItem | [optional] 
**frequency** | **string** | Frequency of the rebill if not a fixed schedule | [optional] 
**future_schedules** | [**\ultracartv2\models\AutoOrderItemFutureSchedule[]**](AutoOrderItemFutureSchedule.md) | The future rebill schedule for this item up to the next ten rebills | [optional] 
**last_order_dts** | **string** | Date/time of the last order of this item | [optional] 
**life_time_value** | **float** | The life time value of this item including the original purchase | [optional] 
**next_preshipment_notice_dts** | **string** | The date/time of when the next pre-shipment notice should be sent | [optional] 
**next_shipment_dts** | **string** | Date/time that this item is scheduled to rebill | [optional] 
**no_order_after_dts** | **string** | Date/time after which no additional rebills of this item should occur | [optional] 
**number_of_rebills** | **int** | The number of times this item has rebilled | [optional] 
**options** | [**\ultracartv2\models\AutoOrderItemOption[]**](AutoOrderItemOption.md) | Options associated with this item | [optional] 
**original_item_id** | **string** | The original item id purchased.  This item controls scheduling.  If you wish to modify a schedule, for example, from monthly to yearly, change this item from your monthly item to your yearly item, and then change the next_shipment_dts to your desired date. | [optional] 
**original_quantity** | **float** | The original quantity purchased | [optional] 
**paypal_payer_id** | **string** | The PayPal Payer ID tied to this item | [optional] 
**paypal_recurring_payment_profile_id** | **string** | The PayPal Profile ID tied to this item | [optional] 
**preshipment_notice_sent** | **bool** | True if the preshipment notice associated with the next rebill has been sent | [optional] 
**rebill_value** | **float** | The value of the rebills of this item | [optional] 
**remaining_repeat_count** | **int** | The number of rebills remaining before this item is complete | [optional] 
**simple_schedule** | [**\ultracartv2\models\AutoOrderItemSimpleSchedule**](AutoOrderItemSimpleSchedule.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


