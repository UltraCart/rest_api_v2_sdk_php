# # SfvbCommsEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_last_modified_dts** | **string** | When the email container was last changed (ISO 8601, UTC). | [optional]
**deleted** | **bool** | True when the email was deleted. | [optional]
**email_uuid** | **string** | The email uuid.  Use it with the email container (owner type email) and with the email render endpoint. | [optional]
**pending_review** | **bool** | True while a change waits for review. | [optional]
**preview_text** | **string** | The preview text an inbox shows after the subject. | [optional]
**rejected** | **bool** | True when review rejected the email.  Don&#39;t edit it without the merchant. | [optional]
**requires_review** | **bool** | True when a change to this email must be reviewed before it sends. | [optional]
**step_uuid** | **string** | The step that sends this email. | [optional]
**subject** | **string** | The subject line. | [optional]
**transactional** | **bool** | True for a transactional email, which skips the marketing footer rules. | [optional]
**version** | **int** | The email version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
