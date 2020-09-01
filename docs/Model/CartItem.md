# CartItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arbitrary_unit_cost** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**attributes** | [**\ultracartv2\models\CartItemAttribute[]**](CartItemAttribute.md) | Attributes | [optional] 
**auto_order_schedule** | **string** | Auto order schedule the customer selected | [optional] 
**default_image_url** | **string** | URL to the default multimedia image | [optional] 
**default_thumbnail_url** | **string** | URL to the default multimedia thumbnail | [optional] 
**description** | **string** | Description of the item | [optional] 
**discount** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**extended_description** | **string** | Extended description of the item | [optional] 
**item_id** | **string** | Item ID | [optional] 
**item_oid** | **int** | Item object identifier | [optional] 
**kit** | **bool** | True if this item is a kit | [optional] 
**kit_component_options** | [**\ultracartv2\models\CartKitComponentOption[]**](CartKitComponentOption.md) | Options associated with the kit components | [optional] 
**manufacturer_suggested_retail_price** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**maximum_quantity** | **float** | Maximum quantity the customer can purchase | [optional] 
**minimum_quantity** | **float** | Minimum quantity the customer can purchase | [optional] 
**multimedia** | [**\ultracartv2\models\CartItemMultimedia[]**](CartItemMultimedia.md) | Multimedia | [optional] 
**options** | [**\ultracartv2\models\CartItemOption[]**](CartItemOption.md) | Options | [optional] 
**phsyical** | [**\ultracartv2\models\CartItemPhysical**](CartItemPhysical.md) |  | [optional] 
**position** | **int** | Position of the item in the cart | [optional] 
**preorder** | **bool** | True if this item is on pre-order | [optional] 
**quantity** | **float** | quantity | [optional] 
**schedules** | **string[]** | Customer selectable auto order schedules | [optional] 
**total_cost** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**total_cost_with_discount** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**unit_cost** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**unit_cost_with_discount** | [**\ultracartv2\models\Currency**](Currency.md) |  | [optional] 
**upsell** | **bool** | True if this item was added to the cart as part of an upsell | [optional] 
**variations** | [**\ultracartv2\models\CartItemVariationSelection[]**](CartItemVariationSelection.md) | Variations | [optional] 
**view_url** | **string** | URL to view the product on the site | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


