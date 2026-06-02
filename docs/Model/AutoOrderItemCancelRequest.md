# # AutoOrderItemCancelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**append_items** | [**\ultracart\v2\models\AutoOrderItem[]**](AutoOrderItem.md) | Specifying these items allows for an easier immutable item contact.  Validation will occur before any operations take place.  After the end/remove operation is successful, append these additional item(s) to the auto order.  The changes will be available in the response if the expansion includes items. | [optional]
**auto_order_item_oid** | **int** | Optional tiebreaker when more than one item on the auto order shares the same original_item_id.  When present, the item with this oid is targeted and its original_item_id must match the URL path parameter (safety check).  Leave unset for the common case of a unique original_item_id.  For reference the order_item.item_reference_oid is the same value as auto_order_item.auto_order_item_oid UNLESS the a manual edit took place AFTER the original order was placed. | [optional]
**mode** | **string** | Cancellation mode.  &#39;end&#39; soft-cancels the item by setting no_order_after_dts to the current time, preserving the row for reporting.  &#39;remove&#39; hard-deletes the item from the auto order.  Defaults to &#39;end&#39; (the less destructive option) when omitted. | [optional]
**no_orders_after_dts** | **string** | Date/time that will be used in an END mode (optional) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
