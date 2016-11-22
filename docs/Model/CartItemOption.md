# CartItemOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_if_specified** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional] 
**cost_per_letter** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional] 
**cost_per_line** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional] 
**ignore_if_default** | **bool** | True if the default answer is ignored | [optional] 
**label** | **string** | Display label for the option | [optional] 
**name** | **string** | Name of the option | [optional] 
**one_time_fee** | **bool** | Charge the fee a single time instead of multiplying by the quantity | [optional] 
**option_oid** | **int** | Unique identifier for the option | [optional] 
**required** | **bool** | True if the customer is required to select a value | [optional] 
**selected_value** | **string** | The value of the option specified by the customer | [optional] 
**type** | **string** | Type of option | [optional] 
**values** | [**\ultracart\v2\models\CartItemOptionValue[]**](CartItemOptionValue.md) | Values that the customer can select from for radio or select type options | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


