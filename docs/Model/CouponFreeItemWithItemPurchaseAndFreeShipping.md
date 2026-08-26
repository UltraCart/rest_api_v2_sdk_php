# # CouponFreeItemWithItemPurchaseAndFreeShipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | **string[]** | A list of free items which will receive a discount if one of the required purchase items is purchased. | [optional]
**limit** | **int** | The (optional) maximum quantity of discounted items.  Free shipping will apply to all units of the free item ids though. | [optional]
**match_required_purchase_item_to_free_item** | **bool** | If true then the free item is matched 1:1 with the free item in the list. | [optional]
**required_purchase_items** | **string[]** | Required items (at least one from the list) that must be purchased for coupon to be valid | [optional]
**shipping_methods** | **string[]** | One or more shipping methods that may be used with this coupon.  If not specified or empty, methods that are marked as qualifies for free shipping will be the only free methods | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
