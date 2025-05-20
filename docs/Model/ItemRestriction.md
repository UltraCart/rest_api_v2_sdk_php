# ItemRestriction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exclude_coupon** | **bool** | Exclude coupons | [optional] 
**exclude_from_free_promotion** | **bool** | Exclude from free promotion | [optional] 
**exclude_from_loyalty** | **bool** | Exclude from loyalty.  Must be set to true or false to save.  Null is ignored for backwards SDK compatibility | [optional] 
**items** | [**\ultracart\v2\models\ItemRestrictionItem[]**](ItemRestrictionItem.md) | Items | [optional] 
**maximum_quantity** | **int** | Maximum quantity | [optional] 
**minimum_quantity** | **int** | Minimum quantity (defaults to 1) | [optional] 
**multiple_quantity** | **int** | Multiple of quantity | [optional] 
**one_per_customer** | **bool** | One per customer | [optional] 
**purchase_separately** | **bool** | Purchase separately | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


