# # CartUpsellAfter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**finalize_after_dts** | **string** | The date/time after which the cart will finalize into an order. | [optional]
**finalize_after_minutes** | **int** | The amount of inactivity in minutes after which the cart should be finalized into an order.  This will calculate the finalize_after_dts field. | [optional]
**upsell_path_code** | **string** | Upsell path code (this is for legacy upsells only) | [optional]
**upsell_path_name** | **string** | Upsell path name to start on (StoreFront Upsells).  Will only be respected on a handoff API call. | [optional]
**upsell_path_variation** | **string** | Upsell path variation to start on (StoreFront Upsells).   Will only be respected on a handoff API call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
