# OrderShipping

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | Address line 1 | [optional] 
**address2** | **string** | Address line 2 | [optional] 
**city** | **string** | City | [optional] 
**company** | **string** | Company | [optional] 
**country_code** | **string** | ISO-3166 two letter country code | [optional] 
**day_phone** | **string** | Day time phone | [optional] 
**delivery_date** | **string** | Date the customer is requesting delivery on.  Typically used for perishable product delivery. | [optional] 
**evening_phone** | **string** | Evening phone | [optional] 
**first_name** | **string** | First name | [optional] 
**last_name** | **string** | Last name | [optional] 
**least_cost_route** | **bool** | If true, instructs UltraCart to apply the cheapest shipping method to this order.  Used only for channel partner order inserts. | [optional] 
**least_cost_route_shipping_methods** | **string[]** | List of shipping methods to consider if least_code_route is true. Used only for channel parter order inserts. | [optional] 
**lift_gate** | **bool** | Lift gate requested (LTL shipping methods only) | [optional] 
**postal_code** | **string** | Postal code | [optional] 
**rma** | **string** | RMA number | [optional] 
**ship_on_date** | **string** | Date the customer is requesting that the order ship on.  Typically used for perishable product delivery. | [optional] 
**ship_to_residential** | **bool** | True if the shipping address is residential.  Effects the methods that are available to the customer as well as the price of the shipping method. | [optional] 
**shipping_3rd_party_account_number** | **string** | Shipping 3rd party account number | [optional] 
**shipping_date** | **string** | Date/time the order shipped on.  This date is set once the first shipment is sent to the customer. | [optional] 
**shipping_department_status** | **string** | Shipping department status | [optional] 
**shipping_method** | **string** | Shipping method | [optional] 
**shipping_method_accounting_code** | **string** | Shipping method accounting code | [optional] 
**special_instructions** | **string** | Special instructions from the customer regarding shipping | [optional] 
**state_region** | **string** | State | [optional] 
**title** | **string** | Title | [optional] 
**tracking_numbers** | **string[]** | Tracking numbers | [optional] 
**weight** | [**\ultracart\v2\models\Weight**](Weight.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


