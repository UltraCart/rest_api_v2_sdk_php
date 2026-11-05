# # SfvbCommsStat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bounced** | **int** | Permanent bounces. | [optional]
**channel** | **string** | email, sms, postcard, branch or sequence. | [optional]
**clicked** | **int** | Clicks (for a postcard, scans of its QR code). | [optional]
**conversions** | **int** | Conversions. | [optional]
**customers** | **int** | Customers who reached it (a branch side), or started (a whole sequence). | [optional]
**delivered** | **int** | Deliveries. | [optional]
**finished** | **int** | Customers who finished the sequence. | [optional]
**in_progress** | **int** | Customers in the sequence now. | [optional]
**invalid** | **int** | Addresses the email validator refused. | [optional]
**not_measured** | **string[]** | The counts this channel doesn&#39;t record, left out above. | [optional]
**opened** | **int** | Opens. | [optional]
**orders** | **int** | Orders attributed. | [optional]
**profit** | **float** | Profit attributed. | [optional]
**returned_to_sender** | **int** | Postcards returned to sender. | [optional]
**revenue** | **float** | Revenue attributed. | [optional]
**sent** | **int** | Sends. | [optional]
**skipped** | **int** | Customers skipped. | [optional]
**spam** | **int** | Spam complaints. | [optional]
**unsubscribed** | **int** | Unsubscribes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
