# # SfvbItemContainersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_containers** | [**\ultracart\v2\models\SfvbItemContainer[]**](SfvbItemContainer.md) | The containers on this page, ordered by merchant item id then container name. | [optional]
**max_results** | **int** | The cap that was applied. | [optional]
**next_offset** | **int** | Offset to send for the next page.  Zero when truncated is false.  Never truncates without giving a way to continue. | [optional]
**offset** | **int** | Containers skipped to produce this page. | [optional]
**result_count** | **int** | Number of containers returned on this page. | [optional]
**total_count** | **int** | Total containers matching the filter.  With container_name supplied this is the answer to how many items carry that slot. | [optional]
**truncated** | **bool** | True when containers exist beyond this page.  next_offset is populated when it is. | [optional]
**truncation_advice** | **string** | Advice for the caller when truncated is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
