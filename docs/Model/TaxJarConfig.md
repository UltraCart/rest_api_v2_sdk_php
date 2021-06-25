# TaxJarConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True if TaxJar is active for this merchant | [optional] 
**api_key** | **string** | TaxJar API key | [optional] 
**estimate_only** | **bool** | True if this TaxJar configuration is to estimate taxes only and not report placed orders to TaxJar | [optional] 
**send_outside_nexus** | **bool** | Send orders outside your nexus TaxJar.  The default is to not transmit outside orders to TaxJar to reduce API calls.  However, this will prevent TaxJar from dynamically creating new Nexus when thresholds are exceeded for a state. | [optional] 
**send_test_orders** | **bool** | Send test orders through to TaxJar.  The default is to not transmit test orders to TaxJar. | [optional] 
**skip_channel_orders** | **bool** | Do not send channel partner orders to TaxJar.  Set this to true if your channel partner reports tax on their own. | [optional] 
**use_distribution_center_from** | **bool** | Use distribution center from address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


