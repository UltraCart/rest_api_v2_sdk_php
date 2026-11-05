# # SfvbCommsTestSendResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**body** | **string** | For an SMS, the message as sent. | [optional]
**channel** | **string** | email, sms or postcard. | [optional]
**cost** | **float** | For a postcard, what this card costs the account. | [optional]
**dry_run** | **bool** | True when nothing was sent. | [optional]
**notes** | **string[]** | What else happened, such as records created by the test. | [optional]
**recipient** | **string** | Who it went to, as a user on this account (their login), or the postcard&#39;s city and state. | [optional]
**sent** | **bool** | True when it was sent or mailed.  False on a dry run or when it was skipped. | [optional]
**skipped_reason** | **string** | Why it wasn&#39;t sent or mailed, when it wasn&#39;t. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
