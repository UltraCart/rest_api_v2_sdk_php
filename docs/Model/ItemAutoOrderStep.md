# ItemAutoOrderStep

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arbitrary_schedule_days** | **int** | If the schedule is arbitrary, then this is the number of days | [optional] 
**arbitrary_unit_cost** | **float** | Arbitrary unit cost used to override the regular item cost | [optional] 
**arbitrary_unit_cost_schedules** | [**\ultracart\v2\models\ItemAutoOrderStepArbitraryUnitCostSchedule[]**](ItemAutoOrderStepArbitraryUnitCostSchedule.md) | Arbitrary unit costs schedules for more advanced discounting by rebill attempt | [optional] 
**grandfather_pricing** | [**\ultracart\v2\models\ItemAutoOrderStepGrandfatherPricing[]**](ItemAutoOrderStepGrandfatherPricing.md) | Grand-father pricing configuration if the rebill schedule has changed over time | [optional] 
**managed_by** | **string** | Managed by (defaults to UltraCart) | [optional] 
**pause_days** | **int** | Number of days to pause | [optional] 
**pause_until_date** | **string** | Wait for this step to happen until the specified date | [optional] 
**preshipment_notice_days** | **int** | If set, a pre-shipment notice is sent to the customer this many days in advance | [optional] 
**recurring_merchant_item_id** | **string** | Item id to rebill | [optional] 
**recurring_merchant_item_oid** | **int** | Item object identifier to rebill | [optional] 
**repeat_count** | **int** | Number of times to rebill.  Last step can be null for infinite | [optional] 
**schedule** | **string** | Frequency of the rebill | [optional] 
**subscribe_email_list_name** | **string** | Email list name to subscribe the customer to when the rebill occurs | [optional] 
**subscribe_email_list_oid** | **int** | Email list identifier to subscribe the customer to when this rebill occurs | [optional] 
**type** | **string** | Type of step (item, kit only, loop or pause) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


