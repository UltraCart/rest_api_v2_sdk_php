# OrderChannelPartner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_approve_purchase_order** | **bool** | If true, any purchase order submitted is automatically approved | [optional] 
**channel_partner_code** | **string** | The code of the channel partner | [optional] 
**channel_partner_data** | **string** | Additional data provided by the channel partner, read-only | [optional] 
**channel_partner_oid** | **int** | Channel partner object identifier, read-only and available on existing channel orders only. | [optional] 
**channel_partner_order_id** | **string** | The order ID assigned by the channel partner for this order | [optional] 
**no_realtime_payment_processing** | **bool** | Indicates this order should be placed in Account Receivable for later payment processing | [optional] 
**skip_payment_processing** | **bool** | Indicates this order was already paid for via a channel purchase and no payment collection should be attempted | [optional] 
**store_if_payment_declines** | **bool** | If true, any failed payment will place the order in Accounts Receivable rather than rejecting it. | [optional] 
**treat_warnings_as_errors** | **bool** | Any warnings are raised as errors and halt the import of the order | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


