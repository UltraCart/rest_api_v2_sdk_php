# # SfvbItemAttributeBatchRowResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_present** | **bool** | Whether the item had the attribute before this batch. | [optional]
**current_sha256** | **string** | The hash of the value before this batch.  Send it back with the row to apply. | [optional]
**current_value** | **string** | The value before this batch, for a backup.  Empty when the item has no such attribute. | [optional]
**merchant_item_id** | **string** | The item&#39;s merchant item id.  Absent when not_found. | [optional]
**merchant_item_oid** | **int** | The item.  Absent when not_found. | [optional]
**message** | **string** | Why a row is invalid, stale or error. | [optional]
**name** | **string** | The attribute name as sent. | [optional]
**result** | **string** | change or unchanged from a dry run, updated after an apply, stale (the value differs from expected_value or changed since the dry run), not_found, invalid, or error when the item could not be saved. | [optional]
**row** | **int** | The row&#39;s position in the request, from 1. | [optional]
**type** | **string** | The type the value is checked and stored as - the declaring template&#39;s, else the one sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
