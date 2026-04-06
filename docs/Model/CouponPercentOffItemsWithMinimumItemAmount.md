# # CouponPercentOffItemsWithMinimumItemAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The ISO-4217 three letter currency code the customer is viewing prices in | [optional]
**discount_percent** | **float** | The percentage of subtotal discount | [optional]
**excluded_item_tags** | **string[]** | A list of item tags which cannot be discounted. | [optional]
**excluded_items** | **string[]** | A list of items which cannot be discounted. | [optional]
**item_tags** | **string[]** | An optional list of item tags which will receive a discount.  If blank, discount applies to all items except excluded items. | [optional]
**items** | **string[]** | An optional list of items which will receive a discount.  If blank, discount applies to all items except excluded items. | [optional]
**limit** | **int** | The (optional) maximum quantity of discounted items. | [optional]
**minimum_item_amount** | **float** | The minimum item amount (dollars) required for the discount to apply | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
