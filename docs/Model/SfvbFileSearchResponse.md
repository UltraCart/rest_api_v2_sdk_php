# # SfvbFileSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\ultracart\v2\models\SfvbFileEntry[]**](SfvbFileEntry.md) | Matching files. | [optional]
**max_results** | **int** | The cap that was applied. | [optional]
**next_offset** | **int** | Offset to send for the next page.  Zero when truncated is false.  Never truncates without giving a way to continue. | [optional]
**offset** | **int** | Results skipped to produce this page. | [optional]
**result_count** | **int** | Number of results returned. | [optional]
**total_count** | **int** | Total matches found.  Available because the underlying query is unbounded and returns everything anyway; it is not evidence that fetching them all is cheap. | [optional]
**truncated** | **bool** | True when matches exist beyond this page.  next_offset is populated when it is. | [optional]
**truncation_advice** | **string** | Advice for the caller when truncated is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
