# CouponFreeItemWithItemPurchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_tags** | **string[]** | An optional list of item tags which will receive a discount of one of the required purchased items is purchased. | [optional] 
**items** | **string[]** | A list of free items which will receive a discount if one of the required purchase items is purchased. | [optional] 
**limit** | **int** | The (optional) maximum quantity of discounted items. | [optional] 
**match_required_purchase_item_to_free_item** | **bool** | If true then the free item is matched 1:1 with the free item in the list. | [optional] 
**required_purchase_items** | **string[]** | Required items (at least one from the list) that must be purchased for coupon to be valid | [optional] 
**required_purchase_items_tags** | **string[]** | An optional list of item tags which are required to be purchased. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


