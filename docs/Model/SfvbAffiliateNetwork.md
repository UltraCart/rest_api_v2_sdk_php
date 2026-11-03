# # SfvbAffiliateNetwork

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_network_oid** | **int** | The network&#39;s oid.  Smart Attribution names it as a platform&#39;s integration_id. | [optional]
**approval_needed** | **bool** | On a dry run, whether the real write needs an approved affiliate_network.change request. | [optional]
**assign_to_affiliate_oid** | **int** | The account&#39;s own affiliate that orders from this network are assigned to.  Null when none. | [optional]
**changes** | [**\ultracart\v2\models\SfvbTrackingChange[]**](SfvbTrackingChange.md) | On a write, what changed, or what would change on a dry run.  conversion_pixel shows its size and hash, not its content. | [optional]
**commission** | **float** | A fixed commission amount, in the account&#39;s currency.  Null when not set. | [optional]
**conversion_pixel** | **string** | HTML for custom, or the postback URL for server_to_server, with the admin&#39;s order tokens.  Only on a read of one network and on a write.  Empty when not set. | [optional]
**conversion_pixel_sha256** | **string** | The SHA-256 of conversion_pixel as UTF-8. | [optional]
**conversion_pixel_size_bytes** | **int** | The size of conversion_pixel in UTF-8 bytes. | [optional]
**conversion_type** | **string** | custom prints conversion_pixel into the receipt page.  commission_junction fires the account&#39;s Commission Junction setup instead and does not use conversion_pixel.  server_to_server has UltraCart&#39;s server request conversion_pixel as an https URL after the order.  A value stored by the admin that is none of these is shown as stored. | [optional]
**cookie_lifetime_days** | **int** | How long the visit is remembered, in days, 1 to 3650. | [optional]
**dry_run** | **bool** | On a write, true when nothing was saved. | [optional]
**fire_percentage** | **float** | The share of this network&#39;s orders whose pixel fires, from 0 to 100. | [optional]
**hash_sha256** | **string** | The hash of the network as stored.  Send it as If-Match on an update or delete. | [optional]
**if_not_fired** | **string** | What UltraCart&#39;s own affiliate system does with an order whose pixel did not fire.  process handles it as usual, skip leaves it out, assign credits if_not_fired_affiliate_oid. | [optional]
**if_not_fired_affiliate_oid** | **int** | For if_not_fired assign, the account&#39;s own affiliate to credit. | [optional]
**network_name** | **string** | The network&#39;s name, up to 50 characters. | [optional]
**parameter_name** | **string** | The URL parameter that marks a visit from this network, up to 50 characters.  Compared without case. | [optional]
**parameter_value** | **string** | The parameter&#39;s value for this network, up to 100 characters.  Compared without case. | [optional]
**record_fire_in_custom_field** | **int** | The order custom field, 1 to 10, that records whether the pixel fired. | [optional]
**record_name_in_custom_field** | **int** | The order custom field, 1 to 10, that records the network&#39;s name. | [optional]
**remove_empty_pixel_parameters** | **bool** | For server_to_server only, true to drop query parameters that are empty after the tokens are filled in. | [optional]
**stomp_previous_cookie** | **bool** | True to replace another network&#39;s cookie.  False keeps the first network&#39;s. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
