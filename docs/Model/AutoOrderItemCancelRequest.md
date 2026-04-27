# # AutoOrderItemCancelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_order_item_oid** | **int** | Optional tiebreaker when more than one item on the auto order shares the same original_item_id.  When present, the item with this oid is targeted and its original_item_id must match the URL path parameter (safety check).  Leave unset for the common case of a unique original_item_id. | [optional]
**mode** | **string** | Cancellation mode.  &#39;end&#39; soft-cancels the item by setting no_order_after_dts to the current time, preserving the row for reporting.  &#39;remove&#39; hard-deletes the item from the auto order.  Defaults to &#39;end&#39; (the less destructive option) when omitted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
