# OrderFraudScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anonymous_proxy** | **bool** | True if the IP address is a known anonymous proxy server | [optional] 
**bin_match** | **string** | Whether the BIN (first six digits) matched the country | [optional] 
**carder_email** | **bool** | True if the email address belongs to a known credit card fraudster | [optional] 
**country_code** | **string** | Country code | [optional] 
**country_match** | **bool** | Country code matches BIN country | [optional] 
**customer_phone_in_billing_location** | **string** | Whether the customer&#39;s phone number is located in the area of the billing address | [optional] 
**distance_km** | **int** | Distance in kilometers between the IP address and the BIN | [optional] 
**free_email** | **bool** | True if the email address is for a free service like gmail.com | [optional] 
**high_risk_country** | **bool** | True if the customer is in a high risk country known for internet fraud | [optional] 
**ip_city** | **string** | City associated with the IP address | [optional] 
**ip_isp** | **string** | ISP that owns the IP address | [optional] 
**ip_latitude** | **string** | Approximate latitude associated with the IP address | [optional] 
**ip_longitude** | **string** | Approximate longitude associated with the IP address | [optional] 
**ip_org** | **string** | Organization that owns the IP address | [optional] 
**ip_region** | **string** | State/region associated with the IP address | [optional] 
**proxy_score** | **float** | Likelihood of the IP address being a proxy server | [optional] 
**score** | **float** | Overall score.  This is the score that is compared to see if the order is rejected or held for review by the fraud filter rules. | [optional] 
**ship_forwarder** | **bool** | True if the address is a known ship forwarding company | [optional] 
**spam_score** | **float** | Likelihood of the email address being associated with a spammer | [optional] 
**transparent_proxy** | **bool** | True if the IP address that placed the order is a transparent proxy server | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


