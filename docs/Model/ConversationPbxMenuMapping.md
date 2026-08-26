# # ConversationPbxMenuMapping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Action | [optional]
**action_target** | **string** | Action target.  This is the UUID associated with the configuration object of that particular type. | [optional]
**digits** | **int** | Digits | [optional]
**sms_from_number** | **string** | Optional phone number to send the text message from.  Must be a phone number configured on this merchant account and SMS enabled.  Defaults to the number the caller dialed.  Only used when the action is &#39;send text&#39;. | [optional]
**speech** | **string** | Speech | [optional]
**text_message** | **string** | Text message body sent to the caller when the action is &#39;send text&#39;.  Ignored for all other actions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
