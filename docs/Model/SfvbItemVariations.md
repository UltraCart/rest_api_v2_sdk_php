# # SfvbItemVariations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**axes** | [**\ultracart\v2\models\SfvbItemVariationAxis[]**](SfvbItemVariationAxis.md) | The axes in order.  Empty when the item has no variations. | [optional]
**combinations** | [**\ultracart\v2\models\SfvbItemVariationCombination[]**](SfvbItemVariationCombination.md) | Every filled combination.  A combination not listed has no child, and shoppers see it as unavailable. | [optional]
**description** | **string** | The parent item&#39;s description. | [optional]
**hash_sha256** | **string** | Hash of the variations.  Send it as If-Match on the update. | [optional]
**merchant_item_id** | **string** | The parent item&#39;s id. | [optional]
**merchant_item_oid** | **int** | The parent item&#39;s oid. | [optional]
**unfilled_combinations** | **int** | How many combinations of the options have no child. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
