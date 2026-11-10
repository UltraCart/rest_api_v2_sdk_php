# # SfvbItemVariationChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**axis** | **string** | The axis the change is about. | [optional]
**before** | **string** | add_option puts the new option before this one.  Otherwise it goes last. | [optional]
**child** | **string** | set_combination - the child item id, or null to clear the combination. | [optional]
**default** | **bool** | add_option and add_axis make the option the default. | [optional]
**default_text** | **string** | The prompt, for add_axis and set_default_text.  Null clears it. | [optional]
**multimedia_oid** | **int** | An image of the parent item.  For set_option_multimedia null clears it; for set_combination null keeps the current one. | [optional]
**op** | **string** | add_axis, remove_axis, rename_axis, add_option, remove_option, rename_option, reorder_options, set_default, set_default_text, set_option_multimedia or set_combination. | [optional]
**quantity** | **int** | set_combination - how many of the child the combination adds.  Defaults to 1. | [optional]
**to** | **string** | The new name, for rename_axis and rename_option. | [optional]
**value** | **string** | The option the change is about. | [optional]
**values** | **string[]** | add_axis options in order, or every option in its new order for reorder_options. | [optional]
**variation_values** | [**\ultracart\v2\models\SfvbItemVariationValue[]**](SfvbItemVariationValue.md) | set_combination - one axis and option per axis. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
