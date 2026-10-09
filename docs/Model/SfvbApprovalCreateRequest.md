# # SfvbApprovalCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The gated action to approve. | [optional]
**content** | **string** | For a file.put_script write, the exact script to be written, at most 256 KB.  UltraCart reviews it and keeps only its hash, so send the same bytes again on the write.  Leave it out for a revert, which names params.version. | [optional]
**experiment_start** | [**\ultracart\v2\models\SfvbExperimentStartRequest**](SfvbExperimentStartRequest.md) |  | [optional]
**item_attribute_rows** | [**\ultracart\v2\models\SfvbItemAttributeBatchRow[]**](SfvbItemAttributeBatchRow.md) | For item.attribute_batch, exactly the rows the batch will send - the dry run&#39;s change rows, each with merchant_item_oid and current_sha256.  UltraCart keeps only their hash. | [optional]
**item_pricing** | [**\ultracart\v2\models\SfvbItemPricingRequest**](SfvbItemPricingRequest.md) |  | [optional]
**params** | [**\ultracart\v2\models\SfvbApprovalParams**](SfvbApprovalParams.md) |  | [optional]
**reason** | **string** | Why the agent wants to do this, in a sentence.  Shown to the person as unverified text, capped at 500 characters. | [optional]
**redirect_rows** | [**\ultracart\v2\models\SfvbRedirectDeleteRow[]**](SfvbRedirectDeleteRow.md) | For redirect.delete_batch, exactly the rows the batch delete will send, up to 5,000, each with its hash_sha256.  UltraCart keeps only their hash. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
