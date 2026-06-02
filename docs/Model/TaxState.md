# # TaxState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_code** | **string** | Accounting code for programs such as QuickBooks | [optional]
**counties** | [**\ultracart\v2\models\TaxCounty[]**](TaxCounty.md) | Counties within this state | [optional]
**country_oid** | **int** | Tax record object identifier used internally by database | [optional]
**dont_collect_city** | **bool** | Flag instructing engine to not collect city tax for this state | [optional]
**dont_collect_county** | **bool** | Flag instructing engine to not collect county tax for this state | [optional]
**dont_collect_postal_code** | **bool** | Flag instructing engine to not collect postal code tax for this state | [optional]
**dont_collect_state** | **bool** | Flag instructing engine to not collect state tax for this state | [optional]
**exempt_digital_items** | **bool** | True if digital items are exempt from sales tax in this state. | [optional]
**exempt_physical_items** | **bool** | True if physical items are exempt from sales tax in this state. | [optional]
**exempt_service_items** | **bool** | True if service items are exempt from sales tax in this state. | [optional]
**state_code** | **string** | State code | [optional]
**state_oid** | **int** | Tax record object identifier used internally by database | [optional]
**tax_gift_charge** | **bool** | True if taxation within this jurisdiction should charge tax on gift charge | [optional]
**tax_gift_wrap** | **bool** | True if taxation within this jurisdiction should charge tax on gift wrap | [optional]
**tax_rate** | **float** | Tax Rate | [optional]
**tax_rate_formatted** | **string** | Tax rate formatted | [optional]
**tax_shipping** | **bool** | True if taxation within this jurisdiction should charge tax on shipping | [optional]
**use_ultracart_managed_rates** | **bool** | If true, use UltraCart managed rates for this state | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
