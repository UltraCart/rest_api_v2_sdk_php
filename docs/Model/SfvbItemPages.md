# # SfvbItemPages

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_page_path** | **string** | The default page&#39;s path, or null when none is marked. | [optional]
**hash_sha256** | **string** | Hash of the item&#39;s pages and default on this storefront.  The dry run reports the same value as current_sha256. | [optional]
**merchant_item_id** | **string** | The item&#39;s id. | [optional]
**merchant_item_oid** | **int** | The item&#39;s oid. | [optional]
**notes** | **string[]** | Things worth knowing, such as no default being marked. | [optional]
**pages** | [**\ultracart\v2\models\SfvbItemPageAssignment[]**](SfvbItemPageAssignment.md) | Every page the item is on, on this storefront only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
