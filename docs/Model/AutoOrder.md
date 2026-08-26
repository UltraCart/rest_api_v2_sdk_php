# # AutoOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_ons** | [**\ultracart\v2\models\AutoOrderAddonItem[]**](AutoOrderAddonItem.md) | Array of addon objects instructing which items to add to auto order and how many times they should be added. | [optional]
**auto_order_code** | **string** | Unique code assigned to this auto order | [optional]
**auto_order_oid** | **int** | Auto order object identifier | [optional]
**cancel_after_next_x_orders** | **int** | Cancel this auto order after X additional rebills | [optional]
**cancel_downgrade** | **bool** | True if the auto order was canceled because the customer purchased a downgrade item | [optional]
**cancel_reason** | **string** | The reason this auto order was canceled by either merchant or customer. Supplying this when setting enabled to false records the change as a cancellation rather than a disable. | [optional]
**cancel_upgrade** | **bool** | True if the auto order was canceled because the customer purchased an upgrade item | [optional]
**canceled_by_user** | **string** | The user that canceled the auto order. Supplying this when setting enabled to false records the change as a cancellation rather than a disable. | [optional]
**canceled_dts** | **string** | The date/time that the auto order was canceled. Supply this to record an explicit cancellation time, otherwise it is stamped automatically when enabled is set to false along with cancel_reason or canceled_by_user. | [optional]
**completed** | **bool** | True if the auto order ran successfully to completion | [optional]
**credit_card_attempt** | **int** | The number of credit card attempts that have taken place | [optional]
**disabled_dts** | **string** | The date/time the auto order was disabled, either by a failed rebill or by setting enabled to false without a cancellation | [optional]
**emails** | [**\ultracart\v2\models\AutoOrderEmail[]**](AutoOrderEmail.md) | Email delivery records associated with this auto order. | [optional]
**enabled** | **bool** | True if this auto order is enabled. Setting this to false along with cancel_reason or canceled_by_user records the change as a cancellation and fires the auto order cancel notifications. Setting it to false without either field records a disable instead. | [optional]
**failure_reason** | **string** | The reason this auto order failed during the last rebill attempt | [optional]
**items** | [**\ultracart\v2\models\AutoOrderItem[]**](AutoOrderItem.md) | The items that are setup to rebill | [optional]
**logs** | [**\ultracart\v2\models\AutoOrderLog[]**](AutoOrderLog.md) | Logs associated with this auto order | [optional]
**management** | [**\ultracart\v2\models\AutoOrderManagement**](AutoOrderManagement.md) |  | [optional]
**merchant_id** | **string** | UltraCart merchant ID owning this order | [optional]
**merged_dts** | **string** | The date/time the auto order was merged into another auto order | [optional]
**merged_into_auto_order_oid** | **int** | The auto order that this auto order was merged into | [optional]
**next_attempt** | **string** | The next time that the auto order will be attempted for processing | [optional]
**original_order** | [**\ultracart\v2\models\Order**](Order.md) |  | [optional]
**original_order_id** | **string** | The original order id that this auto order is associated with. | [optional]
**override_affiliate_id** | **int** | Override the affiliate id given credit for rebills of this auto order | [optional]
**properties** | [**\ultracart\v2\models\AutoOrderProperty[]**](AutoOrderProperty.md) | Array of property objects | [optional]
**rebill_orders** | [**\ultracart\v2\models\Order[]**](Order.md) | Rebill orders that have taken place on this auto order | [optional]
**rotating_transaction_gateway_code** | **string** | The RTG code associated with this order for future rebills | [optional]
**status** | **string** | The status of the auto order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
