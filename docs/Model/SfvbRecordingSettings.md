# # SfvbRecordingSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_per_thousand** | **float** | What 1,000 recorded sessions cost after the trial, in US dollars. | [optional]
**enabled** | **bool** | True when real shoppers&#39; sessions on this storefront are being recorded. | [optional]
**retention_interval** | **string** | How long recordings are kept, such as 1 year. | [optional]
**sessions_current_billing_period** | **int** | Sessions recorded so far in the current billing period. | [optional]
**sessions_last_billing_period** | **int** | Sessions recorded in the previous billing period. | [optional]
**sessions_trial_billing_period** | **int** | Sessions recorded during the free trial. | [optional]
**trial_expiration** | **string** | When the free trial ends, as an ISO-8601 time.  Absent until the trial has started. | [optional]
**trial_expired** | **bool** | True when the free trial is over and recorded sessions are billed. | [optional]
**trial_started** | **bool** | True once recording has been turned on at least once, which starts a 14 day free trial. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
