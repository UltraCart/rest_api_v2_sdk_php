# # SfvbSequenceStep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branches** | [**\ultracart\v2\models\SfvbSequenceBranch[]**](SfvbSequenceBranch.md) | Its two sides, for a condition, split or InboxGeek step.  Absent for every other type. | [optional]
**config_error** | **bool** | True when the step&#39;s settings could not be read. | [optional]
**config_json** | **string** | The step&#39;s settings as the admin stores them.  A webhook&#39;s header and parameter values are masked. | [optional]
**config_merchant_notes** | **string** | A note stored inside the step&#39;s settings, when there is one. | [optional]
**disabled** | **bool** | True when the step is switched off in its settings. | [optional]
**email_uuids** | **string[]** | The emails it sends.  One for an email step, one per variant for an experiment. | [optional]
**filter_profile_equation_json** | **string** | The step&#39;s audience filter as stored, when it has one. | [optional]
**hash_sha256** | **string** | The hash of the step&#39;s type, stored settings and audience filter.  Send it back as If-Match when changing the step. | [optional]
**item_ids** | **string[]** | The items it names, for a cart or rate limiter step. | [optional]
**label** | **string** | The type as the admin names it, such as Time Delay.  The type itself for one it doesn&#39;t know. | [optional]
**list_uuids** | **string[]** | The lists it subscribes or unsubscribes, for a list step. | [optional]
**merchant_notes** | **string** | The note stored on the step. | [optional]
**name** | **string** | The step&#39;s own display name from its settings, when it has one. | [optional]
**number_waiting** | **int** | How many customers are waiting on this step now.  Only when waiting counts were asked for. | [optional]
**postcard_uuid** | **string** | The postcard it sends, for a postcard step. | [optional]
**step_uuid** | **string** | The step uuid. | [optional]
**type** | **string** | The step type, such as email, wait, condition or webhook. | [optional]
**unreachable** | **bool** | True for a step no branch leads to.  Listed at the end so nothing is hidden. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
