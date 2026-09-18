# # SfvbPageItemsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\ultracart\v2\models\SfvbPageItem[]**](SfvbPageItem.md) | The items assigned to the page. | [optional]
**path** | **string** | The page path. | [optional]
**sort_order_child_items** | **string** | How the page orders its items.  C means by each item&#39;s sort_order. | [optional]
**uses_selectors** | **bool** | True when selectors choose this page&#39;s items.  The items are then recalculated from the selectors, and adding or removing items by hand is refused. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
