# # SfvbItemRelated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash_sha256** | **string** | The hash of the above.  Send it as If-Match to change them. | [optional]
**merchant_item_id** | **string** | The item&#39;s merchant item id. | [optional]
**merchant_item_oid** | **int** | The item. | [optional]
**no_system_calculated_related_items** | **bool** | True when UltraCart does not calculate related items for this item. | [optional]
**not_relatable** | **bool** | True when this item is never shown as related to another. | [optional]
**related_items** | [**\ultracart\v2\models\SfvbItemRelatedItem[]**](SfvbItemRelatedItem.md) | In stored order - the merchant&#39;s own (user, addon, complementary) and UltraCart&#39;s calculated ones (system). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
