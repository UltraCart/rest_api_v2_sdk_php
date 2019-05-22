# OrderTaxes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**arbitrary_tax** | **float** | Arbitrary Tax, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system. | [optional] 
**arbitrary_tax_rate** | **float** | Arbitrary tax rate, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system. | [optional] 
**arbitrary_taxable_subtotal** | **float** | Arbitrary taxable subtotal, this is meaningless for updating an order.  For inserting a new order, this will override any internal tax calculations and should only be used for orders completed outside the system. | [optional] 
**tax_city_accounting_code** | **string** | QuickBooks tax city code | [optional] 
**tax_country_accounting_code** | **string** | QuickBooks tax country code | [optional] 
**tax_county** | **string** | County used for tax calculation purposes (only in the United States) | [optional] 
**tax_county_accounting_code** | **string** | QuickBooks tax county code | [optional] 
**tax_gift_charge** | **bool** | True if gift charge is taxed | [optional] 
**tax_postal_code_accounting_code** | **string** | QuickBooks tax postal code code | [optional] 
**tax_rate** | **float** | Tax rate, this is meaningless for updating an order.  For inserting a new order, if you need to override internal tax calculations, use the arbitrary fields. | [optional] 
**tax_rate_city** | **float** | Tax rate at the city level | [optional] 
**tax_rate_country** | **float** | Tax rate at the country level | [optional] 
**tax_rate_county** | **float** | Tax rate at the county level | [optional] 
**tax_rate_postal_code** | **float** | Tax rate at the postal code level | [optional] 
**tax_rate_state** | **float** | Tax rate at the state level | [optional] 
**tax_shipping** | **bool** | True if shipping is taxed | [optional] 
**tax_state_accounting_code** | **string** | QuickBooks tax state code | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


