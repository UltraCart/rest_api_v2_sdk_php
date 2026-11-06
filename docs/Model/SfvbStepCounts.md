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
**source** | **string** | email (the step&#39;s email, all time), sequence (the begin step, customers who started the sequence, all time), resend (a Resend Email step, what it resent, the last 90 days), experiment (an experiment step, its variants together, the last 90 days), sms or postcard (the step&#39;s own sends, the last 90 days), step (the end step or a condition, split or InboxGeek step, the last 90 days) or not_recorded (a step type the send path keeps no counts for, such as a wait; no counts are given). | [optional]
**spam** | **int** | Spam complaints. | [optional]
**unsubscribed** | **int** | Unsubscribes from these messages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
