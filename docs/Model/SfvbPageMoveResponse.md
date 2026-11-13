# # SfvbPageMoveResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | True when nothing was moved. | [optional]
**new_path** | **string** | The page&#39;s path after the move. | [optional]
**page** | [**\ultracart\v2\models\SfvbPageResponse**](SfvbPageResponse.md) |  | [optional]
**pages_moved** | **int** | How many pages moved, the page itself included. | [optional]
**path** | **string** | The page&#39;s path before the move. | [optional]
**redirect** | [**\ultracart\v2\models\SfvbRedirect**](SfvbRedirect.md) |  | [optional]
**redirect_source** | **string** | The pattern the old addresses redirect from, when a redirect was asked for. | [optional]
**warnings** | [**\ultracart\v2\models\SfvbErrorDetail[]**](SfvbErrorDetail.md) | Findings that did not block the move, such as a redirect chain. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
