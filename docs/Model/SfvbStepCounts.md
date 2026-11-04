# # SfvbStepCounts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clicked** | **int** | Messages with a click. | [optional]
**customers** | **int** | For a step that isn&#39;t an email, the customers that passed through it. | [optional]
**delivered** | **int** | Messages delivered. | [optional]
**opened** | **int** | Emails opened. | [optional]
**sent** | **int** | Messages sent. | [optional]
**skipped** | **int** | Customers who reached the step and were not sent anything.  The dispatch log says why. | [optional]
**source** | **string** | email (the step&#39;s email, all time) or step (this step, the last 90 days). | [optional]
**spam** | **int** | Spam complaints. | [optional]
**unsubscribed** | **int** | Unsubscribes from these messages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
