# # BulkRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | On an upsert success, whether the record was inserted or updated | [optional]
**error_code** | **string** | Error code on a failed record | [optional]
**error_message** | **string** | Human-readable detail on a failed record | [optional]
**line_number** | **int** | Original NDJSON line number | [optional]
**merchant_record_id** | **string** | The merchant-supplied dedupe key for this record | [optional]
**status** | **string** | Per-record verdict | [optional]
**uc_id** | **string** | UltraCart-side id created on success or matched on duplicate | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
