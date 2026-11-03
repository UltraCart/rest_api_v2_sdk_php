# # SfvbTrackingHtmlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | The whole HTML the slot will hold, at most 256 KB as UTF-8.  An empty string empties the slot, which needs no approval.  Anything else needs an approved tracking_html.put request for exactly these bytes. | [optional]
**dry_run** | **bool** | True to check the write and say whether it needs an approval, without saving. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
