# # SfvbTrackingPrivacy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anonymize_ip** | **string** | Which shoppers have their IP address anonymized on the cart and order.  all, eea, non_us, or null for nobody. | [optional]
**default_mailing_list_off** | **string** | Which shoppers start checkout with the mailing list sign-up unchecked.  all, eea, non_us, or null for nobody. | [optional]
**disable_return_email** | **string** | Which shoppers are left out of the return email (the admin&#39;s Disable Return Email rule).  all, eea, non_us, or null for nobody. | [optional]
**exclude_purchase_bubble_history** | **string** | Which shoppers&#39; purchases are left out of the purchase bubble history.  all, eea, non_us, or null for nobody. | [optional]
**hash_sha256** | **string** | The hash of these five rules.  Send it as If-Match when changing them. | [optional]
**show_cookie_notice** | **string** | Which shoppers see the privacy and cookie notice.  all, eea (shoppers in the European Economic Area), non_us, or null for nobody. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
