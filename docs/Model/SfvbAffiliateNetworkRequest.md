# # SfvbAffiliateNetworkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assign_to_affiliate_oid** | **int** | One of the account&#39;s own affiliates.  Name it in unset to clear it. | [optional]
**commission** | **float** | A fixed commission amount, 0 or more, with at most 6 decimals.  Name it in unset to clear it. | [optional]
**conversion_pixel** | **string** | HTML for custom, at most 10,000 characters, or one https URL for server_to_server.  An empty string empties it.  A pixel that a custom or server_to_server network will use needs an approved affiliate_network.change request for exactly this change. | [optional]
**conversion_type** | **string** | custom, commission_junction or server_to_server. | [optional]
**cookie_lifetime_days** | **int** | 1 to 3650. | [optional]
**dry_run** | **bool** | True to check the change and say whether it needs an approval, without saving. | [optional]
**fire_percentage** | **float** | 0 to 100, with at most 2 decimals. | [optional]
**if_not_fired** | **string** | process, skip or assign.  assign needs if_not_fired_affiliate_oid. | [optional]
**if_not_fired_affiliate_oid** | **int** | For if_not_fired assign, one of the account&#39;s own affiliates. | [optional]
**network_name** | **string** | Up to 50 characters.  Required on a create. | [optional]
**parameter_name** | **string** | Up to 50 characters.  Required on a create. | [optional]
**parameter_value** | **string** | Up to 100 characters.  Required on a create. | [optional]
**record_fire_in_custom_field** | **int** | 1 to 10. | [optional]
**record_name_in_custom_field** | **int** | 1 to 10. | [optional]
**remove_empty_pixel_parameters** | **bool** | server_to_server only. | [optional]
**stomp_previous_cookie** | **bool** | True to replace another network&#39;s cookie. | [optional]
**unset** | **string[]** | Fields to clear.  commission and assign_to_affiliate_oid only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
