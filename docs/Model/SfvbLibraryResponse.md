# # SfvbLibraryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**facets** | [**\ultracart\v2\models\SfvbLibraryFacet[]**](SfvbLibraryFacet.md) | Available narrowing dimensions.  Send a chosen option back as facet_{name}&#x3D;{option}. | [optional]
**first_result_number** | **int** | 1-indexed position of the first result on this page. | [optional]
**last_result_number** | **int** | 1-indexed position of the last result on this page. | [optional]
**results** | [**\ultracart\v2\models\SfvbLibraryEntry[]**](SfvbLibraryEntry.md) | Matching library entries, without their CJSON.  Fetch a single entry to get the fragment itself. | [optional]
**total_pages** | **int** | Total pages available. | [optional]
**total_results** | **int** | Total matches across all pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
