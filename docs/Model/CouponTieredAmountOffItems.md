# # CouponTieredAmountOffItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_tags** | **string[]** | An optional list of item tags which will receive a discount.  If blank, discount applies to all items except excluded items. | [optional]
**items** | **string[]** | The items being discounted by this coupon. | [optional]
**limit** | **float** | The maximum number of discounted items. | [optional]
**tiers** | [**\ultracart\v2\models\CouponTierQuantityAmount[]**](CouponTierQuantityAmount.md) | A list of discount tiers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
