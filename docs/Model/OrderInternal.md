# OrderInternal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exported_to_accounting** | **bool** | True if the order has been exported to QuickBooks. If QuickBooks is not configured, then this will already be true | [optional] 
**merchant_notes** | **string** | Merchant notes.  Full notes in non-transactional mode.  Just used to write a new merchant note when transaction merchant notes enabled. | [optional] 
**placed_by_user** | **string** | If placed via the BEOE, this is the user that placed the order | [optional] 
**refund_by_user** | **string** | User that issued the refund | [optional] 
**sales_rep_code** | **string** | Sales rep code associated with the order | [optional] 
**transactional_merchant_notes** | [**\ultracart\v2\models\OrderTransactionalMerchantNote[]**](OrderTransactionalMerchantNote.md) | Transactional merchant notes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


