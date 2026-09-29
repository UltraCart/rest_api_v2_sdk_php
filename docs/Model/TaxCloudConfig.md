# # TaxCloudConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | TaxCloud API key | [optional]
**connection_id** | **string** | TaxCloud Connection ID (a UUID) identifying the TaxCloud connection to use; a test connection and a production connection have different IDs | [optional]
**default_tic** | **string** | Default TaxCloud TIC (Taxability Information Code), used for items that do not have their own TIC; blank lets TaxCloud apply its default (0, general goods) | [optional]
**estimate_only** | **bool** | True if this TaxCloud configuration is to estimate taxes only and not report placed orders to TaxCloud | [optional]
**last_test_dts** | **string** | Date/time of the connection test to TaxCloud | [optional]
**shipping_tic** | **string** | TaxCloud TIC used to classify shipping/handling charges (11000 &#x3D; shipping and handling); blank means shipping is not taxed | [optional]
**test_results** | **string** | Test results of the last connection test to TaxCloud | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
