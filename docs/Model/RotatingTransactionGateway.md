# RotatingTransactionGateway

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_native_currency_codes** | [**\ultracart\v2\models\RtgCurrency[]**](RtgCurrency.md) | An array of all currencies known to the UltraCart system and a boolean indicating whether this gateway supports that currency. | [optional] 
**auto_order_cancel_unless_response_name** | **string** | Advanced feature for canceling an auto order unless the transaction gateway response contains a field with this name.  If specified, this field must exist and the value must equal a value in the auto_order_cancel_unless_response_values array | [optional] 
**auto_order_cancel_unless_response_values** | **string[]** | Advanced feature for canceling an auto order unless the transaction gateway response contains a field with the name specified in auto_order_cancel_unless_response_name.  If specified, this field must exist and the value must equal a value in this array.  If nothing matches, the auto order is canceled. | [optional] 
**base_currency_code** | **string** | The base currency code for your gateway.  For example, USD. | [optional] 
**cascade_code** | **string** | Optional field specifying a different rotating gateway to use if this gateway fails to process the transaction. | [optional] 
**cascade_codes** | **string[]** | A list of other rotating transaction gateways that can be used as a lookup to assign actions based on failures of this gateway | [optional] 
**cascade_daily_auto_order_code** | **string** | The code for the next rotating gateway that should be used when this gateway reaches a daily limit | [optional] 
**charge_appears_on_statement_as** | **string** | Optional field providing an alternate Charge Appears As value for this rotating gateway | [optional] 
**code** | **string** | A human friendly short code used to recognize and differentiate this rotating gateway with other rotating gateways | [optional] 
**current_daily** | **float** | The current daily dollar amount this gateway has processed.  Providing this will allow UltraCart to track the monthly amount going forward. | [optional] 
**current_daily_auto_order** | **float** | The current daily dollar amount of auto orders (recurring) this gateway has processed.  Providing this will allow UltraCart to track the monthly amount going forward. | [optional] 
**current_monthly** | **float** | The current monthly dollar amount this gateway has processed.  Providing this will allow UltraCart to track the monthly amount going forward. | [optional] 
**customer_service_email** | **string** | The customer service email address for this gateway | [optional] 
**customer_service_phone** | **string** | The customer service phone number for this gateway | [optional] 
**day_of_month_restrictions** | [**\ultracart\v2\models\RtgDayOfMonthRestriction[]**](RtgDayOfMonthRestriction.md) | Array containing all 31 (possible) days and any optional restrictions for one or more days. | [optional] 
**day_of_week_restrictions** | [**\ultracart\v2\models\RtgDayOfWeekRestriction[]**](RtgDayOfWeekRestriction.md) | Array containing all seven days of the week and any optional restrictions for one or more days | [optional] 
**deactivate_after_failures** | **int** | If non-zero, this gateway will be deactivated after reaching this amount of consecutive failures. | [optional] 
**end_date** | **string** | Optional field to specify an absolute date when this gateway should stop accepting transactions | [optional] 
**gateways** | [**\ultracart\v2\models\TransactionGateway[]**](TransactionGateway.md) | An array of all transaction gateways, not just the one currently configured for this rotating gateway. This allows for easy switching to another gateway.  The enabled property on the transaction gateway indicates which one is actually being used. | [optional] 
**maximum_daily** | **float** | The maximum daily dollar amount this gateway may process | [optional] 
**maximum_daily_auto_order** | **float** | The maximum daily dollar amount of auto orders (recurring) this gateway may process | [optional] 
**maximum_monthly** | **float** | The maximum monthly dollar amount this gateway may process. | [optional] 
**next_daily_auto_order_reset** | **string** | The date and time when this gateway daily limit for auto orders will reset | [optional] 
**next_daily_reset** | **string** | The date and time when this gateway daily limit will reset | [optional] 
**next_monthly_reset** | **string** | The date and time when this gateway monthly limit will reset | [optional] 
**order_total** | **float** | This optional field is combined with order_total_comparison to determine if an order should be processed thorugh this gateway. | [optional] 
**order_total_comparison** | **string** | The math operator used to determine if the order total is allowed to process through this gateway. | [optional] 
**rebill_auto_orders_against_this_rtg_code** | **string** | If specified auto orders (rebills) are routed to this rotating gateway.  This may be needed because rebills lack a credit card cvv. | [optional] 
**reserve_days** | **int** | The number of days that your gateway holds any reserves.  This aids in profitability reporting. | [optional] 
**reserve_percentage** | **float** | The percentage of an order which your gateway is holding in reserve.  This aids in profitability reporting. | [optional] 
**reserve_refunded** | **bool** | If true, reserves are refunded when an order is refunded.  This aids in profitability reporting. | [optional] 
**reserves_released_through** | **string** | An optional date specifying the date up to which your gateway has released all reserve funds.  This aids in profitability reporting. | [optional] 
**rotating_transaction_gateway_oid** | **int** | Internal identifier used to store and retrieve this gateway information | [optional] 
**selected_gateway_name** | **string** | The name of the currently selected transaction gateway used by this rotating gateway | [optional] 
**show_cascade_codes** | **bool** | A boolean used by the builtin UltraCart UI to determine if cascading rtg codes should be shown | [optional] 
**show_merchant_account_profiles** | **bool** | A flag to help the UltraCart UI to know whether to show merchant account profiles or not. | [optional] 
**start_date** | **string** | Optional field to specify an absolute date when this gateway should begin accepting transactions | [optional] 
**status** | **string** | A field used to take a gateway offline without removing/deleting the configuration. Inactive marks the gateway as completely unusable.  Standby takes the gateway offline and will not be used unless all other active gateways fail. | [optional] 
**theme_restrictions** | [**\ultracart\v2\models\RtgThemeRestriction[]**](RtgThemeRestriction.md) | Optional restrictions by theme/storefront | [optional] 
**traffic_percentage** | **float** | Required field between 0 and 1 that dictates the percentage of traffic that should flow through this gateway | [optional] 
**trial_daily_amount** | **int** | If specified, limits the total daily count of trial orders | [optional] 
**trial_daily_limit** | **int** | If specified, limits the total daily dollar amount of trial orders | [optional] 
**trial_monthly_amount** | **int** | If specified, limits the total month dollar amount of trial orders | [optional] 
**trial_monthly_limit** | **int** | If specified, limits the total month count of trial orders | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

