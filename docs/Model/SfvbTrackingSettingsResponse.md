# # SfvbTrackingSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advanced** | [**\ultracart\v2\models\SfvbTrackingAdvanced**](SfvbTrackingAdvanced.md) |  | [optional]
**changes** | [**\ultracart\v2\models\SfvbTrackingChange[]**](SfvbTrackingChange.md) | On a write, each setting it changed, or would change on a dry run.  Empty when nothing changed.  Absent on a read. | [optional]
**currencies** | **string[]** | The currency codes default_currency accepts. | [optional]
**dry_run** | **bool** | On a write, true when nothing was saved.  Absent on a read. | [optional]
**privacy** | [**\ultracart\v2\models\SfvbTrackingPrivacy**](SfvbTrackingPrivacy.md) |  | [optional]
**storefront_oid** | **int** | The storefront these settings belong to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
