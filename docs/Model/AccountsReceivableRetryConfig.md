# AccountsReceivableRetryConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True if the retry should run daily.  False puts the retry service into an inactive state for this merchant. | [optional] 
**merchant_id** | **string** | UltraCart merchant ID | [optional] 
**notify_rejections** | **bool** | If true, email addresses are notified of rejections. | [optional] 
**notify_successes** | **bool** | If true, email addresses are notified of successful charges. | [optional] 
**process_linked_accounts** | **bool** | If true, all linked accounts are also processed using the same rules. | [optional] 
**reject_at_end** | **bool** | If true, the order is rejected the day after the last configured activity day | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


