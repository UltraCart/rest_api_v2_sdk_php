# # SfvbApprovalParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute_names** | **string[]** | For item.attribute_batch, the attributes the batch would change.  Set by the server. | [optional]
**blog_post_oid** | **int** | The blog post, for blog_post.delete. | [optional]
**content_sha256** | **string** | For file.put_script, the SHA-256 of the exact bytes approved.  Set by the server, never by the caller.  The write must send bytes with this hash. | [optional]
**experiment_oid** | **int** | For experiment.end, the experiment to end. | [optional]
**item_count** | **int** | For item.attribute_batch, how many items the batch would change when it was requested.  Set by the server. | [optional]
**merchant_item_oid** | **int** | For item.pricing, the item whose pricing changes. | [optional]
**path** | **string** | The file path, for file.delete and file.put_script, or the page path for experiment.start of a page experiment.  Exactly as the gated call will send it. | [optional]
**request_sha256** | **string** | For experiment.start of a url experiment, the hash of the checked experiment approved, and for item.pricing the hash of the change.  Set by the server.  The gated call must send the same. | [optional]
**rows_sha256** | **string** | For redirect.delete_batch and item.attribute_batch, the plan_hash of the exact rows approved.  Set by the server.  The batch must send rows with this hash. | [optional]
**rule_count** | **int** | For redirect.delete_batch, how many rules the batch would delete when it was requested.  Set by the server. | [optional]
**slot** | **string** | For experiment.start of a page experiment, the page body name.  Defaults to body. | [optional]
**upsell_kind** | **string** | For upsell.enable, what to switch on. | [optional]
**upsell_oid** | **int** | For upsell.enable, the oid of the offer or path to switch on. | [optional]
**version** | **int** | For file.put_script, the history version a revert restores.  Leave it out, and send content instead, for a write. | [optional]
**widget_id** | **string** | For experiment.start of a page experiment, the id of the experiment element. | [optional]
**winner_variation_number** | **int** | For experiment.end, the winning variation.  Leave it out to end without a winner, and leave it out of the end call too. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
