# # SfvbItemDefaultPageRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_sha256** | **string** | The dry run&#39;s current_sha256 for the item.  Required on an apply. | [optional]
**expected_current_path** | **string** | Dry run only - the default page the row expects now.  A different default makes the row stale. | [optional]
**merchant_item_id** | **string** | The item&#39;s id.  Send this or merchant_item_oid. | [optional]
**merchant_item_oid** | **int** | The item&#39;s oid.  Required on an apply. | [optional]
**page_oid** | **int** | The page to make the default, by oid.  Required on an apply. | [optional]
**page_path** | **string** | The page to make the default, by path.  Send this or page_oid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
