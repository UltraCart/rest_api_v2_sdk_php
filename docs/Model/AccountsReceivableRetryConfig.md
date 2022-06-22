# # AccountsReceivableRetryConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True if the retry should run daily.  False puts the retry service into an inactive state for this merchant. | [optional]
**allow_process_linked_accounts** | **bool** | True if this account has linked accounts that it can process. | [optional]
**cancel_auto_order** | **bool** | If true also cancel the auto order if the order is rejected at the end | [optional]
**current_service_plan** | **string** | The current service plan that the account is on. | [optional]
**daily_activity_list** | [**\ultracart\v2\models\AccountsReceivableRetryDayActivity[]**](AccountsReceivableRetryDayActivity.md) | A list of days and what actions should take place on those days after an order reaches accounts receivable | [optional]
**managed_by_linked_account_merchant_id** | **bool** | If not null, this account is managed by the specified parent merchant id. | [optional]
**merchant_id** | **string** | UltraCart merchant ID | [optional]
**notify_emails** | **string[]** | A list of email addresses to receive summary notifications from the retry service. | [optional]
**notify_rejections** | **bool** | If true, email addresses are notified of rejections. | [optional]
**notify_successes** | **bool** | If true, email addresses are notified of successful charges. | [optional]
**process_linked_accounts** | **bool** | If true, all linked accounts are also processed using the same rules. | [optional]
**processing_percentage** | **string** | The percentage rate charged for the service. | [optional]
**reject_at_end** | **bool** | If true, the order is rejected the day after the last configured activity day | [optional]
**trial_mode** | **bool** | True if the account is currently in trial mode.  Set to false to exit trial mode. | [optional]
**trial_mode_expiration_dts** | **string** | The date when trial mode expires.  If this date is reached without exiting trial mode, the service will de-activate. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
