# # SfvbSequenceStepCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_uuid** | **string** | The new email&#39;s uuid.  Its body is the email container with this owner id. | [optional]
**notes** | **string[]** | What to do next, such as writing the body, and customers already waiting on the step before it. | [optional]
**requires_review** | **bool** | True when the new email must pass content review before it sends. | [optional]
**step** | [**\ultracart\v2\models\SfvbSequenceStep**](SfvbSequenceStep.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
