# # SfvbApprovalParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blog_post_oid** | **int** | The blog post, for blog_post.delete. | [optional]
**content_sha256** | **string** | For file.put_script, the SHA-256 of the exact bytes approved.  Set by the server, never by the caller.  The write must send bytes with this hash. | [optional]
**path** | **string** | The file path, for file.delete and file.put_script.  Exactly as the gated call will send it. | [optional]
**rows_sha256** | **string** | For redirect.delete_batch, the plan_hash of the exact rows approved.  Set by the server.  The batch delete must send rows with this hash. | [optional]
**rule_count** | **int** | For redirect.delete_batch, how many rules the batch would delete when it was requested.  Set by the server. | [optional]
**version** | **int** | For file.put_script, the history version a revert restores.  Leave it out, and send content instead, for a write. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
