# DistributionCenter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | Address line 1 of the distribution center | [optional] 
**address2** | **string** | Address line 2 of the distribution center | [optional] 
**city** | **string** | City of the distribution center | [optional] 
**code** | **string** | Unique code for this distribution center | [optional] 
**country_code** | **string** | Country code of the distribution center | [optional] 
**default_center** | **bool** | True if this is the default distribution center on the account | [optional] 
**default_handles_all_items** | **bool** | True if this distribution center handles all new items by default | [optional] 
**distribution_center_oid** | **int** | Distribution center object identifier | [optional] 
**duns** | **string** | DUNS number assigned to this distribution center (EDI) | [optional] 
**estimate_from_distribution_center_oid** | **int** | Estimate shipments for this distribution center as if they came from the other distribution center | [optional] 
**ftp_password** | **string** | Password associated with the virtual FTP | [optional] 
**hold_before_shipment_minutes** | **int** | The number of minutes to hold a shipment | [optional] 
**hold_before_transmission** | **bool** | True if the shipment should be held before transmission and require a manual release | [optional] 
**latitude** | **float** | Latitude where the distribution center is located | [optional] 
**longitude** | **float** | Longitude where the distribution center is located | [optional] 
**name** | **string** | Name of this distribution center | [optional] 
**no_customer_direct_shipments** | **bool** | True if this distribution center does not handle customer direct shipments | [optional] 
**no_split_shipment** | **bool** | True if this distribution center is not allowed to participate in a split shipment. | [optional] 
**postal_code** | **string** | Postal code of the distribution center | [optional] 
**process_days** | **int** | The number of processing days required before an order ships | [optional] 
**process_inventory_start_time** | **string** | The time (EST) after which inventory updates will be processed | [optional] 
**process_inventory_stop_time** | **string** | The time (EST) before which inventory updates will be processed | [optional] 
**require_asn** | **bool** | True if ASNs are required for this distribution center (EDI) | [optional] 
**send_kit_instead_of_components** | **bool** | True if we should send the kit instead of the components | [optional] 
**shipment_cutoff_time_friday** | **string** | The time (EST) after which shipments will not be processed on Friday | [optional] 
**shipment_cutoff_time_monday** | **string** | The time (EST) after which shipments will not be processed on Monday | [optional] 
**shipment_cutoff_time_saturday** | **string** | The time (EST) after which shipments will not be processed on Saturday | [optional] 
**shipment_cutoff_time_sunday** | **string** | The time (EST) after which shipments will not be processed on Sunday | [optional] 
**shipment_cutoff_time_thursday** | **string** | The time (EST) after which shipments will not be processed on Thursday | [optional] 
**shipment_cutoff_time_tuesday** | **string** | The time (EST) after which shipments will not be processed on Tuesday | [optional] 
**shipment_cutoff_time_wednesday** | **string** | The time (EST) after which shipments will not be processed on Wednesday | [optional] 
**state** | **string** | State of the distribution center | [optional] 
**transport** | **string** | Transport mechanism for this distribution center | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


