# # OrderReplacement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_merchant_notes_new_order** | **string** | Additional merchant notes to append to the new order | [optional]
**additional_merchant_notes_original_order** | **string** | Additional merchant notes to append to the original order | [optional]
**custom_field1** | **string** | Custom field 1 | [optional]
**custom_field2** | **string** | Custom field 2 | [optional]
**custom_field3** | **string** | Custom field 3 | [optional]
**custom_field4** | **string** | Custom field 4 | [optional]
**custom_field5** | **string** | Custom field 5 | [optional]
**custom_field6** | **string** | Custom field 6 | [optional]
**custom_field7** | **string** | Custom field 7 | [optional]
**free** | **bool** | Set to true if this replacement shipment should be free for the customer. | [optional]
**immediate_charge** | **bool** | Set to true if you want to immediately charge the payment on this order, otherwise it will go to Accounts Receivable. | [optional]
**items** | [**\ultracart\v2\models\OrderReplacementItem[]**](OrderReplacementItem.md) | Items to include in the replacement order | [optional]
**original_order_id** | **string** | Original order id | [optional]
**shipping_method** | **string** | Shipping method to use.  If not specified or invalid then least cost shipping will take place. | [optional]
**skip_payment** | **bool** | Set to true if you want to skip the payment as if it was successful. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
