# # SfvbPageListResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_offset** | **int** | The offset of the next window, omitted on the last one.  Only with detail&#x3D;true. | [optional]
**pages** | [**\ultracart\v2\models\SfvbPageSummary[]**](SfvbPageSummary.md) | Pages sorted by path, the root first.  Hidden pages are included. | [optional]
**total** | **int** | How many pages the whole list has.  Only with detail&#x3D;true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
