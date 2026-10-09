# # SfvbItemAttributeBatchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applied** | **bool** | True after an apply. | [optional]
**change** | **int** | Rows that would change, from a dry run. | [optional]
**error** | **int** | Rows on an item that could not be saved, after an apply. | [optional]
**invalid** | **int** | Rows refused by the attribute checks. | [optional]
**item_count** | **int** | Distinct items with at least one row that would change, or did. | [optional]
**not_found** | **int** | Rows naming an item that does not exist. | [optional]
**plan_hash** | **string** | The hash of the rows answered as change, with their current_sha256.  Apply exactly those rows with this hash. | [optional]
**rows** | [**\ultracart\v2\models\SfvbItemAttributeBatchRowResult[]**](SfvbItemAttributeBatchRowResult.md) | One result per row, in request order. | [optional]
**stale** | **int** | Rows skipped because the value is not the one expected. | [optional]
**total** | **int** | Rows checked. | [optional]
**unchanged** | **int** | Rows whose value is already the new one. | [optional]
**updated** | **int** | Rows written, after an apply. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
