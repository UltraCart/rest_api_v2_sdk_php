# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arbitrary_unit_cost** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**attributes** | [**\ultracart\v2\models\CartItemAttribute[]**](CartItemAttribute.md) | Attributes | [optional]
**auto_order_schedule** | **string** | Auto order schedule the customer selected | [optional]
**default_image_url** | **string** | URL to the default multimedia image | [optional]
**default_thumbnail_url** | **string** | URL to the default multimedia thumbnail | [optional]
**description** | **string** | Description of the item | [optional]
**discount** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**extended_description** | **string** | Extended description of the item | [optional]
**item_id** | **string** | Item ID | [optional]
**item_oid** | **int** | Item object identifier | [optional]
**kit** | **bool** | True if this item is a kit | [optional]
**kit_component_options** | [**\ultracart\v2\models\CartKitComponentOption[]**](CartKitComponentOption.md) | Options associated with the kit components | [optional]
**manufacturer_suggested_retail_price** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**maximum_quantity** | **float** | Maximum quantity the customer can purchase | [optional]
**minimum_quantity** | **float** | Minimum quantity the customer can purchase | [optional]
**multimedia** | [**\ultracart\v2\models\CartItemMultimedia[]**](CartItemMultimedia.md) | Multimedia | [optional]
**options** | [**\ultracart\v2\models\CartItemOption[]**](CartItemOption.md) | Options | [optional]
**phsyical** | [**\ultracart\v2\models\CartItemPhysical**](CartItemPhysical.md) |  | [optional]
**position** | **int** | Position of the item in the cart | [optional]
**preorder** | **bool** | True if this item is on pre-order | [optional]
**properties** | [**\ultracart\v2\models\CartItemProperty[]**](CartItemProperty.md) | Properties associated with the item | [optional]
**quantity** | **float** | quantity | [optional]
**schedules** | **string[]** | Customer selectable auto order schedules | [optional]
**total_cost** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**total_cost_with_discount** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**unit_cost** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**unit_cost_with_discount** | [**\ultracart\v2\models\Currency**](Currency.md) |  | [optional]
**upsell** | **bool** | True if this item was added to the cart as part of an upsell | [optional]
**variations** | [**\ultracart\v2\models\CartItemVariationSelection[]**](CartItemVariationSelection.md) | Variations | [optional]
**view_url** | **string** | URL to view the product on the site | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
