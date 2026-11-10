# # SfvbItemDefaultPageResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**already_default** | **int** | Rows whose page is already the default. | [optional]
**dry_run** | **bool** | True when nothing was saved. | [optional]
**failed** | **int** | Rows whose change didn&#39;t save (apply). | [optional]
**item_count** | **int** | Distinct items in the request. | [optional]
**ready** | **int** | Rows that would change (dry run). | [optional]
**refused** | **int** | Rows refused - not found, not assigned, hidden, another storefront or invalid. | [optional]
**rows** | [**\ultracart\v2\models\SfvbItemDefaultPageResult[]**](SfvbItemDefaultPageResult.md) | Every row, in request order. | [optional]
**rows_sha256** | **string** | Hash of the ready rows.  Request item.default_page with exactly those rows, then apply them with this. | [optional]
**stale** | **int** | Rows that changed since they were read. | [optional]
**updated** | **int** | Rows changed (apply). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
