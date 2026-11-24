# # OrderCancelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lock_self_ship_orders** | **bool** | Flag to prevent a order shipping during a refund process | [optional]
**reject_reason** | **string** | Reason stored on the order when it is rejected without a refund (Accounts Receivable, Pre-order, Quote or Hold), the same as the reject reason in the UI. | [optional]
**skip_refund_and_hold** | **bool** | Skip refund and move order to Held Orders department | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
