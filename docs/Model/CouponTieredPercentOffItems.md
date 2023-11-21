# # CouponTieredPercentOffItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_tags** | **string[]** | An optional list of item tags which will receive a discount.  If blank, discount applies to all items except excluded items. | [optional]
**items** | **string[]** | A list of items of which at least one must be purchased for coupon to be valid. | [optional]
**limit** | **float** | The (optional) maximum quantity of discounted items. | [optional]
**tiers** | [**\ultracart\v2\models\CouponTierQuantityPercent[]**](CouponTierQuantityPercent.md) | A list of discount tiers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
