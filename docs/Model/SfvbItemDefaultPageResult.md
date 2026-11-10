# # SfvbItemDefaultPageResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_default_oid** | **int** | The default page&#39;s oid now, or null. | [optional]
**current_default_path** | **string** | The default page now, or null. | [optional]
**current_sha256** | **string** | Hash of the item&#39;s pages and default on this storefront.  Send it back on the apply. | [optional]
**index** | **int** | The row&#39;s position in the request, from 0. | [optional]
**merchant_item_id** | **string** | The item&#39;s id, when found. | [optional]
**merchant_item_oid** | **int** | The item&#39;s oid, when found. | [optional]
**message** | **string** | Why the row is refused, stale or failed. | [optional]
**previous_default_oid** | **int** | Apply only - the previous default page&#39;s oid. | [optional]
**previous_default_path** | **string** | Apply only - the default page before the change, to undo it. | [optional]
**status** | **string** | ready, already_default, target_not_found, target_not_on_host, target_not_assigned, target_hidden, item_not_found, invalid, stale, updated or failed. | [optional]
**target_oid** | **int** | The page&#39;s oid. | [optional]
**target_path** | **string** | The page the row makes the default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
