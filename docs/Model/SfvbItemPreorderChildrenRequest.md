# # SfvbItemPreorderChildrenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**children** | [**\ultracart\v2\models\SfvbItemPreorderChildRow[]**](SfvbItemPreorderChildRow.md) | The variations to change, 1 to 100, each named once. | [optional]
**clear_eta** | **bool** | True to remove the ETA from every variation named.  Not with eta. | [optional]
**eta** | **string** | The expected date for every variation named, YYYY-MM-DD.  Not with clear_eta. | [optional]
**preorder** | **bool** | True to put the variations on pre-order, false to take them off.  Needs an approved item.preorder request when it changes any of them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
