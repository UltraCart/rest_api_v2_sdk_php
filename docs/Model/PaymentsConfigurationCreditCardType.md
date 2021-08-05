# PaymentsConfigurationCreditCardType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_code** | **string** | Optional field used for Quickbooks integrations to match this credit card with the corresponding payment type in Quickbooks | [optional] 
**card_type_icon** | **string** | Internally used icon information for this card type | [optional] 
**credit_card** | **string** | Credit card type | [optional] 
**deposit_to_account** | **string** | The name of the account to deposit funds | [optional] 
**enabled** | **bool** | If true, this card type will be accepted during checkout | [optional] 
**processing_fee** | **string** | Optional additional fee applied to order for this card | [optional] 
**processing_percentage** | **string** | Optional additional fee applied to order for this card | [optional] 
**surcharge_accounting_code** | **string** | Optional field. If integrated with Quickbooks, this code will be used when informing Quickbooks about any surcharges applied to orders | [optional] 
**transaction_fee** | **string** | An optional additional fee to charge the customer for using this card. | [optional] 
**transaction_percentage** | **string** | An optional transaction percentage to charge the customer for using this card | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


