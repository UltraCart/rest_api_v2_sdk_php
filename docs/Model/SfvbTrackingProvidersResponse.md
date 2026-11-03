# # SfvbTrackingProvidersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**catalog_version** | **int** | Bumped whenever a provider or field is added, removed or renamed. | [optional]
**providers** | [**\ultracart\v2\models\SfvbTrackingProvider[]**](SfvbTrackingProvider.md) | Every provider, Google first, in the order the admin shows them. | [optional]
**storefront_oid** | **int** | The storefront.  Also the target_id of a secret request for a provider secret. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
