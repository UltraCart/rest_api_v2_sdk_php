# # SfvbItemVariationsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval_needed** | **bool** | True when the change needs an approved item.variations request. | [optional]
**axes** | [**\ultracart\v2\models\SfvbItemVariationAxis[]**](SfvbItemVariationAxis.md) | The axes in order. | [optional]
**changes** | [**\ultracart\v2\models\SfvbItemVariationChangeResult[]**](SfvbItemVariationChangeResult.md) | What each change did, or would do on a dry run. | [optional]
**combinations** | [**\ultracart\v2\models\SfvbItemVariationCombination[]**](SfvbItemVariationCombination.md) | Every filled combination. | [optional]
**description** | **string** | The parent item&#39;s description. | [optional]
**dry_run** | **bool** | True when nothing was saved. | [optional]
**hash_sha256** | **string** | Hash of the variations as returned. | [optional]
**merchant_item_id** | **string** | The parent item&#39;s id. | [optional]
**merchant_item_oid** | **int** | The parent item&#39;s oid. | [optional]
**unfilled_combinations** | **int** | How many combinations of the options have no child. | [optional]
**warnings** | **string[]** | Things worth knowing, such as combinations left unfilled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
