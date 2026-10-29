# # SfvbSequenceStepCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**after_step_uuid** | **string** | The step the new step follows, in the same list.  Not an end, continue or merge step. | [optional]
**branch_step_uuid** | **string** | A condition, split or inboxgeek step.  With side, the new step goes first on that side. | [optional]
**preview_text** | **string** | The new email&#39;s preview text, 5 to 150 characters. | [optional]
**side** | **string** | With branch_step_uuid, the side&#39;s label from the sequence read.  yes or no for a condition, left or right for a split or inboxgeek step. | [optional]
**subject** | **string** | The new email&#39;s subject line, 5 to 150 characters. | [optional]
**type** | **string** | The kind of step.  Only email for now. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
