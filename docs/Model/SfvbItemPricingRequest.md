# # SfvbItemPricingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clear_msrp** | **bool** | True to remove the MSRP.  Not with msrp. | [optional]
**clear_sale** | **bool** | True to remove the sale.  Not with sale_cost. | [optional]
**cost** | **float** | The new price, 0 or more. | [optional]
**msrp** | **float** | The manufacturer suggested retail price, more than 0 (or 0 when the price is 0). | [optional]
**sale_cost** | **float** | The sale price, 0 or more.  Sent with sale_start and sale_end, all three or none. | [optional]
**sale_end** | **string** | When the sale ends, ISO 8601 with an offset, after sale_start.  Required with sale_cost. | [optional]
**sale_start** | **string** | When the sale starts, ISO 8601 with an offset.  Required with sale_cost. | [optional]
**volume_discounts** | [**\ultracart\v2\models\SfvbItemVolumeDiscount[]**](SfvbItemVolumeDiscount.md) | Replaces the retail quantity breaks.  An empty list removes them all.  Up to 20, each quantity 2 or more and named once. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
