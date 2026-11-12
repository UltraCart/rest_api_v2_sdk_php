# # SfvbSequenceStepCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acknowledge_executable** | **bool** | With library_item_oid, true once the caller has seen that the item carries executable content (script, html, embed, css or velocity elements) and still wants it.  An item with any is refused without it. | [optional]
**after_step_uuid** | **string** | The step the new step follows, in the same list.  Not an end, continue or merge step. | [optional]
**branch_step_uuid** | **string** | A condition, split or inboxgeek step.  With side, the new step goes first on that side. | [optional]
**config_json** | **string** | A wait step&#39;s settings, as the admin saves them and set-config changes them, namely delay_duration and delay_duration_unit (minutes, hours, days, weeks or months), and optionally the delay_until_* options.  For a split, percentage_left (0.01 to 0.99, 0.5 by default) and merchant_notes.  For a condition, reverse, disabled and merchant_notes.  Not for an email step. | [optional]
**filter_profile_equation_json** | **string** | A condition step&#39;s rule, required for one, as an audience filter in the shape segments use.  Customers who match go to the yes side.  Only for a condition step. | [optional]
**library_item_oid** | **int** | An email item from the code library (#1589) to start the new email from, taking its body, with new element ids, and its subject and preview text unless subject or preview_text is given.  The item must be this account&#39;s own, shared with it, or published, approved by UltraCart and free.  Only for an email step.  The items are listed by the code library email read. | [optional]
**name** | **string** | A post_card step&#39;s name, shown in the admin, 1 to 100 characters on one line.  Postcard by default.  Only for a post_card step. | [optional]
**preview_text** | **string** | The new email&#39;s preview text, 5 to 150 characters.  Optional with library_item_oid, whose preview text is used when this is left out. | [optional]
**side** | **string** | With branch_step_uuid, the side&#39;s label from the sequence read.  yes or no for a condition, left or right for a split or inboxgeek step. | [optional]
**subject** | **string** | The new email&#39;s subject line, 5 to 150 characters.  Optional with library_item_oid, whose subject is used when this is left out. | [optional]
**type** | **string** | The kind of step, one of email (the default), wait, post_card, split or condition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
