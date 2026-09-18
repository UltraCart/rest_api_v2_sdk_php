# # SfvbPageItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_assignment** | **bool** | True when this page is the item&#39;s canonical home.  Read only - set in the store admin. | [optional]
**item_id** | **string** | The item id, as the merchant knows it. | [optional]
**merchant_item_oid** | **int** | The item&#39;s internal oid.  Read only. | [optional]
**sort_order** | **int** | Position on the page.  Used only when the page sorts its items by a custom order (sort_order_child_items C). | [optional]
**url_part** | **string** | The item page&#39;s name under this page, so the item is shown at the page path plus url_part plus .html.  Letters, digits, hyphens and underscores.  When empty the item id is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
