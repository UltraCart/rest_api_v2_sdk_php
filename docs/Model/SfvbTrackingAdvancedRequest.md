# # SfvbTrackingAdvancedRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**catalog_url** | **string** | A path starting with / or an absolute http or https URL, up to 250 characters. | [optional]
**continue_shopping_url** | **string** | A path starting with / or an absolute http or https URL, up to 250 characters. | [optional]
**conversion_pixel_only_if_paid** | **bool** | True to run the receipt&#39;s conversion HTML only for orders whose payment succeeded. | [optional]
**default_currency** | **string** | A currency code from the read&#39;s currencies. | [optional]
**dry_run** | **bool** | True to check the change and report it without saving. | [optional]
**omit_order_data** | **bool** | True to leave the order data off the custom thank you URL. | [optional]
**payment_pending_url** | **string** | A path starting with / or an absolute http or https URL, up to 500 characters. | [optional]
**thank_you_url** | **string** | A path starting with / or an absolute http or https URL, up to 500 characters. | [optional]
**unset** | **string[]** | Text settings to clear, by key.  continue_shopping_url, catalog_url, thank_you_url, payment_pending_url or default_currency.  Not with a value for the same key. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
