# # CouponDiscountItemWithItemPurchase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The ISO-4217 three letter currency code the customer is viewing prices in | [optional]
**discount_item** | **string** | The item that will be sold at the discount_price when required_purchase_item is purchased. | [optional]
**discount_item_tags** | **string[]** | An optional list of item tags which will receive a discount of one of the required purchased items is purchased. | [optional]
**discount_price** | **float** | The price (unit cost) of the discounted item | [optional]
**limit** | **int** | The (optional) maximum quantity of discounted items. | [optional]
**required_purchase_item** | **string** | The item that must be purchased for the discount to be applied to the discount item. | [optional]
**required_purchase_items_tags** | **string[]** | An optional list of item tags which are required to be purchased. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
