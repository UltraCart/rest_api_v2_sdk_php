# # SfvbPageItemSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute_name** | **string** | attribute - the item attribute name.  Required with attribute_value. | [optional]
**attribute_value** | **string** | attribute - the value to match. | [optional]
**item_folder_oid** | **int** | item folder and item folder tree - the item folder, which must exist. | [optional]
**manufacturer_name** | **string** | manufacturer name - required. | [optional]
**retail_cost_high** | **float** | retail cost - the highest price. | [optional]
**retail_cost_low** | **float** | retail cost - the lowest price.  At least one of low and high is required. | [optional]
**sale_item** | **bool** | sale item - match items on sale. | [optional]
**tag** | **string** | tag - the item tag to match.  Required. | [optional]
**top_seller_count** | **int** | top seller - how many items, 1 to 250.  Required with top_seller_days. | [optional]
**top_seller_days** | **int** | top seller - over how many days, 1 to 180. | [optional]
**type** | **string** | One of retail cost, attribute, variation, not variation, manufacturer name, exploded diagram, sale item, item folder, item folder tree, top seller, new, pre-order, tag. | [optional]
**variation_name** | **string** | variation - the variation name.  Required with variation_value. | [optional]
**variation_value** | **string** | variation - the variation value to match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
