# PaymentsConfigurationWireTransfer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_wire_transfer** | **bool** | Master flag indicating this merchant accepts wire transfers | [optional] 
**account_number** | **string** | account_number | [optional] 
**accounting_code** | **string** | Optional Quickbooks accounting code | [optional] 
**bank_address** | **string** | Bank address | [optional] 
**deposit_to_account** | **string** | Optional Quickbooks deposit to account | [optional] 
**intermediate_routing_number** | **string** | Intermediate routing number | [optional] 
**restrictions** | [**\ultracart\v2\models\PaymentsConfigurationRestrictions**](PaymentsConfigurationRestrictions.md) |  | [optional] 
**routing_number** | **string** | Routing number | [optional] 
**surcharge_accounting_code** | **string** | If a surcharge is present and this merchant is integrated with Quickbooks, this is the accounting code for the surcharge amount | [optional] 
**surcharge_fee** | **float** | surcharge_fee | [optional] 
**surcharge_percentage** | **float** | surcharge_percentage | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


