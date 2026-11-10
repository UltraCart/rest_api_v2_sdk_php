# # SfvbItemChildCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**copied_cost** | **string** | The cost copied from the parent. | [optional]
**copied_dimensions** | **string** | Length, width and height copied from the parent. | [optional]
**copied_folder_id** | **int** | The parent&#39;s item folder the new item is filed in, 0 for the top. | [optional]
**copied_weight** | **string** | The weight copied from the parent. | [optional]
**description** | **string** | The new item&#39;s description. | [optional]
**dry_run** | **bool** | True when nothing was created. | [optional]
**merchant_item_id** | **string** | The new item&#39;s id. | [optional]
**merchant_item_oid** | **int** | The new item&#39;s oid.  Absent on a dry run. | [optional]
**next** | **string** | What to do next. | [optional]
**parent** | [**\ultracart\v2\models\SfvbItemVariationChild**](SfvbItemVariationChild.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
