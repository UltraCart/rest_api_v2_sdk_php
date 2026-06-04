# # CouponAmountOffItemsAndFreeShipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The ISO-4217 three letter currency code the customer is viewing prices in | [optional]
**discount_amount** | **float** | The amount of discount | [optional]
**item_tags** | **string[]** | An optional list of item tags which will receive a discount. | [optional]
**items** | **string[]** | A list of items which are eligible for the discount amount. | [optional]
**limit** | **int** | The limit of items which are eligible for the discount amount. | [optional]
**shipping_methods** | **string[]** | One or more shipping methods that may be used with this coupon.  If not specified or empty, methods that are marked as qualifies for free shipping will be the only free methods | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
