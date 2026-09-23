# # SfvbUpsellPathsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_results** | **int** | Page size that was applied. | [optional]
**next_offset** | **int** | Offset of the next page.  Omitted on the last page. | [optional]
**offset** | **int** | Offset this page starts at. | [optional]
**result_count** | **int** | Paths on this page. | [optional]
**total_count** | **int** | Paths matching the filters, across all pages. | [optional]
**upsell_paths** | [**\ultracart\v2\models\SfvbUpsellPath[]**](SfvbUpsellPath.md) | The paths on this page, first to last. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
