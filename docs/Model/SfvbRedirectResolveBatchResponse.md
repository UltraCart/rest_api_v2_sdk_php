# # SfvbRedirectResolveBatchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**not_found** | **int** | How many paths end on a 404 (lands_on not_found), the ones to redirect or create. | [optional]
**redirected** | **int** | How many paths at least one rule redirects. | [optional]
**results** | [**\ultracart\v2\models\SfvbRedirectResolveResponse[]**](SfvbRedirectResolveResponse.md) | One result per path, in the order sent, the same as the single resolve&#39;s answer. | [optional]
**total** | **int** | How many paths were resolved. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
