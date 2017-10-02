# CartFinalizeOrderRequestOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_approve_purchase_order** | **bool** | Automatically approve the purchase order | [optional] 
**channel_partner_code** | **string** | Channel partner code to associate this order with | [optional] 
**channel_partner_oid** | **int** | Channel partner oid to associate this order with | [optional] 
**channel_partner_order_id** | **string** | Channel partner order id for reference | [optional] 
**consider_recurring** | **bool** | Consider this order a recurring order for the purposes of payment gateway recurring flag | [optional] 
**credit_card_authorization_amount** | **float** | If the order was authorized outside of UltraCart, this is the amount of the authorization | [optional] 
**credit_card_authorization_date** | **string** | If the order was authorized outside of UltraCart, this is the date/time of the authorization | [optional] 
**credit_card_authorization_reference_number** | **string** | If the order was authorized outside of UltraCart, this is the authorization reference number | [optional] 
**no_realtime_payment_processing** | **bool** | Prevents normal real-time processing of the payment and sends the order to Accounts Receivable | [optional] 
**setup_next_cart** | **bool** | True if the system should create another cart automatically if the current cart was logged into a profile | [optional] 
**skip_payment_processing** | **bool** | Skip payment processing and move the order on to shipping (or completed if no shipping required) | [optional] 
**store_completed** | **bool** | True the order in the completed stage | [optional] 
**store_if_payment_declines** | **bool** | Store the order in accounts receivable if the payment declines | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


