# # SfvbLibraryEntryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The fragment, one widget and its children.  Not a whole container. | [optional]
**description** | **string** | What the fragment is for, at most 1024 characters. | [optional]
**name** | **string** | Entry name, at most 100 characters. | [optional]
**parameters** | [**\ultracart\v2\models\SfvbLibraryParameter[]**](SfvbLibraryParameter.md) | Named values the fragment expects its installer to supply. | [optional]
**screenshot** | [**\ultracart\v2\models\SfvbLibraryScreenshotRequest**](SfvbLibraryScreenshotRequest.md) |  | [optional]
**share_with_account** | **bool** | True to let the other users on this merchant account see the published revision. | [optional]
**taxonomy** | [**\ultracart\v2\models\SfvbLibraryTaxonomy**](SfvbLibraryTaxonomy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
