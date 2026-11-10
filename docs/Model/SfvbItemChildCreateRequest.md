# # SfvbItemChildCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The new item&#39;s description.  Defaults to the parent&#39;s. | [optional]
**dry_run** | **bool** | True to check without creating. | [optional]
**merchant_item_id** | **string** | The new item&#39;s id - letters, digits, dot, underscore and dash, at most 20. | [optional]
**parent_merchant_item_id** | **string** | The parent item&#39;s id.  Send this or parent_merchant_item_oid. | [optional]
**parent_merchant_item_oid** | **int** | The parent item&#39;s oid.  Send this or parent_merchant_item_id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
