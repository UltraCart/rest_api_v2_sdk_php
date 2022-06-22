# # ResultSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Number of results in this set | [optional]
**limit** | **int** | Maximum number of results that can be returned in a set | [optional]
**more** | **bool** | True if there are more results to query | [optional]
**next_offset** | **int** | The next offset that you should query to retrieve more results | [optional]
**offset** | **int** | Offset of this result set (zero based) | [optional]
**total_records** | **int** | The total number of records in the result set.  May be null if the number is not known and the client should continue iterating as long as more is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
