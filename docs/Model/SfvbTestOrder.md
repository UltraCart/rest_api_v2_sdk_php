# # SfvbTestOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_order** | **bool** | True when the order started an auto order, for working on the subscription pages. | [optional]
**created** | **string** | When the order was placed, ISO-8601 in UTC. | [optional]
**currency_code** | **string** | The currency of the total. | [optional]
**digital_items** | **bool** | True when the order has digital downloads, for working on the digital download page. | [optional]
**item_count** | **int** | How many item lines the order has. | [optional]
**order_id** | **string** | The order id.  Pass it as a render&#39;s context_order_id. | [optional]
**payment_method** | **string** | How the order was paid, such as Credit Card or PayPal. | [optional]
**stage** | **string** | The order&#39;s current stage code, such as CO (completed), SD (shipping department) or AR (accounts receivable). | [optional]
**total** | **string** | The order total as a decimal string. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
